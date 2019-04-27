<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormaPagamento extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //
    protected $fillable =[
        'forma_pagamento',
    ];
    public function baixas(){
       return $this->hasMany('App\Baixa');
    }
}
