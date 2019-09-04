<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    protected $table = "scores";
    protected $fillable = ['iduser', 'scores'];
    // public function user()
    // {
    //     return $this->hasOne('App\User', 'iduser', 'id');
    // }

    public function user()
    {
        return $this->belongsTo('App\User', 'iduser', 'id');
    }
}
