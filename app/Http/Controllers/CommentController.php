<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, string $thread_id) {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        Comment::create([
            'comment' => $request->thread,
            'thread_id' => $thread_id
        ]);

        return Redirect('/?comment=success');
    }
}
