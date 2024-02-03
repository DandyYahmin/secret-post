<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment_reply;
use App\Models\Thread;

class CommentReplyController extends Controller
{
    public function store(Request $request, string $thread_id, string $comment_id) {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        Comment_reply::create([
            'replies' => $request->comment,
            'thread_id' => $thread_id,
            'comment_id' => $comment_id
        ]);

        $path = Thread::where('id',$thread_id)->pluck('created_at');
        return Redirect('/#'.$path[0]);
    }
}
