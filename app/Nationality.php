<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    Protected $primaryKey = 'idnationality';
    protected $table = 'nationality';
    public $timestamps = false;
}
