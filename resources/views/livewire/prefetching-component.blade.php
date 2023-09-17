<div>
<button wire:click.prefetch="fetch">Fetch</button>

@if ($email)
    <div class="alert alert-success">

        {{$email}}
    </div>
    <span>Some Content...</span>
@endif

</div>
