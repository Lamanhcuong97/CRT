<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    protected $table = 'entities';
    protected $fillable = ['entities_name', 'entities_business_type', 'entities_office_addr_detail', 'entities_office_addr', 'entities_business_approve_date', 'entities_registra_capital', 'entities_registra_capital_currency', 'entities_business_registration_certificate_type', 'entities_business_registration_certificate_no', 'entities_business_registration_certificate_issue', 'entities_taxpayer_no', 'entities_type', 'entities_code', 'entities_phone', 'entities_tel', 'entities_cell'];
    public $timestamps = false;
}
