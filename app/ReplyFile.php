<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplyFile extends Model
{
    protected $table = 'reply_files';
    protected $fillable = ['reply_id','report_id','path','name','type'];
}
