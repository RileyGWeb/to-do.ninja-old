<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ItemList extends Component
{
    protected $listeners = [
        'itemAdded' => '$refresh',
    ];
    public $item;
    public $items = [];
    public $completed = false;
    public $completed_at = null;
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

    public function completed($id)
    {
        $item = Item::find( $id );

        if (is_null($item)) {
            return; // item not found
        }
        // if (is_null($item->completed_at)) {
        //     $item->update([
        //         'completed' => true,
        //         'completed_at' => now(),
        //     ]);
        // } else {
        //     $item->update([
        //         'completed' => false,
        //         'completed_at' => null,
        //     ]);
        // }
        // dd( $this->completed );
        if( !$item->completed ) {
            $item->update([
                'completed' => true
            ]);
        } else {
            $item->update([
                'completed' => false
            ]);
        }
    }

    /**
     * Deletes item from list.
     */
    public function deleteItem($id)
    {
        $existingItem = Item::find( $id );

        if( $existingItem ) {
            $existingItem->delete();
            return "Item successfully deleted.";
        }

        return "Item not found";
    }
    
}
