<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Upgrade to Pro – Volt Dashboard')]
class UpgradeToPro extends Component
{
    public function render()
    {
        return view('livewire.upgrade-to-pro');
    }
}
