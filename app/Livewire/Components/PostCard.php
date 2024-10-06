<?php

namespace App\Livewire\Components;

use Livewire\Component;

class PostCard extends Component
{

    public $postContent;
    public $imagePath;

    public function render()
    {
        return view('livewire.components.post-card');
    }
}
