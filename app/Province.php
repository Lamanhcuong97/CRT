<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    Protected $primaryKey = 'idprovince';
    protected $table = 'province';
    public $timestamps = false;
}
