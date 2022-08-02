<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reply extends Model
{
    protected $table = 'replys';
    protected $fillable = ['replier_id','report_id','report_number','title', 'status','sign_date','type'];
    protected $dates = ['sign_date'];

    public function report()
    {
        return $this->belongsTo('\App\Report', 'report_id');
    }
    
    public function reporter()
    {
        return $this->belongsTo('\App\Reporter', 'replier_id', 'idreporter');
    }
}
