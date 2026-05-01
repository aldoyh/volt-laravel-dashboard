<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('500 – Server Error – Volt Dashboard')]
#[Layout('components.layouts.minimal')]
class Err500 extends Component
{
    public function render()
    {
        return view('500');
    }
}
