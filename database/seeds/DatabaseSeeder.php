<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TasksTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(BookmarksTableSeeder::class);
        $this->call(FollowersTableSeeder::class);
    }
}
