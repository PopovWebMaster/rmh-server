<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationSeries extends Model
{
    protected $table = 'application_series';
    protected $fillable = [
        'applications_id', 
        // 'category_id',
        'time_from_sec', 
        'time_to_sec', 
        'duration_sec', 
        'serial_num', 
        'notes',
        'file_names_version_list', 

    ];

    public $timestamps = true;
}


