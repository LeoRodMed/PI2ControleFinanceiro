<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContaBanco extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'tipo','agencia','numero','banco','usuario',
    ];

    public function banco() {
        return $this->belongsTo('App\Banco');
    }
    public function usuario() {
        return $this->belongsTo('App\Usuario');
    }
    public function baixas(){
        return $this->hasMany('App\Baixa');
    }
}
