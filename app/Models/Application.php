<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'application';
    protected $fillable = [
        'company_id', 
        'category_id', 
        'name', 
        'num', 
        'manager_notes', 

    ];

    public $timestamps = true;
}
