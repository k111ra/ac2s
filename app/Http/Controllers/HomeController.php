<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function showBlogList() {
        $posts = Post::orderBy('id', 'DESC')->paginate(2);
        return view('blog')->with('posts', $posts);
    }
}
