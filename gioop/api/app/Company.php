<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Image;


class Company extends Model
{

    protected $table = 'companies';
    protected $primaryKey = 'id';

   protected $fillable = [
        'name',
        'nif',
        'address',
        'postal_c',
        's_lat',
        's_long',
        'cat_id',
        'phone',
        'email',
        's_url',
        'discount',
        'logo',
    ];

    protected $hidden = ['created_at', 'updates_at'];

    public function user()
    {
        return $this->hasMany('User::class');
    }

    public function timetable()
    {
        return $this->hasOne('Timetable::class');
    }

    public function sale()
    {
        return $this->hasMany('Sale::class');
    }

    public function ad()
    {
        return $this->hasOne('Ad::class');
    }

    public function categ()
    {
        return $this->belongsTo('Categ::class');
    }

    public function accum()
    {
        return $this->hasMany('Accum::class');
    }

    public function setLogoAttribute($value)
    {
        if(empty($value)){
            $this->attributes['logo'] = '';
        }else{
            $ext = $value->getClientOriginalExtension();
            $filename = str_random(12).'.'.$ext;
            \Image::make($value)->resize(120, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(120, 120)->save(public_path('dist/img/logos/'.$filename));
            $this->attributes['logo'] = 'dist/img/logos/'.$filename;
        }
    }

    public function getLogoAttribute($value)
    {
        return $value != NULL ? $value : 'dist/img/default.jpg';
    }

}
