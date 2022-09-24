<div>
    <form wire:submit.prevent="store()">
        @csrf
        
        <h3>Create item</h3>
        <input type="text" wire:model="name" id="itemName" wire:ignore placeholder="Item Name" onkeyup="checkIfEmpty()" />
        <input type="submit" text="Submit" id="itemSubmit" wire:ignore class="border border-slate-600 px-4 py-2 rounded cursor-pointer hidden" />
    </form>

    <script>
        function checkIfEmpty() {
            var inputValue = document.getElementById("itemName").value;
            var submitButton = document.getElementById("itemSubmit");
            if ( inputValue == null || inputValue == '') {
                submitButton.classList.add('hidden');
            } else {
                submitButton.classList.remove('hidden');
            }
        }
    </script>
</div>
