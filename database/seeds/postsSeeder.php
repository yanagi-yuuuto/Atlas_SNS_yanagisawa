<?php

use Illuminate\Database\Seeder;

class postsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
              // [
              //   'user_id' => '1',
              //   'post' => 'user1の投稿です。'
              // ],
              // [
              //   'user_id' => '1',
              //   'post' => 'user1の二番目の投稿です。'
              // ],
              // [
              //   'user_id' => '1',
              //   'post' => 'user1の三番目の投稿です。'
              // ],
              // [
              //   'user_id' => '2',
              //   'post' => 'user2の投稿です。'
              // ],
              // [
              //   'user_id' => '3',
              //   'post' => 'user3の投稿です。'
              // ],
              // [
              //   'user_id' => '4',
              //   'post' => 'user4の投稿です。'
              // ]
            ]);
    }
}
