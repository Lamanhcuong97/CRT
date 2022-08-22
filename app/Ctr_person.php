<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ctr_person extends Model
{
    Protected $primaryKey = 'id';
    protected $table = 'ctr_person';
    public $timestamps = false;
  
    protected $fillable = ['name', 'surname', 'nationality', 'birthday', 'occupation', 'phone_number', 'identity_card', 'nominee', 'owner', 'transaction_type', 'transaction_date', 'transaction_amount', 'receiver_name', 'destination_fi', 'currency'];
    // protected $dates = ['upload_date'];
}
