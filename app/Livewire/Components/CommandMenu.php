<?php

namespace App\Livewire\Components;

use Livewire\Component;

class CommandMenu extends Component
{

    public $isOpen = false;

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render()
    {
        return view('livewire.components.command-menu');
    }
}

