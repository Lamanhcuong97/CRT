<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ctr_person extends Model
{
    Protected $primaryKey = 'id';
    protected $table = 'ctr_person';
    public $timestamps = false;
  
    // protected $fillable = ['ctr_id','path_file','upload_date','idusr','title'];
    // protected $dates = ['upload_date'];
}
