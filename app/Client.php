<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'sex', 'flotilla', 'RFC', 'card', 'status'];

    public function cards()
    {
        return $this->hasMany('App\Card');
    }
}
