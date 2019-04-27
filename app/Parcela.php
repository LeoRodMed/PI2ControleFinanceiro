<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parcela extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
      'qtd_parcelas','data_vencimento','descricao','movimento_id','situacao_id',
    ];

    public function movimento() {
        return $this->belongsTo('App\Movimento');
    }
    public function situacao() {
        return $this->belongsTo('App\Situacao');
    }
    public function baixas(){
        return $this->hasMany('App\Baixa');
    }
}
