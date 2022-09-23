<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;

class EntityCreate extends Component
{
    public $name;

    /**
     * Renders component.
     */
    public function render()
    {
        return view('livewire.entity-create');
    }
}
