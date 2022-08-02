<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    Protected $primaryKey = 'iddistrict';
    protected $table = 'district';
    public $timestamps = false;

    public function Province()
    {
        return $this->hasOne('App\Province', 'idprovince', 'province_idprovince');
    }

    public function scopePublished($query){
      $query->where('province_idprovince', '=', '2');
    }
}
