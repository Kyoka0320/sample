<?php

use Illuminate\Database\Seeder;

class BookmarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_bookmarks')->insert([
           'created_at' => Carbon\Carbon::now(),
           'updated_at' => Carbon\Carbon::now(),
           'user_id' => 1,
           'task_id' =>2,
        ]);
    }
}
