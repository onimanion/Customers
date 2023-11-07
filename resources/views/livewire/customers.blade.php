<div>
<div class="row">
    <div class="col-auto">
        <input type="text" wire:model.live.debounce.150ms="search" placeholder="search" class="form-control">
    </div>
</div>
<livewire:flash-message/>
<div class="card offset-1 col-10">

    <div class="card-header">
        <h6 class="text-primary">{{\Illuminate\Support\Facades\Auth::user()->name}}</h6>
        Customers
        <button href="/customers/create" wire:navigate class="btn btn-success btn-sm" style="margin-left: 39rem !important;">create customer</button>

    </div>
    <table class="table">

        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $value)
            <tr>


                <th scope="row">{{$value->id}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->phone}}</td>
                <td>
                    <button wire:navigate href="/customers/{{$value->id}}" class="btn btn-primary btn-sm">View</button>
                    <button wire:navigate href="/customers/{{$value->id}}/edit" class="btn btn-secondary btn-sm">Edit</button>
                    <button wire:click="deleteCustomer({{$value->id}})" class="btn btn-danger btn-sm">Delete</button>
                </td>


            </tr>
        @endforeach
        </tbody>
    </table>
    {{$customers->links()}}
</div>

</div>

