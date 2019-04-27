<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    //
    protected $fillable =[
        'nome','cpf','email','telefone','data_nascimento','senha',
        ];
    public function movimentos()
    {
        return $this->hasMany('App\Movimento');
    }
    public function conta_bancos()
    {
        return $this->hasMany('App\ContaBanco');
    }
}
