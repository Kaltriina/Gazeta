<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "kaltrina",
	        'email' => "k.baftiu@gmail.com",
            'password' => bcrypt('123123'),
            'created_at' => "2018-10-17 00:00:00"
        ]);
    }
}
