<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Validate;

class SignIn extends AdminComponent
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
        return view('livewire.dashboard.sign-in');
    }
}
