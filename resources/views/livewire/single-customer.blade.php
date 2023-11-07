<div class="card">
    <h5 class="card-header">Customer Information</h5>
    <div class="card-body">
        <h5 class="card-title">Name: {{$this->customer->name}}</h5>
        <p class="card-text">Email Adress: {{$this->customer->email}}</p>
        <p class="card-text">Phone Number: {{$this->customer->phone}}</p>
        <a href="/customers" wire:navigate class="btn btn-secondary">Back</a>
    </div>
</div>
