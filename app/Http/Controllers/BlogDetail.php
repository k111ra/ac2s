<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogDetail extends Controller
{
    public function showBlogdetail($id) {
        $post = Post::find($id);
        return view('blogdetail')->with('post', $post);
    }
}
