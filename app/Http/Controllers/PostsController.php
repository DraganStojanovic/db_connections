<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //    $posts = DB::select("SELECT * FROM posts");

        // dd($posts);


        return view('posts', ["posts" => $posts]);
    }
}

