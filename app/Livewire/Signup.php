<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Signup extends Component
{

    public $name, $email, $password, $confirm_password, $phone, $city , $main_job;

    protected $rules = [
        'name' => 'required|string|min:3|max:50',
        'main_job' => 'string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'confirm_password' => 'required|same:password',
        'phone' => 'required|unique:users,phone|digits:11',
        'city' => 'required|string|max:50',
    ];

    public function submit()
    {
        $this->validate();

        // Save user data to the database
        \App\Models\User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'phone' => $this->phone,
            'city' => $this->city,
            'main_job' => $this->main_job
        ]);

        $this->reset();

        redirect('/login');
    }
    public function render()
    {
        return view('livewire.signup');
    }
}
