<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class EditCustomer extends Component
{
    public $customer=[];
    public $name;
    public $email;
    public $phone;
    public function render()
    {
        return view('livewire.edit-customer');
    }

    public function mount($customer)
    {
        $this->customer = Customer::where('id', $customer)->first();

        $this->customer->name = $this->name;
        $this->customer->email = $this->email;
        $this->customer->phone = $this->phone;
    }

    public function updateCustomer()
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255'
        ]);
        $this->customer->update($validated);
        session()->flash('success', 'customer updated sucussfully');
        return $this->redirect('/customers', navigate: true);


//        $this->reset();
    }
}
