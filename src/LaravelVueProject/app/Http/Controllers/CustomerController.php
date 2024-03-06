<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Sex;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::all();
    }

    public function detail(Customer $customer)
    {
        return $customer;
    }

    public function store(Request $request)
    {
        return Customer::create($request->all());
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return $customer;
    }

    public function delete(Customer $customer){
        $customer->delete();
        return $customer;
    }
    
    public function getSex()
    {
        $sex = Sex::getSex();
        return $sex;
    }

}
