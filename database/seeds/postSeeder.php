<?php

use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => "Simple post",
	        'content' => "Content of a simple post",
	        'images' => "images/avatar.png",
            'created_at' => "2018-10-17 00:00:00"
        ]);
    }
}
