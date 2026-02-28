<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $table = 'views';

    protected $primaryKey = 'view_id';

    protected $fillable = [
        'build_id',
        'user_id',
        'ip_address',
    ];
}
