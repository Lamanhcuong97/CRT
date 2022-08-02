<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $table = 'beneficiary';
    protected $fillable = ['beneficiary_name', 'beneficiary_nationality', 'beneficiary_proof_addr_detail', 'beneficiary_proof_addr', 'beneficiary_phone', 'beneficiary_tel', 'beneficiary_cell'];
}
