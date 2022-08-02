<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ReporterType extends Model
{
    Protected $primaryKey = 'idreporter_type';
    protected $table = 'reporter_type';
    protected $fillable = ['idreporter_type','reporter_type_title','bank_nonbank'];
    public $timestamps = false;

    
}
