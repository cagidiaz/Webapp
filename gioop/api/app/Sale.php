<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

    protected $table = 'sales';
    protected $primaryKey = 'id';

    protected $fillable = [
        'company_id', 'customer_id', 'amount_sale', 'amount_disc', 'percent_disc'
    ];

    public function company()
    {
        return $this->belongsTo('Company::class');
    }

    public function customer()
    {
        return $this->belongsTo('Customer::class');
    }
}
