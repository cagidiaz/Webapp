<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;


class Customer extends Model
{

    protected $table = 'customers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'email', 'password', 'postal_c', 'age', 'picture'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function sale()
    {
        return $this->hasMany('Sale::class');
    }

    public function accum()
    {
        return $this->hasMany('Acum::class');
    }

    public function setPictureAttribute($value)
    {
        if(empty($value)){
            $this->attributes['picture'] = '';
        }else{
            $ext = $value->getClientOriginalExtension();
            $filename = str_random(12).'.'.$ext;
            \Image::make($value)->resize(50, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(50, 50)->save(public_path('dist/img/users/'.$filename));
            $this->attributes['picture'] = 'dist/img/users/'.$filename;
        }
    }

    public function getPictureAttribute($value)
    {
        return $value != NULL ? $value : 'dist/img/default.jpg';
    }
}
