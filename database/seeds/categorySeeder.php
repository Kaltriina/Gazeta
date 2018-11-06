<?php

use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "kushtrimi",
            'created_at' => "2018-10-17 00:00:00"
        ]);
        DB::table('categories')->insert([
            'name' => "baftiu",
            'created_at' => "2018-10-17 00:00:00"
        ]);
    }
}
