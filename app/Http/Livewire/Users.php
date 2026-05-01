<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Users – Volt Dashboard')]
class Users extends Component
{
    public function render()
    {
        return view('livewire.users');
    }
}
