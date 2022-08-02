<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    Protected $primaryKey = 'idrole';
    protected $table = 'role';
    public $timestamps = false;
}
