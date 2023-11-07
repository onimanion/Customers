<?php

use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\EditCustomer;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\SingleCustomer;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group([
    'prefix' => 'customers',
    'middleware' => 'auth'
], function () {
    Route::get('/create', CreateCustomer::class);

    Route::get('/', Customers::class);

    Route::get('/{customer}', SingleCustomer::class);
    Route::get('/{customer}/edit', EditCustomer::class);
});
Route::get('/register', Register::class);
Route::get('/login', Login::class)->name('login');


