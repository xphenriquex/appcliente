<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    public function cliente()
    {
    	return $this->belongsTo('App\Cliente');
    }
}
