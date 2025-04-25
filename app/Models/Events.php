<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'company_id', 
        'category_id',
        'name',
        'notes',
        'type'
    ];

    public $timestamps = true;
}

