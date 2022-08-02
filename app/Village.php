<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    Protected $primaryKey = 'idvillage';
    protected $table = 'village';
    public $timestamps = false;

    public function District()
    {
        return $this->hasOne('App\District', 'iddistrict', 'district_iddistrict');
    }

}
