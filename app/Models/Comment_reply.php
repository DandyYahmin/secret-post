<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_reply extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function thread() {
        return $this->belongsTo(Thread::class);
    }

    public function comment() {
        return $this->belongsTo(Comment::class);
    }
}
