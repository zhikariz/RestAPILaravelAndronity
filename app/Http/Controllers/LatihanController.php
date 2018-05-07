<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CobaLagi; // pake model coba lagi

class LatihanController extends Controller
{
    public function index()
    {
      $cobalagi = CobaLagi::get();
      return $cobalagi;
    }

    public function welcome()
    {
      return view('welcome');
    }
}
