<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    Protected $primaryKey = 'idcurrency';
    protected $table = 'currency';
    public $timestamps = false;
}
