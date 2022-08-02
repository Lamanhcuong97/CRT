<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests;

use Request;
use App\Strreply;
use App\StrForm;
use App\AmountCurrency;
use Illuminate\Support\Facades\DB;
use PDF;
// use niklasravnsborg\LaravelPdf\Facades\PDF;

class PdfControllers extends Controller
{

  public function pdfgenerate(){
    $id = $_POST['idreply'];
  	$replycont = Strreply::find($id);
    if(empty($replycont))
      abort(404);
  
    // $pdf = PDF::loadView('pdf.pdfdocument');
    $pdf = PDF::loadView('pdf.pdfreply', compact('replycont'));
    //$pdf = mb_convert_encoding(\View::make('pdf.pdfreply', compact('replycont'), 'HTML-ENTITIES','UTF-8'));
    //return PDF::loadHtml($pdf)->download('amlio_auto_reply.pdf');
    // $pdf = PDF::loadView('pdfdocument');
  	return $pdf->download('amlio_auto_reply.pdf');
    // return view('pdfdocument', compact('data'));
  }

  public function strpdfgenerate(){
    $id = $_POST['idstr'];
  	// $strcont = StrForm::find($id);
    // DB::table('str_form')->where('idstr_form', $id)->where('str_stt', '<>', '2')->update(['str_stt' => 1]);
    ///////////////////////////////////////
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
 

$idstrdetails = StrForm::select('str_form.str_detail_idstr_detail')->where('idstr_form', $id)->first();
  $idstrdetail = $idstrdetails->str_detail_idstr_detail;

  $amt_each_currs = AmountCurrency::where('str_detail_idstr_detail', $idstrdetail)->get();

$amt_curs = DB::table('amount_currency')
            ->join('currency', 'currency.idcurrency', '=', 'amount_currency.currency_idcurrency')
            ->select('amount_currency.*', 'currency.currency_ini_l')            
            ->where('str_detail_idstr_detail', $idstrdetail)
            ->orderBy('str_detail_idstr_detail', 'asc')->get();




  $village_names = DB::table('village') -> get();
    if($village_names){
      $vl_names[] = '';
      $vl_id_dtrs[] = '';
      foreach ($village_names as $village_n) {
        $vl_names[$village_n->idvillage] = $village_n->village_name;
        $vl_id_dtrs[$village_n->idvillage] = $village_n->district_iddistrict;
      }
    }
/////////////////////////////////////////////////
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
  // $idstrdetails = StrForm::select('str_form.str_detail_idstr_detail')->where('idstr_form', $id)->first();
  // $idstrdetail = $idstrdetails->str_detail_idstr_detail;
  //
  // $amt_each_currs = AmountCurrency::where('str_detail_idstr_detail', $idstrdetail)->get();


    // if(empty($strcont))
    //   abort(404);
    // $pdf = PDF::loadView('pdf.pdfdocument');
    // $pdf = PDF::loadView('pdf.strpdf', compact('strcont'));
	// ob_end_clean();
    $pdf = PDF::loadView('pdf.strpdf', 
    compact('strreceive', 'vl_names', 'vl_id_dtrs', 'dtr_names', 'dtr_id_prvs', 
    'prv_names', 'curr_names', 'amt_each_currs', 'amt_curs','nat_names'));
  	// $pdf = PDF::loadView('pdfdocument');
  	return $pdf->stream('str_recieve.pdf');
    // return view('pdfdocument', compact('data'));
  }
}

