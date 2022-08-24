<?php

namespace App;

// Use Carbon::createFromFormat('Y-m', $dateVariable);
use Illuminate\Database\Eloquent\Model;

class Ctr_upload extends Model
{
    Protected $primaryKey = 'ctr_id';
    protected $table = 'ctr_upload';
    public $timestamps = false;
  
    // protected $fillable = ['ctr_id','path_file','upload_date','idusr','title'];
    // protected $dateFormat = 'Y-m';
    protected $dates = ['ctr_month'];
}
