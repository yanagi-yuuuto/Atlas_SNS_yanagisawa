<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(usersSeeder::class);
        //  $this->call(postsSeeder::class);
        //  $this->call(followsSeeder::class);
    }
}
