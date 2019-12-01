<?php

use Illuminate\Database\Seeder;

class Customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customers\Models\Customer::create([
            'name'  => 'rfedcsx',
        ]);
    }
}
