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

  public function store(Request $request)
  {

    $item = new \App\Item;
    $item->nama       = $request->nama;
    $item->stok       = $request->stok;
    $item->deskripsi  = $request->deskripsi;
    $item->save();
    return json_encode(array("result"=>1,"status"=>"Sukses Input Data!"));

  }

  public function update(Request $request, $id)
  {
    $nama = $request->nama;
    $stok = $request->stok;
    $deksripsi = $request->deskripsi;
    $item = \App\Item::find($id);
    $item->nama       = $nama;
    $item->stok       = $stok;
    $item->deskripsi  = $deksripsi;
    $item->save();

    return json_encode(array("result"=>1,"status"=>"Sukses Update Data!"));
  }

  public function destroy($id)
  {
    $item = \App\Item::find($id);
    $item->delete();
    return json_encode(array("result"=>1,"status"=>"Sukses Delete Data!"));
  }
}
