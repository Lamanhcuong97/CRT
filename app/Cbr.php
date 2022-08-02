<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cbr extends Model
{
    protected $table='cbr_receipt';
    protected $primaryKey='cbr_id';
    public $timestamps = false;
}
