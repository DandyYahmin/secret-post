<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Thread;

class CommentController extends Controller
{
    public function store(Request $request, string $thread_id) {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        Comment::create([
            'comment' => $request->comment,
            'thread_id' => $thread_id
        ]);

        $path = Thread::where('id',$thread_id)->pluck('created_at');
        return Redirect('/#'.$path[0]);
    }
}
