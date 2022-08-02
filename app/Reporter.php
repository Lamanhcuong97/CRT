<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporter extends Model
{
    Protected $primaryKey = 'idreporter';
    protected $table = 'reporter';
    public $timestamps = false;

    // protected $fillable = ['idreporter','reporter_name'];

    public function Report_type()
    {
        return $this->hasOne('App\ReporterType', 'idreporter_type', 'reporter_type_idreporter_type');
    }
    public function Bank_group()
    {
        return $this->hasOne('App\Bankgroup', 'idbank_group', 'bank_group_idbank_group');
    }

}
