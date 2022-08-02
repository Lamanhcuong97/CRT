<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\CommentForm;
use App\Usr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function add(Request $request){
    $save = new CommentForm;
    $save->comment_form_date=$request->comment_form_date;
    $save->comment_form_detail=$request->comment_form_detail;
    $save->comment_form_iduser=Auth::user()->idusr;
    $save->save();

    return view('comment.create'); 
  }

  
  public function commentshow(){
    $commentreports = DB::table('comment_form')
    ->join('usr', 'comment_form.comment_form_iduser', '=', 'usr.idusr')
    ->select('comment_form.*', 'usr.username')
    ->orderby('comment_form.comment_form_id', 'desc')->get();
  
    if (Auth::user()->role_idrole == '1'){
    return view('comment.views' , compact('commentreports', 'ssdate', 'sedate'));
    }
    else{
      return view('/index');
    }
  }

  



}
