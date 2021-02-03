<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = new Post();
        $post1->title = "Main Title";
        $post1->body = "Lorem Ipsum Sit Emet...";
        $post1->autor = "Dragan";
        $post1->save();


//        DB::table('posts')->insert([
//        [
//            "title"=>"Prvi Post",
//            "body"=>"Lorem ipsum Sit Emet...",
//            "autor"=>"Dragan"
//        ],
//        [
//            "title"=>"Drugi Post",
//            "body"=>"Lorem ipsum Sit Emet...",
//            "autor"=>"Marija"
//            ]
//        ]);

    }
}
