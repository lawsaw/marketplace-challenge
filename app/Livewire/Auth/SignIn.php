<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SignIn extends Component
{

    #[Validate('required')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public $loginMessage = '';

    public function signIn()
    {
        $this->validate();
        $valid = Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        if ($valid) {
            redirect()->route('dashboard');
        } else {
            $this->loginMessage = "Incorrect email and/or password";
        }
    }
    public function render()
    {
        return view('livewire.auth.sign-in');
    }
}
