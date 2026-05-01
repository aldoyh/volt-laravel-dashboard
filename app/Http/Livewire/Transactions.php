<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Transactions – Volt Dashboard')]
class Transactions extends Component
{
    public function render()
    {
        return view('transactions');
    }
}
