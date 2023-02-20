<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Data;
use App\Models\District;
use App\Models\Injured;
use App\Models\Neighborhood;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\HtmlString;
use Livewire\Component;

/**
 * @property \Filament\Forms\ComponentContainer form
 */
class AddressNotificationForm extends Component implements HasForms
{
    use InteractsWithForms;
    use WithRateLimiting;

    public ?array $data = [];

    public function mount()
    {
        $this->form->fill();
    }

    protected function getFormStatePath(): ?string
    {
        return 'data';
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make()
                ->columns(2)
                ->schema([
                    Select::make('city')
                        ->placeholder('Şehir Seçiniz')
                        ->disableLabel()
                        ->searchable()
                        ->required()
                        ->reactive()
                        ->default(City::DEFAULT_SELECTED)
                        ->options(fn() => City::activeCities()->pluck('name', 'id'))
                        ->afterStateUpdated(function ($set) {
                            $set('district', null);
                            $set('neighbourhood', null);
                        }),
                    Select::make('district')
                        ->placeholder('İlçe Seçiniz')
                        ->disableLabel()
                        ->searchable()
                        ->preload()
                        ->required()
                        ->reactive()
                        ->default(null)
                        ->options(fn(callable $get) => District::where('city_id', $get('city'))->pluck('name', 'id'))
                        ->afterStateUpdated(fn($set) => $set('neighbourhood', null)),
                    Select::make('neighbourhood')
                        ->placeholder('Mahalle Seçiniz')
                        ->disableLabel()
                        ->searchable()
                        ->preload()
                        ->required()
                        ->default(null)
                        ->options(fn(callable $get) => Neighborhood::whereRelation('street', 'district_id', $get('district'))->pluck('name', 'id') ?? []),
                    TextInput::make('street')
                        ->placeholder('Sokak')
                        ->disableLabel()
                        ->required(),
                    TextInput::make('apartment')
                        ->placeholder('Apartman Adı')
                        ->disableLabel()
                        ->required(),
                    TextInput::make('apartment_no')
                        ->placeholder('Apartman No')
                        ->disableLabel(),
                    TextInput::make('apartment_floor')
                        ->placeholder('Apartman Kat')
                        ->disableLabel(),
                    TextInput::make('source')
                        ->placeholder('Bilgi Kaynağı')
                        ->disableLabel()
                        ->required()
                        ->columnSpanFull(),
                    TextInput::make('full_name')
                        ->placeholder('Ad Soyad')
                        ->disableLabel(),
                    TextInput::make('phone_number')
                        ->placeholder('Telefon Numarası')
                        ->disableLabel(),
                    Textarea::make('address')
                        ->placeholder('Talep/Yardım Açıklaması')
                        ->disableLabel()
                        ->columnSpanFull(),

//                    Select::make('source_type')
//                        ->placeholder('Bilgi Kaynağı')
//                        ->disableLabel()
//                        ->required()
//                        ->options(['Sosyal Medya', 'Tanıdık/Duyum', 'Kendisi']),
//                    TextInput::make('source')
//                        ->placeholder('Bilgi Kaynağı')
//                        ->disableLabel()
//                        ->afterStateUpdated(static function ($set) { dump($set); }),
                    Checkbox::make('gdpr')
                        ->columnSpanFull()
                        ->accepted()
                        ->required()
                        ->label(fn() => new HtmlString('<a href="#popup-gdpr" data-fancybox class="link cursor-pointer text-[14px] leading-tight text-primary-500 font-semibold hover:text-primary-800 duration-500">Aydınlatma Metni</a>\'ni okudum ve kabul ediyorum.')),
                    Checkbox::make('gdpr2')
                        ->columnSpanFull()
                        ->accepted()
                        ->required()
                        ->extraAttributes(['class' => 'text-red-500 focus:border-red-500 ring-red-500 focus:ring-red-500'])
                        ->label(
                            fn() => new HtmlString('<span class="text text-[14px] text-red-500 leading-tight duration-500 hover:text-red-600">
                                Enkaz, yıkım, yardım ve destek ihtiyaçları konusunda verdiğim bilgilerin doğru ve teyit edilmiş
                                olduğunu, bilgi kirliliği ve yanlış uygulamalara yol açmamak için gerekli tüm önlem ve
                                tedbirleri aldığımı, vermiş olduğum bilgilerde meydana gelen değişiklik ve
                                güncellemeleri bildireceğimi kabul ve beyan ederim.</span>')
                        )
                ])
        ];
    }

    public function render()
    {
        return view('livewire.address-notification-form');
    }

    public function submit()
    {
        $this->form->validate();

        try {
            $this->rateLimit(5);
        } catch (\Exception $exception) {
            session()->flash('success', [
                'title' => 'Kayıt Başarısız',
                'message' => 'Kayıt eklemek için bir süre bekleyiniz',
                'type' => 'error',
            ]);
            return;
        }

        $realIp = request()->header('True-Client-IP');
        if (empty($realIp)) {
            $realIp = request()->ip();
        }

        $insert = Injured::create([
            'city' => City::find(data_get($this->data, 'city'), 'name')->name,
            'district' => District::find(data_get($this->data, 'district'), 'name')->name,
            'street' => Neighborhood::find(data_get($this->data, 'neighbourhood'), 'name')->name,
            'street2' => data_get($this->data, 'street'),
            'apartment' => data_get($this->data, 'apartment'),
            'apartment_no' => data_get($this->data, 'apartment_no'),
            'apartment_floor' => data_get($this->data, 'apartment_floor'),
            'phone' => data_get($this->data, 'phone_number'),
            'address' => data_get($this->data, 'address'),
            'fullname' => data_get($this->data, 'full_name'),
            'source' => data_get($this->data, 'source'),
            'ip_address' => $realIp,
        ]);

        if ($insert) {
            session()->flash('success', [
                'type' => 'success',
                'title' => 'Kayıt Başarılı',
                'message' => 'Veri başarıyla eklendi',
            ]);
        } else {
            session()->flash('success', [
                'title' => 'Kayıt Başarısız',
                'message' => 'Veri eklenirken bir hata oluştu',
                'type' => 'error',
            ]);
        }

        $this->clearForm();
    }

    public function clearForm()
    {
        $this->reset();
    }
protected function getRateLimitKey($method)
    {
        if (! $method) $method = debug_backtrace()[1]['function'];

        return sha1(static::class.'|'.$method.'|'.request()->header('True-Client-IP'));
    }
}
