<div>
    <form class="w-50 m-auto mt-5 " wire:submit.prevent="submit">
        <div>
            <label for="exampleInputEmail1" class="form-label">Upload Files</label>
            <input type="file" class="form-control" wire:model="photo" multiple>
            @error('photo')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="text-primary" wire:loading wire:target='photo'>Uploading ...</div>

        </div>
        <div class="mb-3">

{{--            استعراض صورة قبل الرفع --}}
            @if($photo)

                image preview;
                <img src="{{$photo->temporaryUrl()}}"width="200">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
