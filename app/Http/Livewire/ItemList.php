<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ItemList extends Component
{
    protected $listeners = ['itemAdded' => '$refresh'];
    public $items = [];
    /**
     * Renders the component
     */
    public function render()
    {
        $this->items = $this->getItemList();
        return view('livewire.item-list', $this->items);
    }

    /**
     * Returns a list of items.
     */
    public function getItemList()
    {
        return DB::table('items')
        ->where('user_id', '=', Auth::id())
        ->get();
    }
}
