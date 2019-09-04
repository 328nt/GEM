<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    protected $fillable = ['id_provinces', 'name'];
}
