<div>
    <form wire:submit.prevent="store()">
        @csrf
        
        <h3>Create item</h3>
        <input type="text" wire:model="name" id="itemName" placeholder="Item Name" />
        <input type="submit" text="Submit" class="border border-slate-600 px-4 py-2 rounded cursor-pointer" />
    </form>
</div>
