<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc_upload extends Model
{
    Protected $primaryKey = 'doc_id';
    protected $table = 'doc_upload';
    public $timestamps = false;
}
