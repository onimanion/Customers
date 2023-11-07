<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.register');
    }
    public function storeCustomer()
    {
        $validated = $this->validate([
            'name' => 'required|max:225',
            'email'=> 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:16'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        Auth::login($user);
        session()->flash('success', 'Registration Sesccussful!');
        return  $this->redirect('/customers', navigate:true);
    }
}
