<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'birthday', 'address', 'district', 'city', 'class', 'grade', 'school', 'parentname', 'mobile', 'link', 'password',
    ];
    
    protected $appends = ['fullname'];

    // public function scores()
    // {
    //     return $this->belongsTo('App\Scores', 'iduser', 'id');
    // }
    
    public function scores()
    {
        return $this->hasOne('App\Scores', 'iduser', 'id');
    }
    public function getFullnameAttribute()
    {
        return $this->lastname . ' ' . $this->name;
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function isAdmin()    
    {        
        return $this->role;
    }
}
