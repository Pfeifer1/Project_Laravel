<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    //
    public function home() {
        return view('Home');
    }

    public function blog() {
        // $posts = [
        //     ['id' => 1, 'title' => 'PHP','slug' => 'php'],
        //     ['id' => 2, 'title' => 'Laravel','slug' => 'laravel']
        // ];
        // $posts = Post::get();

        $posts = Post::latest()->paginate();

        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post) {
        return view('post', ['post' => $post]);
    }
}
