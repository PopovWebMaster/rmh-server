<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProgramSystem extends Model
{
    protected $table = 'company_program_system';
    protected $fillable = [
        'name', 
        'company_id',
    ];

    public $timestamps = true;
}
