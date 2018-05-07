<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new \App\Customer;
        $customer->nama = "Helmi";
        $customer->username = "helmi123";
        $customer->password = "rahasia";
        $customer->jenis_kelamin = "Laki-Laki";
        $customer->save();

        $customer = new \App\Customer;
        $customer->nama = "Doi";
        $customer->username = "doi123";
        $customer->password = "rahasia";
        $customer->jenis_kelamin = "Perempuan";
        $customer->save();

    }
}
