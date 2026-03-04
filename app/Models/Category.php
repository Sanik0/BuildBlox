<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'ttle',
        'description',
        'category_id',
    ];

    public function builds()
    {
        return $this->hasMany(Build::class, 'category_id', 'category_id');
    }
}
