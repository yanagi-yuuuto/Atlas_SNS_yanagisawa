<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([
              [
              'username' => 'user1',
              'mail' => 'user1@gmail.com',
              'password' => bcrypt('user1user1'),
              'images' => 'icon1.png',
              ],
              [
              'username' => 'user2',
              'mail' => 'user2@gmail.com',
              'password' => bcrypt('user2user2'),
              'images' => 'icon2.png',
              ],
              [
              'username' => 'user3',
              'mail' => 'user3@gmail.com',
              'password' => bcrypt('user3user3'),
              'images' => 'icon3.png',
              ],
              [
              'username' => 'user4',
              'mail' => 'user4@gmail.com',
              'password' => bcrypt('user4user4'),
              'images' => 'icon4.png',
              ],
          ]);
    }
}
