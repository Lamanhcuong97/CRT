<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StrForm extends Model
{
    protected $table = 'str_form';
    protected $fillable = ['reporter_type_idreporter_type', 'str_form_reporter_name', 'reporter_idusr', 'approval_signature_fullname', 'approval_id_card', 'audit_signature_fullname', 'audit_id_card', 'reporter_branch_name', 'reporter_branch_province', 'reporter_branch_tel', 'reporter_branch_fax', 'reporter_business_type', 'personnel_or_entity', 'personnel_idpersonnel', 'beneficiary_idbeneficiary', 'str_detail_idstr_detail', 'entities_identities', 'updated_at', 'created_at', 'replied_at', 'str_stt'];
}
