<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class SingleCustomer extends Component
{
    public $customer=[];


    public function mount($customer)
    {
        $this->customer= Customer::where('id', $customer)->first();


    }
    public function render()
    {
        return view('livewire.single-customer');
    }
}
