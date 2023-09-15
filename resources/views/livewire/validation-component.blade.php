<form class="w-50 m-auto mt-5"  wire:submit.prevent="submit">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" wire:model='email'>
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror

        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        @error('password') <span class="text-danger">{{ $message }}</span> @enderror

        <input type="password" class="form-control" wire:model.defer="password">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" wire:model.defer="remember">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
