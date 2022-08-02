<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CommentForm extends Model
{
    protected $table = 'comment_form';
    protected $fillable = ['comment_form_date', 'comment_form_detail'];
    public $timestamps = false;

}
