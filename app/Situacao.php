<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Situacao extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'situacoes';
    //
    protected $fillable=[
        'tipo',
    ];
    public function parcelas()
    {
        return $this->hasMany('App\Parcela');
    }
}
