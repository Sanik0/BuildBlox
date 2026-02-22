<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuildStep extends Model
{
    protected $table = 'build_steps';

    protected $fillable = [
        'build_id',
        'step_image',
        'step_number',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function build()
    {
        return $this->belongsTo(Build::class, 'build_id');
    }
}
