<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Doc_upload;
use DB;

class DocController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['save']]);
    }    
    public function save(Request $request) {
        $file = $request->file('document_file');
        $gen_file_name = "doc_".date("d-m-Y")."_".time()."_".$file->getClientOriginalName();
        $directory = "fileattaches/doc_upload";
        $file->move($directory,$gen_file_name);
        $doc = new Doc_upload;
        $doc->title = $request->document_title;
        $doc->upload_date = date("Y-m-d");
        $doc->path_file = $directory.'/'.$gen_file_name;
        $doc->idusr = Auth::user()->idusr;
        $doc->save();
        return redirect('docviews');
    }


    public function docshow(){
        $docshow = DB::table('doc_upload')
        ->join('usr', 'doc_upload.idusr', '=', 'usr.idusr')
        ->select('doc_upload.*', 'usr.username')
        ->orderby('doc_upload.doc_id', 'desc')->get();
    
        if (Auth::user()->role_idrole == '1'){
          return view('stronlines.docall' , compact('docshow', 'ssdate', 'sedate'));
        }
        else {
        return redirect('logout');
        }
        
      }
}
