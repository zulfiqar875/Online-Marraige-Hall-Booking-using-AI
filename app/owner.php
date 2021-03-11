<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    protected $fillable = ['id'];

    public function Hall()
    {
        return $this->hasMany(Hall::Class,'OID','id');
    }
    public function Clientbooking()
    {
        return $this->hasMany(Clientbooking::Class,'OID','id');
    }
}
