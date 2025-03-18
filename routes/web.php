<?php

declare(strict_types = 1);

use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

Route::get('/customers', function () {
    $customer = Customer::query()
        ->with('contacts')
        ->get();

    return CustomerResource::collection($customer);
});
