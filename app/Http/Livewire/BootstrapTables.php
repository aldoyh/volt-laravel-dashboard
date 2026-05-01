<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Bootstrap Tables – Volt Dashboard')]
class BootstrapTables extends Component
{
    public function render()
    {
        return view('bootstrap-tables');
    }
}
