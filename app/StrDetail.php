<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StrDetail extends Model
{
    protected $table = 'str_detail';
    protected $fillable = ['transaction_date', 'suspicious_date', 'acc_no_or_insurance', 'acc_type', 'acc_open_date', 'total_amount', 'transaction_type', 'suspicious_transaction_describe', 'suspicious_clue', 'suspicious_transaction_describe_file', 'suspicious_clue_file'];
    public $timestamps = false;
}
