<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        ['title'=>'Tips and Build Colorado', 'content'=>'lorem ipsum'],
        ['title'=>'Haruskah Kita Gacha Okita??', 'content'=>'lorem ipsum'],
        ['title'=>'Membangun Chaldea Impian', 'content'=>'lorem ipsum']
        ];
        // masukkan data ke database
        DB::table('posts')->insert($posts);
        
    }
}
