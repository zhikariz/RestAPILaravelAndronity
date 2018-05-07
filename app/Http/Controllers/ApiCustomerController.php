<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiCustomerController extends Controller
{
    public function index()
    {
      $customer = \App\Customer::get();
      return json_encode(array("result"=>1,"data"=>$customer));
    }
}
