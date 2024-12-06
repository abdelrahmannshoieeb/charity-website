<?php

namespace App\Livewire\Profile;

use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Editprodile extends Component
{
    public $name;
    public $city;
    public $job;
    public $phone;
    public $email;
    public $jobs =[];
    public $skills =[];
    public $skilll ;
    public $jobb ;



    public $cities;
    public $user;



    public $currentPassword;
    public $newPassword;
    public $confirmPassword;


    public function addJob()
    {
        $this->validate([
            'jobb' => 'required',
        ]);
        $this->jobs[] = $this->jobb;
        $this->jobb = '';
    }

    public function addSkill()
    {
        $this->validate([
            'skill' => 'required',
        ]);

        $this->skills[] = $this->skill;
        $this->skilll = ''; 
    }


    public function mount()
    {
        $this->cities = City::all();
        $this->user = auth()->user();
    }

    public function updatePersonal()
    {
        $validator = Validator::make([
            'name' => $this->name,
            'city' => $this->city,
            'main_job' => $this->job,
            'phone' => $this->phone,
            'email' => $this->email,
        ], [
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'main_job' => 'nullable|string|max:255',
            'phone' => 'required|string|max:15|regex:/^[0-9\-\+]{9,15}$/',
            'email' => 'required|email|max:255',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $this->user->update([
            'name' => $this->name,
            'city' => $this->city,
            'main_job' => $this->job,
            'phone' => $this->phone,
            'email' => $this->email,
        ]);
    }



    public function updatePassword()
    {
        $this->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:8',
            'confirmPassword' => 'required|same:newPassword',
        ]);

        if (!Hash::check($this->currentPassword, auth()->user()->password)) {
            throw ValidationException::withMessages(['currentPassword' => 'The current password is incorrect.']);
        }

        $this->user->update([
            'password' => Hash::make($this->newPassword),
        ]);

        $this->reset(['currentPassword', 'newPassword', 'confirmPassword']);
        session()->flash('message', 'Password successfully updated.');
    }
    public function render()
    {
        return view('livewire.profile.editprodile');
    }
}
