<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

protected $table = 'accums';
protected $primaryKey = 'id';

class Accum extends Model
{
    protected $fillable = [
        'company_id',
        'customer_id',
        'accum'
    ];

    public function customer()
    {
        return $this->belongsTo('Customer::class');
    }

    public function company()
    {
        return $this->belongsTo('Company::class');
    }
}
