<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationSeriesSchedule extends Model
{
    protected $table = 'application_series_schedule';
    protected $fillable = [
        'application_series_id', 
        'day_sec', 
        'time_sec', 
    ];

    public $timestamps = true;
}
