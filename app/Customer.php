<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function Clientbooking()
    {
        return $this->hasMany(Clientbooking::Class,'cid','cid');
    }
}
