<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $data = $request->validate([
            'commenter_name' => 'required|max:255',
            'comment'        => 'required',
        ]);

        $data['post_id'] = $postId;
        Comment::create($data);

        return redirect()
            ->route('posts.show', $postId)
            ->with('success', 'Your comment has been posted.');
    }
}
