<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sign In Example – Volt Dashboard')]
#[Layout('components.layouts.guest')]
class LoginExample extends Component
{
    public function render()
    {
        return view('livewire.login-example');
    }
}
