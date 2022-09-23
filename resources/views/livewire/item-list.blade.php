<div>
    @foreach($items as $item)    
        <div class="flex">
            <input type="checkbox" name="completed">
            <p>{{ $item->name }}</p>
        </div>
    @endforeach
</div>
