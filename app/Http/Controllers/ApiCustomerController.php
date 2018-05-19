<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiCustomerController extends Controller
{
    public function index()
    {
      $customer = \App\Customer::get();
      return json_encode(
        array(
        "status"=>true,
        "message"=>"Berhasil Menampilkan Data",
        "data"=>$customer));
    }

    public function searchByGet($username,$password)
    {
      $customer = \App\Customer::where([
                            ['username','=',$username],
                            ['password','=',$password]])->get();
      return json_encode(
        array(
          "status"=>true,
          "message"=> "Berhasil Menampilkan Data",
          "data"=>$customer
        ));
    }

    public function searchByPost(Request $request){
      $customer = \App\Customer::where([
                            ['username','=',$request->username],
                            ['password','=',$request->password]])->get();
      return json_encode(
        array(
          "status"=>true,
          "message"=> "Berhasil Menampilkan Data",
          "data"=>$customer
        ));
    }

    public function store(Request $request)
    {

      $customer = new \App\Customer;
      $customer->nama       = $request->nama;
      $customer->username       = $request->username;
      $customer->password  = $request->password;
      $customer->jenis_kelamin = $request->jenis_kelamin;
      $customer->save();
      return json_encode(
        array(
          "status"=>true,
          "message"=> "Berhasil Input Data",
          "data"=>$customer
        ));

    }

    public function update(Request $request, $id)
    {
      $nama = $request->nama;
      $username = $request->username;
      $password = $request->password;
      $jenis_kelamin = $request->jenis_kelamin;
      $customer = \App\Customer::find($id);
      $customer->nama       = $nama;
      $customer->username       = $username;
      $customer->password  = $password;
      $customer->jenis_kelamin = $jenis_kelamin;
      $customer->save();

      return json_encode(
        array(
          "status"=>true,
          "message"=>"Berhasil Ubah Data",
          "data"=> $customer
        ));
    }

    public function destroy($id)
    {
      $item = \App\Item::find($id);
      $item->delete();
      return json_encode(
        array(
          "status"=>true,
          "message"=>"Berhasil Delete Data"
        ));
    }
}
