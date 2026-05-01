<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sign Up Example – Volt Dashboard')]
#[Layout('components.layouts.guest')]
class RegisterExample extends Component
{
    public function render()
    {
        return view('livewire.register-example');
    }
}
