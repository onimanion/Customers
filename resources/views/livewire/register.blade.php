<div class="card offset-3 col-6">
    <div class="card-header">
        Register
    </div>
    <div class="card-body">
        <form wire:submit="storeCustomer">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" wire:model="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" wire:model="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" wire:model="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   <div class="mb-3 offset-4 col-6">
         Already have an account? <a wire:navigate href="/login" > Login </a>
   </div>
</div>
