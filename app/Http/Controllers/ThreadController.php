<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Thread;

class ThreadController extends Controller
{
    public function index() {
        $threads = DB::select('select threads.thread, threads.created_at, comments.comment, comment_replies.replies from threads, comments, comment_replies where threads.id = comments.thread_id and threads.id = comment_replies.thread_id and comments.id = comment_replies.comment_id');
        
        return View('index', [
            'thread' => $threads->fillter(request(['search']))->paginate(1)
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'thread' => 'required'
        ]);

        Thread::create([
            'thread' => $request->thread
        ]);

        return Redirect('/?post=success');
    }
}
