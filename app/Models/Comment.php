<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['comment_reply'];

    public function thread() {
        return $this->belongsTo(thread::class);
    }

    public function comment_reply() {
        return $this->hasMany(Comment_reply::class);
    }
}
