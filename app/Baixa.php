<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Baixa extends Model
{
    Use softDeletes;
    protected $dates = ['deleted-at'];
}
