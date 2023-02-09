<?php

namespace App\Http\Livewire;

use App\Models\Injured;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class InjuredTable extends Component implements HasTable
{
    use InteractsWithTable;

    protected $queryString = [
        'tableFilters',
        'tableSortColumn',
        'tableSortDirection',
        'tableSearchQuery' => ['except' => ''],
        'tableColumnSearchQueries',
    ];

    protected function getTableQueryStringIdentifier(): ?string
    {
        return 'injured';
    }

    protected function getTableQuery(): Builder
    {
        return Injured::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\Layout\Split::make([
                Tables\Columns\TextColumn::make('city')
                    ->label('İl / İlçe / Mahalle')
                    ->getStateUsing(function (Injured $record) {
                        return sprintf('%s / %s / %s', $record->city, $record->district, $record->street);
                    }),

                Tables\Columns\TextColumn::make('address')
                    ->label('Adres Tarifi')
                    ->searchable()
                    ->visibleFrom('md'),

                Tables\Columns\TextColumn::make('fullname')
                    ->label('Ad Soyad')
                    ->searchable()
                    ->hiddenFrom('xl'),
            ]),
            Tables\Columns\Layout\Panel::make([
                Tables\Columns\Layout\Stack::make([
                    Tables\Columns\TextColumn::make('city')
                        ->label('İl / İlçe / Mahalle')
                        ->getStateUsing(function (Injured $record) {
                            return sprintf('%s / %s / %s', $record->city, $record->district, $record->street);
                        }),
                    // Tables\Columns\TextColumn::make('address_detail')
                    //     ->label('Adres Bilgisi')
                    //     ->getStateUsing(function (Injured $record) {
                    //         return sprintf('%s %s / No: %s Kat: %s', $record->street2, $record->apartment, $record->apartment_no, $record->apartment_floor);
                    //     }),
                    Tables\Columns\TextColumn::make('district')
                        ->label('Adres')
                        ->getStateUsing(function (Injured $record) {
                            return sprintf('%s %s / No: %s Kat: %s', $record->street2, $record->apartment, $record->apartment_no, $record->apartment_floor);
                        })
                        ->searchable(),
                    Tables\Columns\TextColumn::make('address')
                        ->label('Adres Tarifi')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('fullname')
                        ->label('Ad Soyad')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('maps_link')
                        ->label('Harita Linki'),
                ]),
            ])->collapsible(),
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            Tables\Filters\Filter::make('address')
                ->form([
                    Select::make('city')
                        ->options(fn() => Injured::select('city')->distinct()->get()->pluck('city', 'city'))
                        ->label('İl'),
                    Select::make('district')
                        ->options(fn($get) => Injured::select(['district', 'city'])->where('city', $get('city'))->distinct()->get()->pluck('district', 'district'))
                        ->label('İlçe')
                        ->visible(fn($get) => filled($get('city'))),
                    Select::make('street')
                        ->options(fn($get) => Injured::select(['street', 'district', 'city'])->where('city', $get('city'))->where('district', $get('district'))->distinct()->get()->pluck('street', 'street'))
                        ->label('Mahalle')
                        ->visible(fn($get) => filled($get('district'))),
                ])
                ->query(function ($query, $data) {
                    $query
                        ->when(
                            filled(data_get($data, 'city')),
                            fn($query) => $query->where('city', data_get($data, 'city'))
                        )
                        ->when(
                            filled(data_get($data, 'district')),
                            fn($query) => $query->where('district', data_get($data, 'district'))
                        )
                        ->when(
                            filled(data_get($data, 'street')),
                            fn($query) => $query->where('street', data_get($data, 'street'))
                        );
                }),
        ];
    }

    protected function getTableActions(): array
    {
        return [];
    }

    protected function getTableBulkActions(): array
    {
        return [];
    }

    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return [10, 25, 50, 100];
    }

    public function render()
    {
        return view('livewire.injured-table');
    }
}
