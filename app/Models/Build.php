<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Factories\HasFactory;

class Build extends Model
{
    use HasFactory;

    protected $table = 'builds';

    protected $fillable = [
        'cover_image',
        'title',
        'description',
        'materials',
        'category_id',
        'created_at',
        'updated_at',
        'user_id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
