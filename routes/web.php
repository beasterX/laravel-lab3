<?php

use App\Models\Post;

Route::get('/', function () {
    $posts = Post::with(['author', 'comments'])->get();
    return view('blog', compact('posts'));
});
