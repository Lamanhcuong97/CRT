<?php

namespace App\Http\Controllers;


// use Illuminate\Http\Request;
use App\Reporter;
use App\FirForm;
use App\Firattachfile;
use Request;
use App\Http\Requests\FirFormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FirsController extends Controller
{
  public function __construct(){
    $this->middleware('auth', ['except'=>['index', 'firstore', 'firviews', 'firshow']]);
  }

  public function index(){
    $reporters = Reporter::get();
    $user = Auth::id();
    if (Auth::user()->role_idrole == '1'){
      return view('fir.create', compact('reporters', 'user'));
    }
    else {
      return redirect('logout');
    }
    
  }

  public function firstore(){
    
    $input = Request::all();
    $firform = FirForm::create($input);
    foreach($input['input_attach_file'] as $file) {
      $gen_file_name = "adattach_".date("d-m-Y")."_".time()."_".$file->getClientOriginalName();
      
      $directory = "fileattaches/fir_upload";
      $file->move($directory,$gen_file_name);
      

      $input_attach_file = new Firattachfile;
      $input_attach_file->input_attach_file = $directory. '/'.$gen_file_name;
      
      $input_attach_file->idfir_form = $firform->id;
      
      $input_attach_file->save();
      
      //$adminrequest->attach = $directory.'/'.$gen_file_name;
    }
    if (Auth::user()->role_idrole == '1'){
    return redirect('fir');
    }
    else {
      return redirect('logout');
    }



  }







  public function firviews(){
    if (Auth::user()->role_idrole == '1'){
    return view('fir.views');
    }
    else {
      return redirect('logout');
    }

  }

  public function firshow(){
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'] . ' 23:59:59';
    $ssdate = $_POST['sdate'];
    $sedate = $_POST['edate'];
    $firreports = DB::table('fir_form')
    ->join('reporter', 'fir_form.reporter_to_be_report', '=', 'reporter.idreporter')
    ->join('usr', 'fir_form.usr_reporter', '=', 'usr.idusr')
    ->select('fir_form.*', 'reporter.reporter_name', 'usr.usr_name')
    ->where('created_at', '>=', $sdate)->where('created_at', '<=', $edate)->get();

    $attch = Firattachfile::all();
    $attch_files = null;
    foreach ($attch as $v) {
        $attch_files[$v->idfir_form][] = $v->input_attach_file;
    }

    if (Auth::user()->role_idrole == '1'){
    return view('fir.views' , compact('firreports', 'ssdate', 'sedate', 'attch_files'));
    }
    else {
      return redirect('logout');
    }



  }


  

}
