<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{

    protected $table = 'timetables';
    protected $primaryKey = 'id';

    protected $fillable = [
        'company_id', 'days', 'date_mor_ini', 'date_mor_end', 'date_aft_ini', 'date_aft_end'
    ];

    public function company()
    {
        return $this->belongsTo('Company::class');
    }

}
