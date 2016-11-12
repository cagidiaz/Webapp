<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Image;


class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rol',
        'picture',
        'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function company()
    {
        return $this->hasOne('Company::class');
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
