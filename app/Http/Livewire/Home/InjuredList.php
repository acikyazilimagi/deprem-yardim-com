<?php

namespace App\Http\Livewire\Home;

use App\Models\Injured;
use GuzzleHttp\Client;
use Livewire\Component;
use Livewire\WithPagination;

class InjuredList extends Component
{
    use WithPagination;

    public function render()
    {
        $injureds = Injured::latest()->paginate(10);
        return view('livewire.home.injured-list', compact('injureds'));
    }
}
