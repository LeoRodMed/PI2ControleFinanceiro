<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Baixa extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
       'data_baixa' ,'valor_pago','parcela_id','conta_banco_id','forma_pagamento_id',
    ];

    public function parcela() {
        return $this->belongsTo('App\Parcela');
    }
    public function conta_banco() {
        return $this->belongsTo('App\ContaBanco');
    }
    public function forma_pagamento() {
        return $this->belongsTo('App\FormaPagamento');
    }
}
