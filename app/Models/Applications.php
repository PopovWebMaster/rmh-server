<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    protected $table = 'applications';
    protected $fillable = [
        'name', 
        'company_id',
        'category_id',
        'num', 
        'type', 
        'notes', 
    ];

    public $timestamps = true;
}
