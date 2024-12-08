<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SignUp extends Component
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
//            'password' => ['required', Password::min(6), 'confirmed'],
            'password' => ['required', 'confirmed'],
        ];
    }

    public function signUp()
    {
        $data = $this->validate();
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.auth.sign-up');
    }
}
