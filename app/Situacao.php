<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professor extends Model
{
    Use softDeletes;
    protected $dates = ['deleted-at'];
    protected $table = 'situacoes';
}
