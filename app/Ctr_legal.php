<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ctr_legal extends Model
{
    Protected $primaryKey = 'id';
    protected $table = 'ctr_legal';
    public $timestamps = false;
  
    protected $fillable = ['idreporter', 'business_name', 'license_no', 'license_date', 'business_type', 'office_phone', 'customer_name', 'nationality', 'occupation', 'identity_card', 'customer_phone', 'transaction_type', 'transaction_date', 'transaction_amount', 'currency', 'receiver_name', 'destination_fi', 'ctr_id'];
    // protected $dates = ['upload_date'];
}
