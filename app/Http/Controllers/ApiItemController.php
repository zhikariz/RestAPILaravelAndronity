<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiItemController extends Controller
{
  public function index()
  {
    $item = \App\Item::get();
    return json_encode(array("result"=>1,"data"=>$item));
  }
}
