<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('followers')->insert([
            'user_id' => 123,
            'follower_id' => 123,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
            
        ])
    }
}
