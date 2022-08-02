<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Bankgroup extends Model
{
    Protected $primaryKey = 'idbank_group';
    protected $table = 'bank_group';
    public $timestamps = false;
}
