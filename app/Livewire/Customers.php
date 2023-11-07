<?php

namespace App\Livewire;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;
    public $id;
    protected $paginationTheme = 'bootstrap';


    public $name;
    public $email;
    public $phone;
//    public $customers = [];
    public $customer;
    public $search = '';
    public function render()
    {
        if (! $this->search){
            $customers = Customer::paginate(5);
        } else {
            $customers = Customer::where('name', 'like', '%'.$this->search.'%')->paginate(5);
        }



        return view('livewire.customers', [
            'customers'=> $customers,
        ]

        );


    }

    public function deleteCustomer($customer)
    {
        $this->customer = Customer::where('id', $customer)->first();
        $this->customer->delete();
        session()->flash('success', 'customer deleted sucussfully');
        return $this->redirect('/customers', navigate: true);
    }


}
