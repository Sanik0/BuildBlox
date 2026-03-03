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

    public function react(Request $request, $comment_id)
    {
        $request->validate([
            'reaction' => 'required|in:like,dislike',
        ]);

        $existing = \App\Models\Reaction::where('comment_id', $comment_id)
            ->where('user_id', Auth::id())
            ->first();

        if ($existing) {
            if ($existing->reaction === $request->reaction) {
                // clicking same reaction removes it
                $existing->delete();
            } else {
                // clicking opposite reaction switches it
                $existing->update(['reaction' => $request->reaction]);
            }
        } else {
            \App\Models\Reaction::create([
                'comment_id' => $comment_id,
                'user_id' => Auth::id(),
                'reaction' => $request->reaction,
            ]);
        }

        return redirect()->back();
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
