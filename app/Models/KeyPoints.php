<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeyPoints extends Model
{
    protected $table = 'key_points';
    protected $fillable = [
        'company_id', 
        'dayNum',
        'time',
        'description',
        'ms'
    ];

    public $timestamps = true;
}
