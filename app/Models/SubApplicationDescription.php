<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubApplicationDescription extends Model
{
    protected $table = 'sub_application_description';
    protected $fillable = [
        'sub_application_id', 
        'description', 

    ];

    public $timestamps = true;
}
