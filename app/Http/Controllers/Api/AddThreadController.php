<?php

namespace App\Http\Controllers\Api;

use App\Models\Thread;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddThreadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'thread' => 'required'
        ]);

        if($validate->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $addThread = Thread::create([
            'thread' => $request->thread
        ]);

        if($addThread) {
            return response()->json([
                'success' => true,
                'thread' => $addThread
            ], 201);
        }
        
        return response()->json([
            'success' => false,
        ], 409);
    }
}
