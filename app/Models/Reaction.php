<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $table = 'comment_reactions';

    protected $primaryKey = 'reaction_id';

    protected $fillable = [
        'comment_id',
        'reaction',
        'user_id',
    ];
}
