<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movimento extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'tipo','valor','descricao','categoria_id','usuario_id',
    ];
    public function parcelas()
    {
        return $this->hasMany('App\Parcela');
    }
    public function categoria() {
    return $this->belongsTo('App\Categoria');
}
    public function usuario() {
        return $this->belongsTo('App\Usuario');
    }

}
