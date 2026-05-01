<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Forgot Password Example – Volt Dashboard')]
#[Layout('components.layouts.guest')]
class ForgotPasswordExample extends Component
{
    public function render()
    {
        return view('livewire.forgot-password-example');
    }
}
