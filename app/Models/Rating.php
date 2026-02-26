<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';
    protected $primaryKey = 'rating_id';
    
    protected $fillable = [
        'build_id',
        'user_id',
        'rating',
        ];
}
