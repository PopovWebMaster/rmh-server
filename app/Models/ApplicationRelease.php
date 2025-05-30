<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationRelease extends Model
{
    protected $table = 'application_release';
    protected $fillable = [
        'applications_id', 
        // 'time_from_sec', 
        // 'time_to_sec', 
        'period_from', 
        'period_to', 

        'duration_sec', 
        'name', 
        'notes',
        'file_names_version_list', 
        'description',
        'correct_file_name',



    ];

    public $timestamps = true;
}
