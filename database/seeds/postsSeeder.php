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
              ['post' => '投稿内容1'],
              ['post' => '投稿内容2'],
              ['post' => '投稿内容3'],
              ['post' => '投稿内容4']
            ]);
    }
}
