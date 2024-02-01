<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Thread;

class ThreadController extends Controller
{
    public function index(Request $request) {
        return View('index', [
            'threads' => Thread::where('id','>',0)->fillter(request(['search']))->get()
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
