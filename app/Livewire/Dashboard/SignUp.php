<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class SignUp extends AdminComponent
{

    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ];
    }

    public function signUp()
    {
        $data = $this->validate();
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.dashboard.sign-up');
    }
}
