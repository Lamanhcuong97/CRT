<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class FirForm extends Model
{
    protected $table = 'fir_form';
    protected $fillable = ['fir_form_no', 'fir_form_date', 'fir_form_to_be_report_info', 'reporter_to_be_report', 'fir_form_describe', 'usr_reporter', 'fir_form_receiver', 'fir_form_mark'];

}
