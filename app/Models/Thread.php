<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['comment', 'comment_reply'];

    public function comment() {
        return $this->hasMany(Comment::class);
    }

    public function comment_reply() {
        return $this->hasMany(Comment_reply::class);
    }

    public function scopeFillter($query, array $fillters) {
        $query->when($fillters['search'] ?? false, function ($query, $search) {
            return $query->where('thread', 'like', '%'.$search.'%');
        });
    }
}
