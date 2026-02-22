<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'ttle',
        'description',
        'category_id',
    ];

    public function builds() 
    {
        return $this->hasMany(Build::class);
    }
}
