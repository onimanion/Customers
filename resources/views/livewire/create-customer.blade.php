
<div class="card offset-4 col-5">
    <h5 class="card-header">Create Customer</h5>
    <div class="card-body">
        <form wire:submit="save">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" wire:model="name" class="form-control" id="exampleInputName">
                <div>
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input  type="email" wire:model="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div>
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                <input type="text" wire:model="phone" class="form-control" id="exampleInputPassword1">
                <div>
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <button wire:navigate href="/customers" class="btn btn-secondary">Back</button>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>
