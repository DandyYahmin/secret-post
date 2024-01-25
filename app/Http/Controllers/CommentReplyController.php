<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment_reply;

class CommentReplyController extends Controller
{
    public function store(Request $request, string $thread_id, string $comment_id) {
        $this->validate($request, [
            'replies' => 'required',
        ]);

        Comment_reply::create([
            'replies' => $request->replies,
            'thread_id' => $thread_id,
            'comment_id' => $comment_id
        ]);

        return Redirect('/?comment=success');
    }
}
