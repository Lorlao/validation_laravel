<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = ['name', 'classification', 'life'];

    public function animals()
    {
        return $this->hasMany('App\Animal');
    }
}
