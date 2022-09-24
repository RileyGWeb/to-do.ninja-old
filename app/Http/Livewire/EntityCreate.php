<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Creates a new item based on form input.
     */
    public function store()
    {
        if ($this->name != null) {
            $newItem = new Item;
            $newItem->name = $this->name;
            $newItem->user_id = Auth::id();
            $newItem->save();
            $this->emit('itemAdded');
        }
    }

}
