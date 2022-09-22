<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Item extends Component
{
    public $name;
    public $completed;

    public function render()
    {
        return view('livewire.item');
    }
}
