<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationReleaseSchedule extends Model
{
    protected $table = 'application_release_schedule';
    protected $fillable = [
        'application_release_id', 
        'grid_event_id',
        'date', 
        'time_sec', 

    ];

    public $timestamps = true;
}

