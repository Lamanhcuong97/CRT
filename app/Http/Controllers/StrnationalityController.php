<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StrnationalityController extends Controller
{
  public function __construct(){
    $this->middleware('auth', ['except'=>['nat', 'natshow']]);
  }

  public function nat(){ 
    if(Auth::user()->role_idrole == 1){
    return view('stronlines.nationalityviews');
    }
     else {
    return view('index');
    }
  }

  public function natshow(){
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'] . ' 23:59:59';
    $ssdate = $_POST['sdate'];
    $sedate = $_POST['edate'];
    $natreports = DB::table('str_form')
    ->join('personnel', 'str_form.personnel_idpersonnel', '=', 'personnel.idpersonnel')
    ->join('nationality', 'personnel.personnel_nationality', '=', 'nationality.idnationality')
    ->select(DB::raw('count(idnationality) as count_idnat, nationality.nationality_name'))
    ->where('created_at', '>=', $sdate)->where('created_at', '<=', $edate)
    ->groupBy('nationality_name')->get();

    // if(empty($natreports))
    //   abort(404);

    if(Auth::user()->role_idrole == 1){
    return view('stronlines.nationalityviews' , compact('natreports', 'ssdate', 'sedate'));
    }
    else {
    return view('index');
    }


  }
}
