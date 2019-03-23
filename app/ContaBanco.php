<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContaBanco extends Model
{
    Use softDeletes;
    protected $dates = ['deleted-at'];
}
