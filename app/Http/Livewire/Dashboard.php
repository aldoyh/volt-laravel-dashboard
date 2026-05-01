<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard – Volt Dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        return view('dashboard');
    }
}
