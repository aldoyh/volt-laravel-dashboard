<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('404 – Page Not Found – Volt Dashboard')]
#[Layout('components.layouts.minimal')]
class Err404 extends Component
{
    public function render()
    {
        return view('404');
    }
}
