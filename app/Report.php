<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    protected $fillable = ['sender_id','report_number','title','sign_date','type'];
    protected $dates = ['sign_date'];

    public function sender()
    {
        return $this->belongsTo('App\Usr', 'sender_id', 'idusr');
    }

  	public function replys()
    {
        return $this->hasMany('App\Reply', 'report_id', 'id');
    }

    public function reporter()
    {
        return $this->hasOne('App\Reporter', 'idreporter', 'replier_id');
    }
}
