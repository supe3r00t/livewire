<div class="w-50 m-auto mt-5">
    <button wire:click='submit'>Submit</button>

    <div class="btn btn-primary"  role="status" wire:loading>
        <span class="visually-hidden">Loading...</span>
    </div>



    <div class="btn btn-primary" >
        <button wire:click='submit2' wire:loading.class="btn btn-primary" >Submit2</button>

        <div class="btn btn-danger"  role="status" wire:loading wire:target='submit'>
            <span class="visually-hidden">Loading...</span>
        </div>

{{--    <small class="text-primary" wire:loading>--}}

{{--        Loading ...--}}
{{--    </small>--}}
</div>
</div>
