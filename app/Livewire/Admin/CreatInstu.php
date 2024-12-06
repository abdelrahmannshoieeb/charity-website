<?php

namespace App\Livewire\Admin;

use App\Models\BasicJob;
use App\Models\City;
use App\Models\inst_jobs;
use App\Models\Institution;
use App\Models\Job;
use GuzzleHttp\Promise\Create;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatInstu extends Component
{
    use WithFileUploads;

    public $name;
    public $telephone;
    public $selectedJobs = [];
    public $selectedCity;
    public $image;
    public $selectOptions;
    public $cities;

    // Load job options and cities on mount
    public function mount()
    {
        $this->selectOptions = BasicJob::all(); // Retrieve jobs for the dropdown
        $this->cities = City::all(); // Retrieve cities for the dropdown
    }

    // Submit the form and store the data
    public function submit()
    {
       
        $imagePath = $this->image->store('institutions', 'public');
        // Dump the validated data
        $institution = Institution::create([
            'name' => $this->name,
            'phone' => $this->telephone,
            'city' => $this->selectedCity, 
            'image' => $imagePath, 
        ]);
        

       inst_jobs::create([
            'inst_id' => $institution->id,
            'job_id' => $this->selectedJobs
       ]);


        // Handle image upload
       

        // Set a success message
        session()->flash('message', 'Institution created successfully!');
        
        // Reset the form fields
        $this->reset();

        // return redirect()->route('institution.index');
    }

    public function render()
    {
        return view('livewire.admin.creat-instu');
    }
}

