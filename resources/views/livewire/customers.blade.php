<div class="card offset-2 col-8">
    <div class="card-header">
        Customers
    </div>
    <table class="table">

        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">phone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($this->customers as $value)
            <tr>


                <th scope="row">{{$value->id}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->phone}}</td>



            </tr>
        @endforeach
        </tbody>
    </table>

</div>


