<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $primaryKey = 'comment_id';

    protected $fillable = [
        'build_id',
        'user_id',
        'content',
        'is_deleted',
        'parent_id',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function replies() 
    {
        return $this->hasMany(Comment::class, 'parent_id', 'comment_id');
    }
}
