<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
      public function index()
    {
        $customer = Customer::all();
        return $customer;
    }
     public function show($id)
    {
        $customer = Customer::find($id);
        return $customer;
    }
     public function store($code= null, $name= null, $email=null, $country=null, $city=null, $address=null, $number= null)
    {
        $customer = new Customer();
        $customer-> code = $code;
        $customer-> name = $name;
        $customer-> email = $email;
        $customer-> country = $country;
        $customer-> city= $city;
        $customer-> address= $address;
        $customer-> number= $number;
        $customer->save();
        return $customer;
    }
     public function edit($id, $code= null, $name= null,$email=null, $country=null, $city=null, $address=null, $number= null)
    {
        $customer = Customer::find($id);
        $customer-> code = $code;
        $customer-> name = $name;
        $customer-> email = $email;
        $customer-> country = $country;
        $customer-> city= $city;
        $customer-> address= $address;
        $customer-> number= $number;
        $customer->save();
        return $customer;
    }
    public function del($id){

        $customer = Customer::find($id)->delete();
    

    }
}
