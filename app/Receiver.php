<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
     protected $table = 'receivers';
    protected $fillable = ['receiver_id','report_id','status'];
}
