<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Lock – Volt Dashboard')]
#[Layout('components.layouts.minimal')]
class Lock extends Component
{
    public function render()
    {
        return view('lock');
    }
}
