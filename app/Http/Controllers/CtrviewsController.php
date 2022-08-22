<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Reporter;
use App\Strreply;
use App\User;
use App\Http\Requests;
use Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CtrviewsController extends Controller
{
  public function __construct(){
    $this->middleware('auth', ['except'=>['reply', 'findreport', 'replystore', 'replyviews', 'show']]);
  }
  public function show($id){
    $replycont = Strreply::find($id);
    if(empty($replycont))
      abort(404);
    return view('stronlines.replycontent', compact('replycont'));
  }

  public function replyviews(){
    $receivers = DB::table('usr')->select('idusr', 'usr_name')->get();
    $idreceivers[] = '';
    foreach($receivers as $receiver){
      $idreceivers[$receiver->idusr] = $receiver->usr_name;
    }
    if(Auth::user()->role_idrole == 2){
      // $replies = Strreply::join('usr', 'usr.idusr', '=', 'str_replys.user_reply')->where('str_reply_to', '=', Auth::id())->get();
      $replies = [];
      return view('stronlines.ctrviews', compact('replies', 'idreceivers'));
	  
    }else{
      $replies = Strreply::join('usr', 'usr.idusr', '=', 'str_replys.user_reply')->get();
      return view('stronlines.replyviews', compact('replies', 'idreceivers'));
    }


  }
  public function replystore(){
    $sendto = $_POST['sendto'];
    if($_POST['reply_title'] !== ''){ $reply_title = $_POST['reply_title']; }else{ $reply_title = null; }
    if($_POST['reply_no'] !== ''){ $reply_no = $_POST['reply_no']; }else{ $reply_no = null; }

    $usr_reply = $_POST['usr_reply'];

    $idupdates = DB::table('str_form')->select('str_form_reporter_name')->where('reporter_idusr', '=', $sendto)->where('str_stt', '=', '1')->get();
    $idupd = '';
    foreach($idupdates as $idupdate){
      if($idupd == ''){
        $idupd = $idupdate->str_form_reporter_name;
      }else{
        $idupd = $idupd . '_' . $idupdate->str_form_reporter_name;
      }
    }
    $updatestrform = DB::table('str_form')->where('reporter_idusr', '=', $sendto)->where('str_stt', '=', '1')->update(['str_stt' => '2']);
    $now = date('Y-m-d H:i:s');
    $insertreply = DB::table('str_replys')->insert(
      ['str_reply_to' => $sendto, 'str_reply_no' => $reply_no, 'str_reply_topic' => $reply_title, 'user_reply' => $usr_reply, 'str_reply_ref_no' => $idupd, 'created_at' => $now]
    );
    return redirect('/reply');

  }
  public function reply(){
    $reporters = DB::table('str_form')
    ->join('usr', 'usr.idusr', '=', 'str_form.reporter_idusr')
    ->join('reporter', 'reporter.idreporter', '=', 'usr.reporter_idreporter')
    ->select('reporter.reporter_name', 'usr.idusr')
    ->where('str_form.str_stt', '=', '1')
    ->groupBy('reporter_name', 'idusr')->get();
    $user = Auth::id();
    return view('stronlines.replyform', compact('reporters', 'user'));
  }

  public function findreport(){
    $id = $_GET['id'];
    $data = DB::table('str_form')->where('reporter_idusr', '=', $id)->where('str_form.str_stt', '=', '1')->get();
    return response()->json($data);
  }
}
