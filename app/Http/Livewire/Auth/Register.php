<?php

namespace App\Http\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

#[Title('Sign Up – Volt Dashboard')]
#[Layout('components.layouts.guest')]
class Register extends Component
{

    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public function mount()
    {
        if (auth()->user()) {
            return redirect()->intended('/dashboard');
        }
    }

    public function updatedEmail()
    {
        $this->validate(['email'=>'required|email|unique:users']);
    }
    
    public function register()
    {
        $this->validate([
            'email' => 'required',
            'password' => 'required|same:passwordConfirmation|min:6',
        ]);

        $user = User::create([
            'email' =>$this->email,
            'password' => Hash::make($this->password),
            'remember_token' => Str::random(10),
        ]);

        auth()->login($user);

        return redirect('/profile');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
