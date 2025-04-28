<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;


class CommentController extends Controller

{
    public function store(Request $request, $postId)
    {
        // validate input
        $validated = $request->validate([
            'commenter_name' => 'required|string|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        // save the new comment
        $comment = new Comment();
        $comment->post_id = $postId;
        $comment->commenter_name = $validated['commenter_name'];
        $comment->comment = $validated['comment'];
        $comment->save();

        // redirect back to the post page with a success message
        return redirect()->route('posts.show', $postId)->with('success', 'Comment added successfully!');
    }
}
