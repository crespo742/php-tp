<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post as Post;

class PostController extends Controller
{
    public function new_post() {
        request()->validate([
            'content' => ['required'],
            'title' => ['required'],
        ]);

        auth()->user()->posts()->create([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        flash("Your post is now online !")->success();
        return back();
    }
}
