<?php

namespace App\Livewire\Admin\Cities;

use App\Models\Region;
use Livewire\Component;

class Regions extends Component
{
    public $regions;

    public function mount()
    {
        $this->regions = Region::all();
    }

    public function render()
    {
        return view('livewire.admin.cities.regions');
    }
}
