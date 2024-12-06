<?php

namespace App\Livewire\Admin\Cities;

use App\Models\BasicJob;
use Livewire\Component;

class Jobs extends Component
{

    public $jobs;

    public function mount()
    {
        $this->jobs = BasicJob::all();
    }
    public function render()
    {
        return view('livewire.admin.cities.jobs');
    }
}
