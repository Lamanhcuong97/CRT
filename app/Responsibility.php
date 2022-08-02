<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    Protected $primaryKey = 'res_no';
    protected $table = 'responsibility';
    public $timestamps = false;
}
