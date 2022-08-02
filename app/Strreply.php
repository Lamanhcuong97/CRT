<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strreply extends Model
{
    protected $table = 'str_replys';
    protected $fillable = ['str_reply_to', 'str_reply_no', 'str_reply_topic', 'str_reply_ref_date', 'str_reply_ref_no', 'user_reply', 'updated_at', 'created_at'];
}
