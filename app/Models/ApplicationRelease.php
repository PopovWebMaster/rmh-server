<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationRelease extends Model
{
    protected $table = 'application_release';
    protected $fillable = [
        'applications_id', 
        'time_from_sec', 
        'time_to_sec', 
        'duration_sec', 
        'name', 
        'notes',
        'file_names_version_list', 

    ];

    public $timestamps = true;
}
