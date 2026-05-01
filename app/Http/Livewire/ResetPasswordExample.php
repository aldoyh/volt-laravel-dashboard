<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Reset Password Example – Volt Dashboard')]
#[Layout('components.layouts.guest')]
class ResetPasswordExample extends Component
{
    public function render()
    {
        return view('reset-password-example');
    }
}
