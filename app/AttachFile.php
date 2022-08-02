<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttachFile extends Model
{
    protected $table = 'attach_files';
    protected $fillable = ['report_id','name','path','type'];
}
