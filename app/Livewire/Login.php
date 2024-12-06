<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $username, $password, $remember = false;

    protected $rules = [
        'username' => 'required|string',
        'password' => 'required|string|min:6',
    ];

    public function login()
    {
        if (!session()->has('alert')) {
            session()->put('alert', 1); 
        }

        $this->validate();

        if (Auth::attempt(['email' => $this->username, 'password' => $this->password , 'type' => 'user'], $this->remember)) {
            return redirect()->intended('/');
        }elseif (Auth::attempt(['email' => $this->username, 'password' => $this->password , 'type' => 'admin'], $this->remember)) {
            return redirect()->intended('/admin');
        }

        $this->addError('username', 'Invalid username or password.');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
