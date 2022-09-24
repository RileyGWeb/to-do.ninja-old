<div>
    @foreach($items as $item)    
        <div class="flex" :wire:key="{{ $item->id }}">
            <input id="item_complete_{{ $item->id }}" wire:click="completed( {{ $item->id }} )" type="checkbox" wire:ignore wire:model="completed.{{ $item->id }}" class="w-4 h-4 text-blue-600 bg-white rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <p class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $item->name }}</p>

            <button wire:click="deleteItem( {{$item->id}} )" id="delete">
                <svg id="Layer_1" height="24" viewBox="0 0 512 512" width="24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><circle cx="256" cy="256" fill="#ff3f5b" r="256" transform="matrix(.707 -.707 .707 .707 -106.039 256)"/><path d="m337.185 149.911h-35.509v-18.911a10 10 0 0 0 -10-10h-71.352a10 10 0 0 0 -10 10v18.911h-35.509a26.881 26.881 0 0 0 -26.85 26.85v16.849a10 10 0 0 0 10 10h4.3v149.31a38.123 38.123 0 0 0 38.08 38.08h111.31a38.122 38.122 0 0 0 38.083-38.079v-149.312h4.3a10 10 0 0 0 10-10v-16.849a26.881 26.881 0 0 0 -26.849-26.849zm-106.861-8.911h51.352v8.913h-51.352zm-62.359 35.76a6.94 6.94 0 0 1 6.85-6.848h162.37a6.941 6.941 0 0 1 6.849 6.85v6.85h-176.069zm161.773 176.159a18.1 18.1 0 0 1 -18.083 18.081h-111.31a18.1 18.1 0 0 1 -18.083-18.08v-149.311h147.476zm-83.738-9.959v-111.311a10 10 0 0 1 20 0v111.311a10 10 0 1 1 -20 0zm-41.869 0v-111.311a10 10 0 0 1 20 0v111.311a10 10 0 0 1 -20 0zm83.738 0v-111.311a10 10 0 0 1 20 0v111.311a10 10 0 0 1 -20 0z" fill="#fff" fill-rule="evenodd"/></svg>
            </button>
        </div>
        <script>
            var completed = @js($item->completed);
            function checkIfComplete() {
                if (completed == 0) {
                    console.log("its 0");
                    document.getElementById("item_complete_{{ $item->id }}").checked = false;
                } else {
                    console.log("its 1");
                    document.getElementById("item_complete_{{ $item->id }}").checked = true;
                }
            }
            window.setTimeout(checkIfComplete, 100);
        </script>
    @endforeach
</div>
