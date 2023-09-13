<div style="text-align: center">
    <button  wire:click="$set('count',10)">+</button>

    <button wire:click="decrement">-</button>

    <h1>{{ $count }}</h1>
</div>
