<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banco extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //
    protected $fillable  = [
      'nome','codigo',
    ];

    public function conta_bancos()
    {
        return $this->hasMany('App\ContaBanco');
    }
}
