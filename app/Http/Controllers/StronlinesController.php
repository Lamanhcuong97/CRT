<?php

namespace App\Http\Controllers;

use App\Http\Requests;
// use App\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request; // Added by Youi 20171201
use App\ReporterType;
use App\AmountCurrency; // Added by Youi 20171201
use App\Beneficiary; // Added by Youi 20171207
use App\Currency;
use App\District;
use App\Entities; // Added by Youi 20171207
use App\Nationality;
use App\Province;
use App\StrDetail; // Added by Youi 20171201
use App\StrForm; // Added by Youi 20171222
use Illuminate\Support\Facades\Input; // Added by Mala

use Request;
// use App\Http\Requests\StronlinesRequest;
use Illuminate\Support\Facades\DB;

class StronlinesController extends Controller
{
  public function __construct(){
    $this->middleware('auth', ['except'=>['menu', 'index', 'indexent', 'finddistrict', 'findvillage', 'strstore', 'detailviews', 'lawrefer', 'reporterviews', 'branchviews', 'chartviews']]);
  }

  public function menu(){
    return view('stronlines.index');
  }

  public function chartviews(){
    $mode = 'mnth'; $smnth = 1; $syear = 2018; $emnth = 12; $eyear = 2018; $bgyear = 2005; $notfound = 'ເລືອກລາຍລະອຽດກ່ອນ'; $numcols = 0; $modename = '';
    $label2 = "'ເດືອນ'";
    $datasets = '[0, 10, 5, 2, 20, 30, 45, 50]';
    $contents = '["ມັງກອນ", "ກຸມພາ", "ມີນາ", "ເມສາ", "ພຶດສະພາ", "ມິຖຸນາ", "ກໍລະກົດ", "ສິງຫາ"]';
    return view('stronlines.chartviews', compact('mode', 'smnth', 'syear', 'emnth', 'eyear', 'bgyear', 'numcols', 'notfound', 'modename', 'label2', 'datasets', 'contents'));
  }

  public function lawrefer(){
    return view('stronlines.lawreference');
  }

  public function index(){
    $reportertypes = ReporterType::get();
    $provinces = Province::get();
    $currencies = Currency::get();
    $nationalities = Nationality::get();
    return view('stronlines.create', compact('reportertypes', 'provinces', 'currencies', 'nationalities'));
  }

  public function indexent(){
	
    $reportertypes = ReporterType::get();
    $provinces = Province::get();
    $currencies = Currency::get();
    $nationalities = Nationality::get();
    return view('stronlines.create_ent', compact('reportertypes', 'provinces', 'currencies', 'nationalities'));
  }

  public function finddistrict(){
    $id = $_GET['id'];
    $data = DB::table('district')->where('province_idprovince', '=', $id)->get();
    return response()->json($data);
  }

  public function findvillage(){
    $id = $_GET['id'];
    $data = DB::table('village')->where('district_iddistrict', '=', $id)->get();
    return response()->json($data);

  }

  public function detailviews(){
    $colsnumbers = 8;
    $report_detail_type = 1;
    $mainpage = 'layouts.mainstrdetail';
    return view('stronlines.detailviews', compact('report_detail_type', 'mainpage', 'colsnumbers'));
  }
  public function reporterviews(){
    $numcurr = 1; $diff = 1; $mode = 'mnth'; $smnth = 1; $syear = 2018; $emnth = 12; $eyear = 2018; $squtr = 1; $equtr = 4; $shelf = 1; $ehelf = 2; $bgyear = 2015; $numcols = 5; $notfound = 'ເລືອກລາຍລະອຽດກ່ອນ';
    return view('stronlines.reporterviews', compact('reporter_type', 'mode', 'smnth', 'syear', 'emnth', 'eyear', 'squtr', 'equtr', 'shelf', 'ehelf', 'diff', 'bgyear', 'numcols', 'numcurr', 'notfound'));
  }
  public function branchviews(){
    $numcurr = 1; $diff = 1; $mode = 'mnth'; $smnth = 1; $syear = 2018; $emnth = 12; $eyear = 2018; $squtr = 1; $equtr = 4; $shelf = 1; $ehelf = 2; $bgyear = 2015; $numcols = 5; $notfound = 'ເລືອກລາຍລະອຽດກ່ອນ'; $num_branch = 0; $modename = '';
    return view('stronlines.branchviews', compact('reporter_type', 'mode', 'smnth', 'syear', 'emnth', 'eyear', 'squtr', 'equtr', 'shelf', 'ehelf', 'diff', 'bgyear', 'numcols', 'numcurr', 'notfound', 'num_branch', 'modename'));
  }


	public function strstore(){
		
		foreach($_POST as $key => $value) {
			if($value === ''){
				$_POST[$key] = NULL;
			}
		}
		
		// ----------------------------- part 1 ----------------------- //
	$reporter_idusr = Auth::id();
	
	$transaction_date = $_POST['transaction_date'];
	$suspicious_date = $_POST['suspicious_date'];
	$acc_no_or_insurance = $_POST['acc_no_or_insurance'];
	$acc_type = $_POST['acc_type'];
	$acc_open_date = $_POST['acc_open_date'];
	$total_amount = $_POST['total_amount'];
	$transaction_type = $_POST['transaction_type'];
	$suspicious_transaction_describe = $_POST['suspicious_transaction_describe'];		
	$suspicious_clue = $_POST['suspicious_clue'];										

    if(!empty($_FILES['suspicious_transaction_describe_file']['name'])){
      $file_name1 = $_FILES['suspicious_transaction_describe_file']['name'];
      $file_tmp_name1 = $_FILES['suspicious_transaction_describe_file']['tmp_name'];
      $file_ext1 = explode('.', $file_name1);
      $f_ext1 = array_pop($file_ext1);
      $file_ext1_2 = explode('.', $file_name1);
      $f_name_slice1 = array_slice($file_ext1_2, 0, -1);
      $f_name1 = implode('.', $f_name_slice1);
      $file_full_name1 = $reporter_idusr . '_' . date('d-m-Y') . '_' . time() . '_' . $f_name1 . '.' . $f_ext1;
      $public_path1 = 'fileattaches/susdetail/' . $file_full_name1;
      $destination1 = base_path() . "/public/" . $public_path1;
	  
	  $file = Input::file('suspicious_transaction_describe_file');
	  $destinationPath = $public_path1;
    $file->move('fileattaches/susdetail/',$file_full_name1);
    $suspicious_transaction_describe_file = $public_path1;

      /*if(move_uploaded_file($file_tmp_name1, $destination1)){
        $suspicious_transaction_describe_file = $public_path1;
      }
	  */

    }else{
      $suspicious_transaction_describe_file = NULL;
    }

    /*if(!empty($_FILES['suspicious_clue_file']['name'])){
      $file_name2 = $_FILES['suspicious_clue_file']['name'];
      $file_tmp_name2 = $_FILES['suspicious_clue_file']['tmp_name'];
      $file_ext2 = explode('.', $file_name2);
      $f_ext2 = array_pop($file_ext2);
      $file_ext2_2 = explode('.', $file_name2);
      $f_name_slice2 = array_slice($file_ext2_2, 0, -1);
      $f_name2 = implode('.', $f_name_slice2);
      $file_full_name2 = $reporter_idusr . '_' . date('d-m-Y') . '_' . time() . '_' . $f_name2 . '.' . $f_ext2;
      $public_path2 = 'fileattaches/susclue/' . $file_full_name2;
      $destination2 = base_path() . "/public/" . $public_path2;

      if(move_uploaded_file($file_tmp_name2, $destination2)){
        $suspicious_clue_file = $public_path2;
      }
    }else{
      $suspicious_clue_file = NULL;
    }*/

    $strdetinsert = DB::table('str_detail')-> insert(array(
            'transaction_date' => $transaction_date,
            'suspicious_date' => $suspicious_date,
            'acc_no_or_insurance' => $acc_no_or_insurance,
            'acc_type' => $acc_type,
            'acc_open_date' => $acc_open_date,
            'total_amount' => $total_amount,
            'transaction_type' => $transaction_type,
            'suspicious_transaction_describe' => $suspicious_transaction_describe,
            'suspicious_clue' => $suspicious_clue,
            'suspicious_transaction_describe_file' => $suspicious_transaction_describe_file
            //'suspicious_clue_file' => $suspicious_clue_file
    ));
    $strdetlastid = DB::table('str_detail')->max('idstr_detail'); // last insert id of str_detail
	
	// ----------------------------- part 2 ----------------------- //
	    if($_POST['amount_currency_1'] !== ''){
      $amount_currency = $_POST['amount_currency_1'];
      $currency_idcurrency = $_POST['currency_1'];
      $eachcurrency = DB::table('amount_currency')->insert(array(
        'amount_currency' => $amount_currency,
        'currency_idcurrency' => $currency_idcurrency,
        'str_detail_idstr_detail' => $strdetlastid
      ));
    }
    if($_POST['amount_currency_2'] !== ''){
      $amount_currency = $_POST['amount_currency_2'];
      $currency_idcurrency = $_POST['currency_2'];
      $eachcurrency = DB::table('amount_currency')->insert(array(
        'amount_currency' => $amount_currency,
        'currency_idcurrency' => $currency_idcurrency,
        'str_detail_idstr_detail' => $strdetlastid
      ));
    }
    if($_POST['amount_currency_3'] !== ''){
      $amount_currency = $_POST['amount_currency_3'];
      $currency_idcurrency = $_POST['currency_3'];
      $eachcurrency = DB::table('amount_currency')->insert(array(
        'amount_currency' => $amount_currency,
        'currency_idcurrency' => $currency_idcurrency,
        'str_detail_idstr_detail' => $strdetlastid
      ));
    }
	
	// ------------------------ part 3 ------------------------ //
	if(($_POST['beneficiary_name'] !== '') || ($_POST['beneficiary_nationality'] !== '') || ($_POST['beneficiary_proof_addr_detail'] !== '') 
	|| ($_POST['beneficiary_proof_addr'] !== '') || ($_POST['beneficiary_phone'] !== '') || ($_POST['beneficiary_tel'] !== '') 
	|| ($_POST['beneficiary_cell'] !== '')){
		
	$beneficiary_name = $_POST['beneficiary_name'];
	$beneficiary_nationality = $_POST['beneficiary_nationality'];
	$beneficiary_proof_addr_detail = $_POST['beneficiary_proof_addr_detail'];
	$beneficiary_proof_addr = $_POST['beneficiary_proof_addr'];
	$beneficiary_phone = $_POST['beneficiary_phone'];
	$beneficiary_tel = $_POST['beneficiary_tel'];
	$beneficiary_cell = $_POST['beneficiary_cell'];
	
      $benefinsert = DB::table('beneficiary')-> insert(array(
        'beneficiary_name' => $beneficiary_name,
        'beneficiary_nationality' => $beneficiary_nationality,
        'beneficiary_proof_addr_detail' => $beneficiary_proof_addr_detail,
        'beneficiary_proof_addr' => $beneficiary_proof_addr,
        'beneficiary_phone' => $beneficiary_phone,
        'beneficiary_tel' => $beneficiary_tel,
        'beneficiary_cell' => $beneficiary_cell
      ));

      $beneflastid = DB::table('beneficiary')->max('idbeneficiary'); // last insert id of beneficiary
	  
	}else{
      $beneflastid = NULL;
    }
	
	// ------------------------ part 4 (for enterprise) ----------------------- //
	/*if(($_POST['entities_name'] !== '') || ($_POST['entities_business_type'] !== '') || ($_POST['entities_office_addr_detail'] !== '') 
	|| ($_POST['entities_office_addr'] !== '') || ($_POST['entities_business_approve_date'] !== '') || ($_POST['entities_registra_capital'] !== '') 
	|| ($_POST['entities_registra_capital_currency'] !== '') || ($_POST['entities_business_registration_certificate_type'] !== '') 
	|| ($_POST['entities_business_registration_certificate_no'] !== '') || ($_POST['entities_business_registration_certificate_issue'] !== '') 
	|| ($_POST['entities_taxpayer_no'] !== '') || ($_POST['entities_type'] !== '') || ($_POST['entities_code'] !== '') || ($_POST['entities_phone'] !== '') 
	|| ($_POST['entities_tel'] !== '') || ($_POST['entities_cell'] !== '')){
		
	  $entities_name = $_POST['entities_name'];
	  $entities_business_type = $_POST['entities_business_type'];
	  $entities_office_addr_detail = $_POST['entities_office_addr_detail'];
	  $entities_office_addr = $_POST['entities_office_addr'];
	  $entities_business_approve_date = $_POST['entities_business_approve_date'];
	  $entities_registra_capital = $_POST['entities_registra_capital'];
	  $entities_registra_capital_currency = $_POST['entities_registra_capital_currency'];
	  $entities_business_registration_certificate_type = $_POST['entities_business_registration_certificate_type'];
	  $entities_business_registration_certificate_no = $_POST['entities_business_registration_certificate_no'];
	  $entities_business_registration_certificate_issue = $_POST['entities_business_registration_certificate_issue'];
	  $entities_taxpayer_no = $_POST['entities_taxpayer_no'];
	  $entities_type = $_POST['entities_type'];
	  $entities_code = $_POST['entities_code'];
	  $entities_phone = $_POST['entities_phone'];
	  $entities_tel = $_POST['entities_tel'];
	  $entities_cell = $_POST['entities_cell'];
	  
      $entitiesinsert = DB::table('entities')-> insert(array(
        'entities_name' => $entities_name,
        'entities_business_type' => $entities_business_type,
        'entities_office_addr_detail' => $entities_office_addr_detail,
        'entities_office_addr' => $entities_office_addr,
        'entities_business_approve_date' => $entities_business_approve_date,
        'entities_registra_capital' => $entities_registra_capital,
        'entities_registra_capital_currency' => $entities_registra_capital_currency,
        'entities_business_registration_certificate_type' => $entities_business_registration_certificate_type,
        'entities_business_registration_certificate_no' => $entities_business_registration_certificate_no,
        'entities_business_registration_certificate_issue' => $entities_business_registration_certificate_issue,
        'entities_taxpayer_no' => $entities_taxpayer_no,
        'entities_type' => $entities_type,
        'entities_code' => $entities_code,
        'entities_phone' => $entities_phone,
        'entities_tel' => $entities_tel,
        'entities_cell' => $entities_cell
      ));

      $entitieslastid = DB::table('entities')->max('identities'); // last insert id of entities
    }else{
      $entitieslastid = null;
    }*/
	$entitieslastid = null;
	//---------------------------- part 5 --------------------//
	/*if(($_POST['personnel_name'] !== '') || ($_POST['personnel_name_e'] !== '') || ($_POST['personnel_nationality'] !== '') || ($_POST['personnel_nationality_e'] !== '') 
	|| ($_POST['personel_gender'] !== '') || ($_POST['personelcol_office'] !== '') || ($_POST['personelcol_office_e'] !== '') || ($_POST['personnel_occupation'] !== '') 
	|| ($_POST['personnel_occupation_e'] !== '') || ($_POST['personnel_entity_relation_e'] !== '') || ($_POST['personnel_dob'] !== '') || ($_POST['personnel_dob_e'] !== '') 
	|| ($_POST['personnel_pob'] !== '') || ($_POST['personnel_pob_e'] !== '') || ($_POST['personnel_addr_proof_detail'] !== '') || ($_POST['personnel_addr_proof_detail_e'] !== '') 
	|| ($_POST['personnel_addr_proof'] !== '') || ($_POST['personnel_addr_proof_e'] !== '') || ($_POST['personnel_addr_in_laos'] !== '') || ($_POST['personnel_addr_in_laos_e'] !== '') 
	|| ($_POST['personnel_addr_abroad'] !== '') || ($_POST['personnel_addr_abroad_e'] !== '') || ($_POST['personnel_phone'] !== '') || ($_POST['personnel_phone_e'] !== '') 
	|| ($_POST['personnel_tel'] !== '') || ($_POST['personnel_tel_e'] !== '') || ($_POST['personnel_cell'] !== '') || ($_POST['personnel_cell_e'] !== '') || ($_POST['personnel_proof_type'] !== '') 
	|| ($_POST['personnel_proof_type_e'] !== '') || ($_POST['personnel_proof_issue_date'] !== '') || ($_POST['personnel_proof_issue_date_e'] !== '') || ($_POST['personnel_proof_no'] !== '') 
	|| ($_POST['personnel_proof_no_e'] !== '') || ($_POST['personnel_proof_issue_place'] !== '') || ($_POST['personnel_proof_issue_place_e'] !== '') || ($_POST['personnel_proof_expiry_date'] !== '') 
	|| ($_POST['personnel_proof_expiry_date_e'] !== '') || ($_POST['personnel_proof_register_no'] !== '') || ($_POST['personnel_proof_register_no_e'] !== '') || ($_POST['personnel_proof_register_place'] !== '') 
	|| ($_POST['personnel_proof_register_place_e'] !== '') || ($_POST['personnel_proof_other'] !== '') || ($_POST['personnel_proof_other_e'] !== '')){	*/
	 

	if (($_POST['personnel_name'] !== '') || ($_POST['personnel_nationality'] !== '') || ($_POST['personel_gender'] !== '') || ($_POST['personelcol_office'] !== '') 
	|| ($_POST['personnel_occupation'] !== '') || ($_POST['personnelntity_relation'] !== '') || ($_POST['personnel_dob'] !== '') || ($_POST['personnel_pob'] !== '') 
	|| ($_POST['personnel_addr_proof_detail'] !== '') || ($_POST['personnel_addr_proof'] !== '') || ($_POST['personnel_addr_in_laos'] !== '') || ($_POST['personnel_phone'] !== '') 
	|| ($_POST['personnel_tel'] !== '') || ($_POST['personnel_cell'] !== '') || ($_POST['personnel_proof_type'] !== '') || ($_POST['personnel_proof_issue_date'] !== '') 
	|| ($_POST['personnel_proof_no'] !== '') || ($_POST['personnel_proof_issue_place'] !== '') || ($_POST['personnel_proofxpiry_date'] !== '') || ($_POST['personnel_proof_register_no'] !== '')
	|| ($_POST['personnel_proof_register_place'] !== '') || ($_POST['personnel_proof_other'] !== '')){
		
	  // -------------------------(for non-enterprise)------------------------- //
	  $personnel_name = $_POST['personnel_name'];
	  $personnel_nationality = $_POST['personnel_nationality'];
	  $personel_gender = $_POST['personel_gender'];
	  $personelcol_office = $_POST['personelcol_office'];
	  $personnel_occupation = $_POST['personnel_occupation'];
	  $personnel_entity_relation = '';
	  $personnel_dob = $_POST['personnel_dob'];
	  $personnel_pob = $_POST['personnel_pob'];
	  $personnel_addr_proof_detail = $_POST['personnel_addr_proof_detail']; 
	  $personnel_addr_proof = $_POST['personnel_addr_proof'];
	  $personnel_addr_in_laos = $_POST['personnel_addr_in_laos'];
	  $personnel_addr_abroad = $_POST['personnel_addr_abroad'];
	  $personnel_phone = $_POST['personnel_phone'];
	  $personnel_tel = $_POST['personnel_tel'];
	  $personnel_cell = $_POST['personnel_cell'];
	  $personnel_proof_type = $_POST['personnel_proof_type'];
	  $personnel_proof_issue_date = $_POST['personnel_proof_issue_date'];
	  $personnel_proof_no = $_POST['personnel_proof_no'];
	  $personnel_proof_issue_place = $_POST['personnel_proof_issue_place'];
	  $personnel_proof_expiry_date = $_POST['personnel_proof_expiry_date'];
	  $personnel_proof_register_no = $_POST['personnel_proof_register_no']; 
	  $personnel_proof_register_place = $_POST['personnel_proof_register_place'];
	  $personnel_proof_other = $_POST['personnel_proof_other'];
	  
	  /*$personnel_name = $_POST['personnel_name_e'];
	  $personnel_nationality = $_POST['personnel_nationality_e'];
	  $personelcol_office = $_POST['personelcol_office_e'];
	  $personnel_occupation = $_POST['personnel_occupation_e'];
	  $personnel_dob = $_POST['personnel_dob_e'];
	  $personnel_pob = $_POST['personnel_pob_e'];
	  $personnel_addr_proof_detail = $_POST['personnel_addr_proof_detail_e']; 
	  $personnel_addr_proof = $_POST['personnel_addr_proof_e'];
	  $personnel_addr_in_laos = $_POST['personnel_addr_in_laos_e'];
	  $personnel_addr_abroad = $_POST['personnel_addr_abroad_e'];
	  $personnel_phone = $_POST['personnel_phone_e'];
	  $personnel_tel = $_POST['personnel_tel_e'];
	  $personnel_cell = $_POST['personnel_cell_e'];
	  $personnel_proof_type = $_POST['personnel_proof_type_e'];
	  $personnel_proof_issue_date = $_POST['personnel_proof_issue_date_e'];
	  $personnel_proof_no = $_POST['personnel_proof_no_e'];
	  $personnel_proof_issue_place = $_POST['personnel_proof_issue_place_e'];
	  $personnel_proof_expiry_date = $_POST['personnel_proof_expiry_date_e'];
	  $personnel_proof_register_no = $_POST['personnel_proof_register_no_e']; 
	  $personnel_proof_register_place = $_POST['personnel_proof_register_place_e'];
	  $personnel_proof_other = $_POST['personnel_proof_other_e'];*/
	  
	  
	  $personnelinsert = DB::table('personnel')-> insert(array(
        'personnel_name' => $personnel_name,
        'personnel_nationality' => $personnel_nationality,
        'personel_gender' => $personel_gender,
        'personelcol_office' => $personelcol_office,
        'personnel_occupation' => $personnel_occupation,
        'personnel_entity_relation' => $personnel_entity_relation,
        'personnel_dob' => $personnel_dob,
        'personnel_pob' => $personnel_pob,
        'personnel_addr_proof_detail' => $personnel_addr_proof_detail,
        'personnel_addr_proof' => $personnel_addr_proof,
        'personnel_addr_in_laos' => $personnel_addr_in_laos,
        'personnel_addr_abroad' => $personnel_addr_abroad,
        'personnel_phone' => $personnel_phone,
        'personnel_tel' => $personnel_tel,
        'personnel_cell' => $personnel_cell,
        'personnel_proof_type' => $personnel_proof_type,
        'personnel_proof_issue_date' => $personnel_proof_issue_date,
        'personnel_proof_no' => $personnel_proof_no,
        'personnel_proof_issue_place' => $personnel_proof_issue_place,
        'personnel_proof_expiry_date' => $personnel_proof_expiry_date,
        'personnel_proof_register_no' => $personnel_proof_register_no,
        'personnel_proof_register_place' => $personnel_proof_register_place,
        'personnel_proof_other' => $personnel_proof_other
      ));

      $personnellastid = DB::table('personnel')->max('idpersonnel'); // last insert id of personnel
    }else{
      $personnellastid = null;
    }
	
	//---------------------------- part 6 --------------------//
	if(($_POST['reporter_type_idreporter_type'] !== '') || ($_POST['str_form_reporter_name'] !== '') || ($_POST['approval_signature_fullname'] !== '') 
	|| ($_POST['approval_id_card'] !== '') || ($_POST['audit_signature_fullname'] !== '') || ($_POST['audit_id_card'] !== '') || ($_POST['reporter_branch_name'] !== '') 
	|| ($_POST['reporter_branch_province'] !== '') || ($_POST['reporter_branch_tel'] !== '') || ($_POST['reporter_branch_fax'] !== '') || ($_POST['reporter_business_type'] !== '')){
	  
	  $updated_at = date('Y-m-d H:i:s');
      $created_at = date('Y-m-d H:i:s');
      $replied_at = null;
      $str_stt = '0';
      /*if(!empty($_POST['personnel_entity_relation_e'])){
        $personnel_or_entity = 'per';
      }else{
        $personnel_or_entity = 'ent';
      }*/
	  $personnel_or_entity = 'per';
	  
	  $reporter_type_idreporter_type = $_POST['reporter_type_idreporter_type'];
	  $str_form_reporter_name = $_POST['str_form_reporter_name'];
	  $approval_signature_fullname = $_POST['approval_signature_fullname'];
	  $approval_id_card = $_POST['approval_id_card'];
	  $audit_signature_fullname = $_POST['audit_signature_fullname'];
	  $audit_id_card = $_POST['audit_id_card'];
	  $reporter_branch_name = $_POST['reporter_branch_name']; 
	  $reporter_branch_province = $_POST['reporter_branch_province'];
	  $reporter_branch_tel = $_POST['reporter_branch_tel'];
	  $reporter_branch_fax = $_POST['reporter_branch_fax'];
	  $reporter_business_type = $_POST['reporter_business_type'];
	  $str_date = $_POST['str_date'];
	  $str_no = $_POST['str_no'];
	  
      $str_forminsert = DB::table('str_form')-> insert(array(
        'str_no' => $str_no,
        'str_date' => $str_date,
        'reporter_type_idreporter_type' => $reporter_type_idreporter_type,
        'str_form_reporter_name' => $str_form_reporter_name,
        'reporter_idusr' => $reporter_idusr,
        'approval_signature_fullname' => $approval_signature_fullname,
        'approval_id_card' => $approval_id_card,
        'audit_signature_fullname' => $audit_signature_fullname,
        'audit_id_card' => $audit_id_card,
        'reporter_branch_name' => $reporter_branch_name,
        'reporter_branch_province' => $reporter_branch_province,
        'reporter_branch_tel' => $reporter_branch_tel,
        'reporter_branch_fax' => $reporter_branch_fax,
        'reporter_business_type' => $reporter_business_type,
        'personnel_or_entity' => $personnel_or_entity,
        'personnel_idpersonnel' => $personnellastid,		// part 5 _ NULL
        'beneficiary_idbeneficiary' => $beneflastid,		// part 3 _ NULL
        'str_detail_idstr_detail' => $strdetlastid,			// part 1 _ NOT NULL
        'entities_identities' => $entitieslastid,			// part 4 _ NULL
        'updated_at' => $updated_at,
        'created_at' => $created_at,
        'replied_at' => $replied_at,
        'str_stt' => $str_stt
      ));
	}
	  //---------------------------- part 7 --------------------//	
		return redirect('str');
	}
  
	public function strstore_ent(){
		
		foreach($_POST as $key => $value) {
			if($value === ''){
				$_POST[$key] = NULL;
			}
		}
		
			// ----------------------------- part 1 ----------------------- //
	$reporter_idusr = Auth::id();
	
	$transaction_date = $_POST['transaction_date'];
	$suspicious_date = $_POST['suspicious_date'];
	$acc_no_or_insurance = $_POST['acc_no_or_insurance'];
	$acc_type = $_POST['acc_type'];
	$acc_open_date = $_POST['acc_open_date'];
	$total_amount = $_POST['total_amount'];
	$transaction_type = $_POST['transaction_type'];
	$suspicious_transaction_describe = $_POST['suspicious_transaction_describe'];		
	$suspicious_clue = $_POST['suspicious_clue'];										

    if(!empty($_FILES['suspicious_transaction_describe_file']['name'])){
      $file_name1 = $_FILES['suspicious_transaction_describe_file']['name'];
      $file_tmp_name1 = $_FILES['suspicious_transaction_describe_file']['tmp_name'];
      $file_ext1 = explode('.', $file_name1);
      $f_ext1 = array_pop($file_ext1);
      $file_ext1_2 = explode('.', $file_name1);
      $f_name_slice1 = array_slice($file_ext1_2, 0, -1);
      $f_name1 = implode('.', $f_name_slice1);
      $file_full_name1 = $reporter_idusr . '_' . date('d-m-Y') . '_' . time() . '_' . $f_name1 . '.' . $f_ext1;
      $public_path1 = 'fileattaches/susdetail/' . $file_full_name1;
      $destination1 = base_path() . "/public/" . $public_path1;

      $file = Input::file('suspicious_transaction_describe_file');
	    $destinationPath = $public_path1;
      $file->move('fileattaches/susdetail/',$file_full_name1);
      $suspicious_transaction_describe_file = $public_path1;

      // if(move_uploaded_file($file_tmp_name1, $destination1)){
      //   $suspicious_transaction_describe_file = $public_path1;
      // }

    }else{
      $suspicious_transaction_describe_file = NULL;
    }

    /*if(!empty($_FILES['suspicious_clue_file']['name'])){
      $file_name2 = $_FILES['suspicious_clue_file']['name'];
      $file_tmp_name2 = $_FILES['suspicious_clue_file']['tmp_name'];
      $file_ext2 = explode('.', $file_name2);
      $f_ext2 = array_pop($file_ext2);
      $file_ext2_2 = explode('.', $file_name2);
      $f_name_slice2 = array_slice($file_ext2_2, 0, -1);
      $f_name2 = implode('.', $f_name_slice2);
      $file_full_name2 = $reporter_idusr . '_' . date('d-m-Y') . '_' . time() . '_' . $f_name2 . '.' . $f_ext2;
      $public_path2 = 'fileattaches/susclue/' . $file_full_name2;
      $destination2 = base_path() . "/public/" . $public_path2;

      if(move_uploaded_file($file_tmp_name2, $destination2)){
        $suspicious_clue_file = $public_path2;
      }
    }else{
      $suspicious_clue_file = NULL;
    }*/

    $strdetinsert = DB::table('str_detail')-> insert(array(
            'transaction_date' => $transaction_date,
            'suspicious_date' => $suspicious_date,
            'acc_no_or_insurance' => $acc_no_or_insurance,
            'acc_type' => $acc_type,
            'acc_open_date' => $acc_open_date,
            'total_amount' => $total_amount,
            'transaction_type' => $transaction_type,
            'suspicious_transaction_describe' => $suspicious_transaction_describe,
            'suspicious_clue' => $suspicious_clue,
            'suspicious_transaction_describe_file' => $suspicious_transaction_describe_file
            //'suspicious_clue_file' => $suspicious_clue_file
    ));
    $strdetlastid = DB::table('str_detail')->max('idstr_detail'); // last insert id of str_detail
	
	// ----------------------------- part 2 ----------------------- //
	    if($_POST['amount_currency_1'] !== ''){
      $amount_currency = $_POST['amount_currency_1'];
      $currency_idcurrency = $_POST['currency_1'];
      $eachcurrency = DB::table('amount_currency')->insert(array(
        'amount_currency' => $amount_currency,
        'currency_idcurrency' => $currency_idcurrency,
        'str_detail_idstr_detail' => $strdetlastid
      ));
    }
    if($_POST['amount_currency_2'] !== ''){
      $amount_currency = $_POST['amount_currency_2'];
      $currency_idcurrency = $_POST['currency_2'];
      $eachcurrency = DB::table('amount_currency')->insert(array(
        'amount_currency' => $amount_currency,
        'currency_idcurrency' => $currency_idcurrency,
        'str_detail_idstr_detail' => $strdetlastid
      ));
    }
    if($_POST['amount_currency_3'] !== ''){
      $amount_currency = $_POST['amount_currency_3'];
      $currency_idcurrency = $_POST['currency_3'];
      $eachcurrency = DB::table('amount_currency')->insert(array(
        'amount_currency' => $amount_currency,
        'currency_idcurrency' => $currency_idcurrency,
        'str_detail_idstr_detail' => $strdetlastid
      ));
    }
	
	// ------------------------ part 3 ------------------------ //
	if(($_POST['beneficiary_name'] !== '') || ($_POST['beneficiary_nationality'] !== '') || ($_POST['beneficiary_proof_addr_detail'] !== '') 
	|| ($_POST['beneficiary_proof_addr'] !== '') || ($_POST['beneficiary_phone'] !== '') || ($_POST['beneficiary_tel'] !== '') 
	|| ($_POST['beneficiary_cell'] !== '')){
		
	$beneficiary_name = $_POST['beneficiary_name'];
	$beneficiary_nationality = $_POST['beneficiary_nationality'];
	$beneficiary_proof_addr_detail = $_POST['beneficiary_proof_addr_detail'];
	$beneficiary_proof_addr = $_POST['beneficiary_proof_addr'];
	$beneficiary_phone = $_POST['beneficiary_phone'];
	$beneficiary_tel = $_POST['beneficiary_tel'];
	$beneficiary_cell = $_POST['beneficiary_cell'];
	
      $benefinsert = DB::table('beneficiary')-> insert(array(
        'beneficiary_name' => $beneficiary_name,
        'beneficiary_nationality' => $beneficiary_nationality,
        'beneficiary_proof_addr_detail' => $beneficiary_proof_addr_detail,
        'beneficiary_proof_addr' => $beneficiary_proof_addr,
        'beneficiary_phone' => $beneficiary_phone,
        'beneficiary_tel' => $beneficiary_tel,
        'beneficiary_cell' => $beneficiary_cell
      ));

      $beneflastid = DB::table('beneficiary')->max('idbeneficiary'); // last insert id of beneficiary
	  
	}else{
      $beneflastid = NULL;
    }
	
	// ------------------------ part 4 (for enterprise) ----------------------- //
	if(($_POST['entities_name'] !== '') || ($_POST['entities_business_type'] !== '') || ($_POST['entities_office_addr_detail'] !== '') 
	|| ($_POST['entities_office_addr'] !== '') || ($_POST['entities_business_approve_date'] !== '') || ($_POST['entities_registra_capital'] !== '') 
	|| ($_POST['entities_registra_capital_currency'] !== '') || ($_POST['entities_business_registration_certificate_type'] !== '') 
	|| ($_POST['entities_business_registration_certificate_no'] !== '') || ($_POST['entities_business_registration_certificate_issue'] !== '') 
	|| ($_POST['entities_taxpayer_no'] !== '') || ($_POST['entities_type'] !== '') || ($_POST['entities_code'] !== '') || ($_POST['entities_phone'] !== '') 
	|| ($_POST['entities_tel'] !== '') || ($_POST['entities_cell'] !== '')){
		
	  $entities_name = $_POST['entities_name'];
	  $entities_business_type = $_POST['entities_business_type'];
	  $entities_office_addr_detail = $_POST['entities_office_addr_detail'];
	  $entities_office_addr = $_POST['entities_office_addr'];
	  $entities_business_approve_date = $_POST['entities_business_approve_date'];
	  $entities_registra_capital = $_POST['entities_registra_capital'];
	  $entities_registra_capital_currency = $_POST['entities_registra_capital_currency'];
	  $entities_business_registration_certificate_type = $_POST['entities_business_registration_certificate_type'];
	  $entities_business_registration_certificate_no = $_POST['entities_business_registration_certificate_no'];
	  $entities_business_registration_certificate_issue = $_POST['entities_business_registration_certificate_issue'];
	  $entities_taxpayer_no = $_POST['entities_taxpayer_no'];
	  $entities_type = $_POST['entities_type'];
	  $entities_code = $_POST['entities_code'];
	  $entities_phone = $_POST['entities_phone'];
	  $entities_tel = $_POST['entities_tel'];
	  $entities_cell = $_POST['entities_cell'];
	  
      $entitiesinsert = DB::table('entities')-> insert(array(
        'entities_name' => $entities_name,
        'entities_business_type' => $entities_business_type,
        'entities_office_addr_detail' => $entities_office_addr_detail,
        'entities_office_addr' => $entities_office_addr,
        'entities_business_approve_date' => $entities_business_approve_date,
        'entities_registra_capital' => $entities_registra_capital,
        'entities_registra_capital_currency' => $entities_registra_capital_currency,
        'entities_business_registration_certificate_type' => $entities_business_registration_certificate_type,
        'entities_business_registration_certificate_no' => $entities_business_registration_certificate_no,
        'entities_business_registration_certificate_issue' => $entities_business_registration_certificate_issue,
        'entities_taxpayer_no' => $entities_taxpayer_no,
        'entities_type' => $entities_type,
        'entities_code' => $entities_code,
        'entities_phone' => $entities_phone,
        'entities_tel' => $entities_tel,
        'entities_cell' => $entities_cell
      ));

      $entitieslastid = DB::table('entities')->max('identities'); // last insert id of entities
    }else{
      $entitieslastid = null;
    }
	
	//---------------------------- part 5 --------------------//
	/*if(($_POST['personnel_name'] !== '') || ($_POST['personnel_name_e'] !== '') || ($_POST['personnel_nationality'] !== '') || ($_POST['personnel_nationality_e'] !== '') 
	|| ($_POST['personel_gender'] !== '') || ($_POST['personelcol_office'] !== '') || ($_POST['personelcol_office_e'] !== '') || ($_POST['personnel_occupation'] !== '') 
	|| ($_POST['personnel_occupation_e'] !== '') || ($_POST['personnel_entity_relation_e'] !== '') || ($_POST['personnel_dob'] !== '') || ($_POST['personnel_dob_e'] !== '') 
	|| ($_POST['personnel_pob'] !== '') || ($_POST['personnel_pob_e'] !== '') || ($_POST['personnel_addr_proof_detail'] !== '') || ($_POST['personnel_addr_proof_detail_e'] !== '') 
	|| ($_POST['personnel_addr_proof'] !== '') || ($_POST['personnel_addr_proof_e'] !== '') || ($_POST['personnel_addr_in_laos'] !== '') || ($_POST['personnel_addr_in_laos_e'] !== '') 
	|| ($_POST['personnel_addr_abroad'] !== '') || ($_POST['personnel_addr_abroad_e'] !== '') || ($_POST['personnel_phone'] !== '') || ($_POST['personnel_phone_e'] !== '') 
	|| ($_POST['personnel_tel'] !== '') || ($_POST['personnel_tel_e'] !== '') || ($_POST['personnel_cell'] !== '') || ($_POST['personnel_cell_e'] !== '') || ($_POST['personnel_proof_type'] !== '') 
	|| ($_POST['personnel_proof_type_e'] !== '') || ($_POST['personnel_proof_issue_date'] !== '') || ($_POST['personnel_proof_issue_date_e'] !== '') || ($_POST['personnel_proof_no'] !== '') 
	|| ($_POST['personnel_proof_no_e'] !== '') || ($_POST['personnel_proof_issue_place'] !== '') || ($_POST['personnel_proof_issue_place_e'] !== '') || ($_POST['personnel_proof_expiry_date'] !== '') 
	|| ($_POST['personnel_proof_expiry_date_e'] !== '') || ($_POST['personnel_proof_register_no'] !== '') || ($_POST['personnel_proof_register_no_e'] !== '') || ($_POST['personnel_proof_register_place'] !== '') 
	|| ($_POST['personnel_proof_register_place_e'] !== '') || ($_POST['personnel_proof_other'] !== '') || ($_POST['personnel_proof_other_e'] !== '')){*/	
	
	if (($_POST['personnel_name_e'] !== '') || ($_POST['personnel_nationality_e'] !== '') || ($_POST['personel_gender'] !== '') || ($_POST['personelcol_office_e'] !== '') 
	|| ($_POST['personnel_occupation_e'] !== '') || ($_POST['personnel_entity_relation_e'] !== '') || ($_POST['personnel_dob_e'] !== '') || ($_POST['personnel_pob_e'] !== '') 
	|| ($_POST['personnel_addr_proof_detail_e'] !== '') || ($_POST['personnel_addr_proof_e'] !== '') || ($_POST['personnel_addr_in_laos_e'] !== '') || ($_POST['personnel_phone_e'] !== '') 
	|| ($_POST['personnel_tel_e'] !== '') || ($_POST['personnel_cell_e'] !== '') || ($_POST['personnel_proof_type_e'] !== '') || ($_POST['personnel_proof_issue_date_e'] !== '') 
	|| ($_POST['personnel_proof_no_e'] !== '') || ($_POST['personnel_proof_issue_place_e'] !== '') || ($_POST['personnel_proof_expiry_date_e'] !== '') || ($_POST['personnel_proof_register_no_e'] !== '')
	|| ($_POST['personnel_proof_register_place_e'] !== '') || ($_POST['personnel_proof_other_e'] !== '')){
		
	  // -------------------------(for non-enterprise)------------------------- //
	  /*$personnel_name = $_POST['personnel_name'];
	  $personnel_nationality = $_POST['personnel_nationality'];
	  $personel_gender = $_POST['personel_gender'];
	  $personelcol_office = $_POST['personelcol_office'];
	  $personnel_occupation = $_POST['personnel_occupation'];
	  $personnel_entity_relation = $_POST['personnel_entity_relation_e'];
	  $personnel_dob = $_POST['personnel_dob'];
	  $personnel_pob = $_POST['personnel_pob'];
	  $personnel_addr_proof_detail = $_POST['personnel_addr_proof_detail']; 
	  $personnel_addr_proof = $_POST['personnel_addr_proof'];
	  $personnel_addr_in_laos = $_POST['personnel_addr_in_laos'];
	  $personnel_addr_abroad = $_POST['personnel_addr_abroad'];
	  $personnel_phone = $_POST['personnel_phone'];
	  $personnel_tel = $_POST['personnel_tel'];
	  $personnel_cell = $_POST['personnel_cell'];
	  $personnel_proof_type = $_POST['personnel_proof_type'];
	  $personnel_proof_issue_date = $_POST['personnel_proof_issue_date'];
	  $personnel_proof_no = $_POST['personnel_proof_no'];
	  $personnel_proof_issue_place = $_POST['personnel_proof_issue_place'];
	  $personnel_proof_expiry_date = $_POST['personnel_proof_expiry_date'];
	  $personnel_proof_register_no = $_POST['personnel_proof_register_no']; 
	  $personnel_proof_register_place = $_POST['personnel_proof_register_place'];
	  $personnel_proof_other = $_POST['personnel_proof_other'];*/
	  
	  $personel_gender = $_POST['personel_gender'];
	  $personnel_entity_relation = $_POST['personnel_entity_relation_e'];
	  
	  $personnel_name = $_POST['personnel_name_e'];
	  $personnel_nationality = $_POST['personnel_nationality_e'];
	  $personelcol_office = $_POST['personelcol_office_e'];
	  $personnel_occupation = $_POST['personnel_occupation_e'];
	  $personnel_dob = $_POST['personnel_dob_e'];
	  $personnel_pob = $_POST['personnel_pob_e'];
	  $personnel_addr_proof_detail = $_POST['personnel_addr_proof_detail_e']; 
	  $personnel_addr_proof = $_POST['personnel_addr_proof_e'];
	  $personnel_addr_in_laos = $_POST['personnel_addr_in_laos_e'];
	  $personnel_addr_abroad = $_POST['personnel_addr_abroad_e'];
	  $personnel_phone = $_POST['personnel_phone_e'];
	  $personnel_tel = $_POST['personnel_tel_e'];
	  $personnel_cell = $_POST['personnel_cell_e'];
	  $personnel_proof_type = $_POST['personnel_proof_type_e'];
	  $personnel_proof_issue_date = $_POST['personnel_proof_issue_date_e'];
	  $personnel_proof_no = $_POST['personnel_proof_no_e'];
	  $personnel_proof_issue_place = $_POST['personnel_proof_issue_place_e'];
	  $personnel_proof_expiry_date = $_POST['personnel_proof_expiry_date_e'];
	  $personnel_proof_register_no = $_POST['personnel_proof_register_no_e']; 
	  $personnel_proof_register_place = $_POST['personnel_proof_register_place_e'];
	  $personnel_proof_other = $_POST['personnel_proof_other_e'];
	  
	  
	  $personnelinsert = DB::table('personnel')-> insert(array(
        'personnel_name' => $personnel_name,
        'personnel_nationality' => $personnel_nationality,
        'personel_gender' => $personel_gender,
        'personelcol_office' => $personelcol_office,
        'personnel_occupation' => $personnel_occupation,
        'personnel_entity_relation' => $personnel_entity_relation,
        'personnel_dob' => $personnel_dob,
        'personnel_pob' => $personnel_pob,
        'personnel_addr_proof_detail' => $personnel_addr_proof_detail,
        'personnel_addr_proof' => $personnel_addr_proof,
        'personnel_addr_in_laos' => $personnel_addr_in_laos,
        'personnel_addr_abroad' => $personnel_addr_abroad,
        'personnel_phone' => $personnel_phone,
        'personnel_tel' => $personnel_tel,
        'personnel_cell' => $personnel_cell,
        'personnel_proof_type' => $personnel_proof_type,
        'personnel_proof_issue_date' => $personnel_proof_issue_date,
        'personnel_proof_no' => $personnel_proof_no,
        'personnel_proof_issue_place' => $personnel_proof_issue_place,
        'personnel_proof_expiry_date' => $personnel_proof_expiry_date,
        'personnel_proof_register_no' => $personnel_proof_register_no,
        'personnel_proof_register_place' => $personnel_proof_register_place,
        'personnel_proof_other' => $personnel_proof_other
      ));

      $personnellastid = DB::table('personnel')->max('idpersonnel'); // last insert id of personnel
    }else{
      $personnellastid = null;
    }
	
	//---------------------------- part 6 --------------------//
	if(($_POST['reporter_type_idreporter_type'] !== '') || ($_POST['str_form_reporter_name'] !== '') || ($_POST['approval_signature_fullname'] !== '') 
	|| ($_POST['approval_id_card'] !== '') || ($_POST['audit_signature_fullname'] !== '') || ($_POST['audit_id_card'] !== '') || ($_POST['reporter_branch_name'] !== '') 
	|| ($_POST['reporter_branch_province'] !== '') || ($_POST['reporter_branch_tel'] !== '') || ($_POST['reporter_branch_fax'] !== '') || ($_POST['reporter_business_type'] !== '')){
	  
	  $updated_at = date('Y-m-d H:i:s');
      $created_at = date('Y-m-d H:i:s');
      $replied_at = null;
      $str_stt = '0';
      /*if(!empty($_POST['personnel_entity_relation_e'])){
        $personnel_or_entity = 'per';
      }else{
        $personnel_or_entity = 'ent';
      }*/
	  $personnel_or_entity = 'ent';
	  
	  $reporter_type_idreporter_type = $_POST['reporter_type_idreporter_type'];
	  $str_form_reporter_name = $_POST['str_form_reporter_name'];
	  $approval_signature_fullname = $_POST['approval_signature_fullname'];
	  $approval_id_card = $_POST['approval_id_card'];
	  $audit_signature_fullname = $_POST['audit_signature_fullname'];
	  $audit_id_card = $_POST['audit_id_card'];
	  $reporter_branch_name = $_POST['reporter_branch_name']; 
	  $reporter_branch_province = $_POST['reporter_branch_province'];
	  $reporter_branch_tel = $_POST['reporter_branch_tel'];
	  $reporter_branch_fax = $_POST['reporter_branch_fax'];
	  $reporter_business_type = $_POST['reporter_business_type'];
	  $str_date = $_POST['str_date'];
	  $str_no = $_POST['str_no'];
	  
      $str_forminsert = DB::table('str_form')-> insert(array(
        'str_no' => $str_no,
        'str_date' => $str_date,
        'reporter_type_idreporter_type' => $reporter_type_idreporter_type,
        'str_form_reporter_name' => $str_form_reporter_name,
        'reporter_idusr' => $reporter_idusr,
        'approval_signature_fullname' => $approval_signature_fullname,
        'approval_id_card' => $approval_id_card,
        'audit_signature_fullname' => $audit_signature_fullname,
        'audit_id_card' => $audit_id_card,
        'reporter_branch_name' => $reporter_branch_name,
        'reporter_branch_province' => $reporter_branch_province,
        'reporter_branch_tel' => $reporter_branch_tel,
        'reporter_branch_fax' => $reporter_branch_fax,
        'reporter_business_type' => $reporter_business_type,
        'personnel_or_entity' => $personnel_or_entity,
        'personnel_idpersonnel' => $personnellastid,		// part 5 _ NULL
        'beneficiary_idbeneficiary' => $beneflastid,		// part 3 _ NULL
        'str_detail_idstr_detail' => $strdetlastid,			// part 1 _ NOT NULL
        'entities_identities' => $entitieslastid,			// part 4 _ NULL
        'updated_at' => $updated_at,
        'created_at' => $created_at,
        'replied_at' => $replied_at,
        'str_stt' => $str_stt
      ));
	}
	  //---------------------------- part 7 --------------------//
		return redirect('strent');
	}

}
