<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests;
// use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\StrForm; // Added by Youi 20171222
use App\AmountCurrency; // Added by Youi 20180216
use App\User;
use App\Responsibility;
use App\Amliostrno;

class StrDetailsController extends Controller
{
  public function __construct(){
    $this->middleware('auth', ['except'=>['strall', 'detailshow', 'show', 'descriptfile']]);
  }

  public function show($id){    

    DB::table('str_form')->where('idstr_form', $id)->where('str_stt', '<>', '2')->update(['str_stt' => 1]);
    $strreceive = DB::table('str_form')
    -> join('reporter_type', 'str_form.reporter_type_idreporter_type', '=', 'reporter_type.idreporter_type')
    -> join('province', 'str_form.reporter_branch_province', '=', 'province.idprovince')
    -> join('personnel', 'str_form.personnel_idpersonnel', '=', 'personnel.idpersonnel')
    -> join('str_detail', 'str_form.str_detail_idstr_detail', '=', 'str_detail.idstr_detail')
    -> leftJoin('beneficiary', 'str_form.beneficiary_idbeneficiary', '=', 'beneficiary.idbeneficiary')
    -> leftJoin('entities', 'str_form.entities_identities', '=', 'entities.identities')
    -> select('str_form.*', 'reporter_type.*', 'province.*', 'beneficiary.*', 'personnel.*', 'str_detail.*', 'entities.*')
    -> where('str_form.idstr_form', $id) -> first();
////////////////////////////////////////////////////
    $village_names = DB::table('village') -> get();
    if($village_names){
      $vl_names[] = '';
      $vl_id_dtrs[] = '';
      foreach ($village_names as $village_n) {
        $vl_names[$village_n->idvillage] = $village_n->village_name;
        $vl_id_dtrs[$village_n->idvillage] = $village_n->district_iddistrict;
      }
    }

    $distrik = NULL;
    $distrik2 = NULL;
    $provig = NULL;
    $provig2 = NULL;
    
    if( isset($strreceive->personnel_addr_proof) ){
      $distrik = DB::table('village') 
      ->where('idvillage', $strreceive->personnel_addr_proof)-> get();
      $distrik = $distrik[0]->district_iddistrict;
      $provig = DB::table('district') 
      ->where('iddistrict', $distrik)-> get();
      $provig = $provig[0]->province_idprovince;
      
    }

      if (isset($strreceive->beneficiary_proof_addr)){
        $distrik2 = DB::table('village') 
    ->where('idvillage', $strreceive->beneficiary_proof_addr)-> get();
    $distrik2 = $distrik2[0]->district_iddistrict;
    $provig2 = DB::table('district') 
    ->where('iddistrict', $distrik2)-> get();
    $provig2 = $provig2[0]->province_idprovince;
      }
  
  $district_names = DB::table('district') -> get();
  if($district_names){
    $dtr_names[] = '';
    $dtr_id_prvs[] = '';
    foreach ($district_names as $district_n) {
      $dtr_names[$district_n->iddistrict] = $district_n->district_name;
      $dtr_id_prvs[$district_n->iddistrict] = $district_n->province_idprovince;
    }
  }
  /////////////////////////////////////////////////
    $province_names = DB::table('province') -> get();
    if($province_names){
      $prv_names[] = '';
      foreach ($province_names as $province_n) {
        $prv_names[$province_n->idprovince] = $province_n->province_name;
      }
    }
    /////////////////////////////////////
    $currency_names = DB::table('currency') -> get();
    if($currency_names){
      $curr_names[] = '';
      foreach($currency_names as $currency_n){
        $curr_names[$currency_n->idcurrency] = $currency_n->currency_ini_l;
      }
    }
    ///////////////////////////////////////
    $nationality_names = DB::table('nationality')->get();
    if($nationality_names){
      $nat_names[] = '';
      foreach($nationality_names as $nationality_n){
        $nat_names[$nationality_n->idnationality] = $nationality_n->nationality_name;
      }
    }
    //////////////////////////////////////
  $idstrdetails = StrForm::select('str_form.str_detail_idstr_detail')->where('idstr_form', $id)->first();
  $idstrdetail = $idstrdetails->str_detail_idstr_detail;

  $amt_each_currs = AmountCurrency::where('str_detail_idstr_detail', $idstrdetail)->get();

    

  $amt_curs = DB::table('amount_currency')
            ->join('currency', 'currency.idcurrency', '=', 'amount_currency.currency_idcurrency')
            ->select('amount_currency.*', 'currency.currency_ini_l')            
            ->where('str_detail_idstr_detail', $idstrdetail)
            ->orderBy('str_detail_idstr_detail', 'asc')->get();

	
    if(empty($strreceive))
      abort(404);
    return view('stronlines.strreceive_new' , compact('strreceive', 'vl_names', 'vl_id_dtrs', 'dtr_names', 'dtr_id_prvs', 'prv_names', 'curr_names', 'amt_each_currs', 'nat_names'))
    ->with('amt_curs', $amt_curs)
    ->with('distrik',$distrik)
    ->with('provig',$provig)
    ->with('distrik2',$distrik2)
    ->with('provig2',$provig2)
    ;
  



  }

  public function strall(){
    
    $senders = DB::table('usr')->select('idusr', 'username')->get();
    
    $idsenders[] = '';
    foreach($senders as $sender){
      $idsenders[$sender->idusr] = $sender->username;
    }
    if(Auth::user()->role_idrole == 2){
      $stralls = StrForm::join('personnel', 'personnel_idpersonnel', '=', 'idpersonnel')->where('reporter_idusr', '=', Auth::id())->orderBy('created_at', 'DESC')->get();
      return view('stronlines.strall_rp', compact('stralls'));
    }

    if(Auth::user()->role_idrole == 3){
      return view('index');
    }

    if(Auth::user()->role_idrole == 4){
      return view('index');
    }else{
      
      $usr = user::where('role_idrole',1)->get();
      $responsibility = Responsibility::all();
      $amliostrno = Amliostrno::all();
     
	  $stralls = StrForm::join('personnel', 'personnel_idpersonnel', '=', 'idpersonnel')
      ->leftJoin('nationality', 'personnel.personnel_nationality', '=', 'nationality.idnationality')
      ->leftJoin('str_detail', 'idstr_detail', '=', 'str_detail_idstr_detail')
	  ->leftJoin('amliostrno','str_form.idstr_form', '=','amliostrno.idstr_form')
	  -> select('str_form.*', 'personnel.*', 'nationality.*', 'str_detail.*', 'amliostrno.amliostr_no')
		->orderBy('str_form.created_at', 'DESC')->take(100)->get();
		
      $count_data = StrForm::join('personnel', 'personnel_idpersonnel', '=', 'idpersonnel')
      ->leftJoin('nationality', 'personnel.personnel_nationality', '=', 'nationality.idnationality')
      ->leftJoin('str_detail', 'idstr_detail', '=', 'str_detail_idstr_detail')
	  ->leftJoin('amliostrno','str_form.idstr_form', '=','amliostrno.idstr_form')
      ->count();

      return view('stronlines.strall', compact('stralls', 'idsenders','usr','responsibility', 'amliostrno', 'count_data'));
    }
  }

  public function detailshow(){

    $sdate = $_POST['sdate']; $sdate1 = $_POST['sdate']; $edate = $_POST['edate'] . ' 23:59:59'; $edate1 = $_POST['edate'] . ' 23:59:59'; $ssdate = $_POST['sdate']; $sedate = $_POST['edate'];
    if($_POST['report_detail_type'] == 1){
      $report_detail_type = 1;
      $mainpage = 'layouts.mainstrdetail';
      $strdetailreports = DB::table('str_form')
      ->join('reporter_type', 'str_form.reporter_type_idreporter_type', '=', 'reporter_type.idreporter_type') ->join('province', 'str_form.reporter_branch_province', '=', 'province.idprovince') ->select('str_form.*', 'province.province_name', 'reporter_type.reporter_type_title') ->where('created_at', '>=', $sdate) ->where('created_at', '<=', $edate)->get();
  
      
        if(Auth::user()->role_idrole == 1){

      return view('stronlines.detailviews' , compact('strdetailreports', 'ssdate', 'sedate', 'mainpage', 'report_detail_type'));
        }
        else {
          return view('index');
        }
    }

    if($_POST['report_detail_type'] == 2){
      $report_detail_type = 2;
      $mainpage = 'layouts.mainstrdetail2';
      $strdetailreport2s = DB::table('str_form')
      ->join('personnel', 'str_form.personnel_idpersonnel', '=', 'personnel.idpersonnel')
      ->join('village', 'personnel.personnel_addr_proof', '=', 'village.idvillage') ->join('district', 'village.district_iddistrict', '=', 'district.iddistrict')->join('province', 'district.province_idprovince', '=', 'province.idprovince')->join('nationality', 'personnel.personnel_nationality', '=', 'nationality.idnationality') ->select('personnel.*', 'province.province_name', 'district.district_name', 'village.village_name', 'nationality.nationality_name') ->where('created_at', '>=', $sdate) ->where('created_at', '<=', $edate)->where('str_form.entities_identities', '=', null)->get();
     
     

        if(Auth::user()->role_idrole == 1){
      return view('stronlines.detailviews' , compact('strdetailreport2s', 'ssdate', 'sedate', 'mainpage', 'report_detail_type'));
    }
    else {
      return view('index');
    }

    }

    if($_POST['report_detail_type'] == 3){
      $report_detail_type = 3;
      $mainpage = 'layouts.mainstrdetail3';
      $strdetailreport3s = DB::table('str_form')
      ->join('entities', 'str_form.entities_identities', '=', 'entities.identities')->join('currency', 'entities.entities_registra_capital_currency', '=', 'currency.idcurrency')
      ->join('village', 'entities.entities_office_addr', '=', 'village.idvillage') ->join('district', 'village.district_iddistrict', '=', 'district.iddistrict')->join('province', 'district.province_idprovince', '=', 'province.idprovince') ->select('entities.*', 'province.province_name', 'district.district_name', 'village.village_name', 'currency.currency_ini_l') ->where('created_at', '>=', $sdate) ->where('created_at', '<=', $edate)->where('str_form.entities_identities', '<>', null)->get();
     

        if(Auth::user()->role_idrole == 1){

      return view('stronlines.detailviews' , compact('strdetailreport3s', 'ssdate', 'sedate', 'mainpage', 'report_detail_type'));
    }
    else {
      return view('index');
    }
    
    }

    if($_POST['report_detail_type'] == 4){
      $report_detail_type = 4;
      $mainpage = 'layouts.mainstrdetail4';
      $strdetailreport4s = DB::table('str_form')
      ->join('personnel', 'str_form.personnel_idpersonnel', '=', 'personnel.idpersonnel')
      ->join('village', 'personnel.personnel_addr_proof', '=', 'village.idvillage') ->join('district', 'village.district_iddistrict', '=', 'district.iddistrict')->join('province', 'district.province_idprovince', '=', 'province.idprovince')->join('nationality', 'personnel.personnel_nationality', '=', 'nationality.idnationality') ->select('personnel.*', 'province.province_name', 'district.district_name', 'village.village_name', 'nationality.nationality_name') ->where('created_at', '>=', $sdate) ->where('created_at', '<=', $edate)->where('str_form.entities_identities', '<>', null)->get();
     

        if(Auth::user()->role_idrole == 1){
      return view('stronlines.detailviews' , compact('strdetailreport4s', 'ssdate', 'sedate', 'mainpage', 'report_detail_type'));
    }
    else {
      return view('index');
    }
    
    }

    if($_POST['report_detail_type'] == 5){
      $report_detail_type = 5;
      $mainpage = 'layouts.mainstrdetail5';
      $strdetailreport5s = DB::table('str_form')
      ->join('beneficiary', 'str_form.beneficiary_idbeneficiary', '=', 'beneficiary.idbeneficiary')
      ->join('village', 'beneficiary.beneficiary_proof_addr', '=', 'village.idvillage') ->join('district', 'village.district_iddistrict', '=', 'district.iddistrict')->join('province', 'district.province_idprovince', '=', 'province.idprovince')->join('nationality', 'beneficiary.beneficiary_nationality', '=', 'nationality.idnationality') ->select('beneficiary.*', 'province.province_name', 'district.district_name', 'village.village_name', 'nationality.nationality_name') ->where('created_at', '>=', $sdate) ->where('created_at', '<=', $edate)->where('str_form.beneficiary_idbeneficiary', '<>', null)->get();
      // if(empty($strdetailreport5s))
      //   abort(404);
      if(Auth::user()->role_idrole == 1){
      return view('stronlines.detailviews' , compact('strdetailreport5s', 'ssdate', 'sedate', 'mainpage', 'report_detail_type'));
    }
    else {
      return view('index');
    }
    
    }

    if($_POST['report_detail_type'] == 6){
      $report_detail_type = 6;
      $mainpage = 'layouts.mainstrdetail6';
      $laststrdetail = 0;
      $strdetailreport6s = DB::table('str_form')
      ->join('str_detail', 'str_form.str_detail_idstr_detail', '=', 'str_detail.idstr_detail')
      ->select('str_detail.*') ->where('created_at', '>=', $sdate) ->where('created_at', '<=', $edate)->where('str_form.str_detail_idstr_detail', '<>', null)->get();

      $idstrdetails = DB::table('str_detail')->join('str_form', 'str_form.str_detail_idstr_detail', '=', 'str_detail.idstr_detail')
      ->select('str_detail.idstr_detail')
      ->where('created_at', '>=', $sdate)
      ->where('created_at', '<=', $edate)->get();
      $idstrdet[] = null;
      foreach ($idstrdetails as $idstrdetail) {
        $idstrdet[] = $idstrdetail->idstr_detail;
      }

      $amt_curs = DB::table('amount_currency')
            ->join('currency', 'currency.idcurrency', '=', 'amount_currency.currency_idcurrency')
            ->select('amount_currency.*', 'currency.currency_ini_l')
            ->whereIn('str_detail_idstr_detail', $idstrdet)
            ->orderBy('str_detail_idstr_detail', 'asc')->get();

      if($amt_curs){

        $ordernumber[] = 1;
        $laststrdetail = 1;
        foreach($amt_curs as $amt_cur){

          if($laststrdetail == $amt_cur->str_detail_idstr_detail){
            $ordernumber[$laststrdetail]++;
          }else{
            $laststrdetail = $amt_cur->str_detail_idstr_detail;
            $ordernumber[$laststrdetail] = 1;
          }

          $amount[$laststrdetail][$ordernumber[$laststrdetail]] = $amt_cur->amount_currency;
          $currency[$laststrdetail][$ordernumber[$laststrdetail]] = $amt_cur->currency_ini_l;

        }
      }

      // if(empty($strdetailreport6s))
      //   abort(404);

        if(Auth::user()->role_idrole == 1){
      return view('stronlines.detailviews' , compact('strdetailreport6s', 'ssdate', 'sedate', 'mainpage', 'report_detail_type', 'amount', 'currency', 'idstrdetails'));
    }
    else {
      return view('index');
    }
    
    }

  }
  function responsibility(Request $request) {
    $uid = $request->uid;
    $form_id = $request->form_id;
    Responsibility::where('idstr_form',$form_id)->delete();
    $resp = new Responsibility;
    $resp->idusr = $uid ;
    $resp->idstr_form = $form_id;
    $resp->save();
    
    return redirect('strall');
  }

  function amliostrno(Request $request) {
    $uid = $request->amliostrno;
    $form_id = $request->form_id2;
    Amliostrno::where('idstr_form',$form_id)->delete();
    $resp = new Amliostrno;
    $resp->amliostr_no = $uid ;
    $resp->idstr_form = $form_id;
    $resp->save();
    
    return redirect('strall');
  }

  function search(Request $request) { //Added by Phoutthasine 20211020
    // dd($request);
    if(isset($request->sdate)){
        $from_date = $request->sdate;
    }else{
        $from_date = null;
    }
    
    if(isset($request->edate)){
        $to_date = $request->edate;
    }else{
        $to_date = null;
    }
    $senders = DB::table('usr')->select('idusr', 'username')->get();
    
    $idsenders[] = '';
    foreach($senders as $sender){
      $idsenders[$sender->idusr] = $sender->username;
    }
      // dd($from_date,$from_date);
      $usr = user::where('role_idrole',1)->get();
      $responsibility = Responsibility::all();
      $amliostrno = Amliostrno::all();
      $search_txt = $request->search_txt;
      if($from_date != null && $to_date != null){
        if($request->search_txt){
          // $stralls = '1';
         $stralls = StrForm::join('personnel', 'str_form.personnel_idpersonnel','=','personnel.idpersonnel') //personnel.idpersonnel = str_form.personnel_idpersonnel
		  ->leftJoin('amliostrno','str_form.idstr_form', '=','amliostrno.idstr_form')
		  ->leftJoin('nationality', 'personnel.personnel_nationality', '=','nationality.idnationality')
		  ->leftJoin('str_detail', 'str_form.str_detail_idstr_detail', '=','str_detail.idstr_detail')
		  ->select('str_form.*', 'personnel.*', 'nationality.*', 'str_detail.*', 'amliostrno.amliostr_no')
          ->whereBetween('created_at',[$from_date, $to_date])
            ->where(function ($query) use ($search_txt) {
              $query->where('personnel.personnel_name', 'like', '%'.$search_txt.'%')
                ->orWhere('nationality.nationality_name', 'like', '%'.$search_txt.'%')
                ->orWhere('amliostrno.amliostr_no', 'like', '%'.$search_txt.'%')
                ->orWhere('str_form.str_no', 'like', '%'.$search_txt.'%');
            })
          ->orderBy('str_form.created_at', 'DESC')
          ->get();
        }else{
          $stralls = StrForm::join('personnel', 'str_form.personnel_idpersonnel','=','personnel.idpersonnel') //personnel.idpersonnel = str_form.personnel_idpersonnel
		  ->leftJoin('amliostrno','str_form.idstr_form', '=','amliostrno.idstr_form')
		  ->leftJoin('nationality', 'personnel.personnel_nationality', '=','nationality.idnationality')
		  ->leftJoin('str_detail', 'str_form.str_detail_idstr_detail', '=','str_detail.idstr_detail')
		  ->select('str_form.*', 'personnel.*', 'nationality.*', 'str_detail.*', 'amliostrno.amliostr_no')
          ->whereBetween('created_at',[$from_date, $to_date])
          ->orderBy('str_form.created_at', 'DESC')
          ->get();
        }
      }elseif($request->search_txt){
        if($from_date != null && $to_date != null){
          $stralls = StrForm::join('personnel', 'str_form.personnel_idpersonnel','=','personnel.idpersonnel') //personnel.idpersonnel = str_form.personnel_idpersonnel
		  ->leftJoin('amliostrno','str_form.idstr_form', '=','amliostrno.idstr_form')
		  ->leftJoin('nationality', 'personnel.personnel_nationality', '=','nationality.idnationality')
		  ->leftJoin('str_detail', 'str_form.str_detail_idstr_detail', '=','str_detail.idstr_detail')
		  ->select('str_form.*', 'personnel.*', 'nationality.*', 'str_detail.*', 'amliostrno.amliostr_no')
          ->whereBetween('created_at',[$from_date, $to_date])
            ->where(function ($query) use ($search_txt) {
              $query->where('personnel.personnel_name', 'like', '%'.$search_txt.'%')
                ->orWhere('nationality.nationality_name', 'like', '%'.$search_txt.'%')
                ->orWhere('amliostrno.amliostr_no', 'like', '%'.$search_txt.'%')
                ->orWhere('str_form.str_no', 'like', '%'.$search_txt.'%');
            })
          ->orderBy('str_form.created_at', 'DESC')
          ->get();
        }else{
          $stralls = StrForm::join('personnel', 'str_form.personnel_idpersonnel','=','personnel.idpersonnel') //personnel.idpersonnel = str_form.personnel_idpersonnel
		  ->leftJoin('amliostrno','str_form.idstr_form', '=','amliostrno.idstr_form')
		  ->leftJoin('nationality', 'personnel.personnel_nationality', '=','nationality.idnationality')
		  ->leftJoin('str_detail', 'str_form.str_detail_idstr_detail', '=','str_detail.idstr_detail')
		  ->select('str_form.*', 'personnel.*', 'nationality.*', 'str_detail.*', 'amliostrno.amliostr_no')
          ->where(function ($query) use ($search_txt) {
            $query->where('personnel.personnel_name', 'like', '%'.$search_txt.'%')
              ->orWhere('nationality.nationality_name', 'like', '%'.$search_txt.'%')
              ->orWhere('amliostrno.amliostr_no', 'like', '%'.$search_txt.'%')
              ->orWhere('str_form.str_no', 'like', '%'.$search_txt.'%');
          })
          ->orderBy('str_form.created_at', 'DESC')
          ->get();
        }
      }else{
        $stralls = StrForm::join('personnel', 'personnel_idpersonnel', '=', 'idpersonnel')
		  ->leftJoin('nationality', 'personnel.personnel_nationality', '=', 'nationality.idnationality')
		  ->leftJoin('str_detail', 'idstr_detail', '=', 'str_detail_idstr_detail')
		  ->leftJoin('amliostrno','str_form.idstr_form', '=','amliostrno.idstr_form')
		  ->select('str_form.*', 'personnel.*', 'nationality.*', 'str_detail.*', 'amliostrno.amliostr_no')
		  ->orderBy('str_form.created_at', 'DESC')->take(100)->get();
      }
	  
      $count_data = StrForm::join('personnel', 'personnel_idpersonnel', '=', 'idpersonnel')
      ->leftJoin('nationality', 'personnel.personnel_nationality', '=', 'nationality.idnationality')
      ->leftJoin('str_detail', 'idstr_detail', '=', 'str_detail_idstr_detail')
	  ->leftJoin('amliostrno','str_form.idstr_form', '=','amliostrno.idstr_form')
      ->count();
      //dd($stralls);
      // $stralls = null;
      return view('stronlines.strall', compact('stralls', 'idsenders','usr','responsibility', 'amliostrno','count_data'));
  }


}
