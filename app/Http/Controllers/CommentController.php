<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $build_id)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
            'parent_id' => 'nullable|exists:comments,comment_id',
        ]);

        Comment::create([
            'build_id' => $build_id,
            'user_id' => Auth::id(),
            'content' => $request->content,
            'parent_id' => $request->parent_id ?? null,
        ]);

        return redirect()->back()->with('success', 'Comment posted!');
    }

    public function destroy($comment_id)
    {
        $comment = Comment::where('comment_id', $comment_id)->firstOrFail();

        if ($comment->user_id !== Auth::id()) {
            abort(403);
        }

        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted!');
    }
}