<div class="mb-6">
    <form wire:submit.prevent="store()">
        @csrf
        
        <h3 class="text-xl">Add a task</h3>
        <div class="flex">
            <input type="text" wire:model="name" id="itemName" wire:ignore placeholder="What are we doing today?" onkeyup="checkIfEmpty()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 block w-full py-2.5 px-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white mr-4" />
            <input type="submit" value="Add" id="itemSubmit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-full text-sm px-5 py-2.5 text-center cursor-pointer ease-in-out duration-300 transition-all" />
        </div>
    </form>
 
    <script>
        function checkIfEmpty() {
            var inputValue = document.getElementById("itemName").value;
            var submitButton = document.getElementById("itemSubmit");
            if ( inputValue == null || inputValue == '') {
                submitButton.classList.add('disabled');
            } else {
                submitButton.classList.remove('disabled');
            }
        }
    </script>
</div>
