<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Customers extends Component
{
    public $id;



    public $name;
    public $email;
    public $phone;
    public $customers = [];
    public $customer;
    public function render()
    {
        $this->customers = Customer::all();


        return view('livewire.customers');


    }


}
