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

    public function completed($id, $completed)
    {
        if( $completed ) {
            $existingItem = Item::where( 'id',$id );
        }

        if( $existingItem ) {
            // $existingItem->completed = $completed ? true : false;
            // $existingItem->completed_at = $completed ? Carbon::now() : null;
            $completed_at = null;
            if ( $completed ) {
                $completed_at = Carbon::now();
            }
            $existingItem->update([
                'completed' => $completed,
                'completed_at' => $completed_at,
            ]);
            return $existingItem;
        }

        return "Item not found";
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
