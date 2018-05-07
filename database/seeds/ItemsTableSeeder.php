<?php

use Illuminate\Database\Seeder;
// use \App\Item;
class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $item = new Item;
        $item = new \App\Item;
        $item->nama       = "HP";
        $item->stok       = 10;
        $item->deskripsi  = "Merk HPnya Xiaomi";
        $item->save();
    }
}
