<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categ extends Model
{
    protected $table = 'categs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];

    public function company()
    {
        return $this->hasMany('Company::class');
    }

}
