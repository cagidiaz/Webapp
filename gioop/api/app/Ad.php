<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{

  protected $table = 'ads';
  protected $primaryKey = 'id';

  protected $fillable = [
    'company_id', 'title', 'content', 'detail'
  ];

  public function company()
  {
    return $this->belongsTo('Company::class');
  }
}
