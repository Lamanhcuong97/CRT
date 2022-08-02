<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usr extends Model
{
    Protected $primaryKey = 'idusr';
    protected $table = 'usr';
    public $timestamps = false;

    public function Role()
    {
        return $this->hasOne('App\Role', 'idrole', 'role_idrole');
    }
    public function Report()
    {
        return $this->hasOne('App\Reporter', 'idreporter', 'reporter_idreporter');
    }
}
