<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ctr_upload;
// use App\Usr;
use Carbon;
use App\Reporter;
use App\Ctr_person;
use App\Ctr_legal;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CtrPersonImport;
use App\Exports\CtrLegalImport;

class CtrController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['save']]);
    }    

// CTR store admin page
  //   public function save(Request $request) {
  //     $file = $request->file('suspicious_transaction_describe_file');
  //     $gen_file_name = "ctr_".date("d-m-Y")."_".time()."_".$file->getClientOriginalName();
  //     $directory = "fileattaches/ctr_upload";
  //     $file->move($directory,$gen_file_name);
	//     $ctr = new Ctr_upload;
  //     $ctr->title = $request->suspicious_transaction_title;
  //     $ctr->path_file = $directory.'/'.$gen_file_name;
  //     $ctr->idusr = Auth::user()->idusr;
  //     $ctr->save();
  //     return redirect('ctrviews');
  // }

  // Boy make new code follow top
     public function save(Request $request) {
     

      // testing new code to import excel by Boy
      // $ctr = new Ctr_person;
      // Excel::import(new CtrPersonImport, $request->file('ctr_person')->store('ctrperson'));
      // Excel::import(new CtrLegalImport, $request->file('Ctr_legal')->store('ctrlegal'));
      // $idbank = Auth::user()->idusr;
      
      // $usrs -> reporter_idreporter;
       
          if(Input::hasFile('ctr_person')){  
              $path = Input::file('ctr_person')->getRealPath();  
              $data = Excel::load($path, function($reader) {  
              })->get(); 
              
              $this->validate($request,[
                  // ມັນຕ້ອງຖືກຕາມຊື່ ແລະ ຕາມຄໍລຳ   ຕ້ອງໄດ້ຂຽນຊື່ພາສາອັງກິດກຳກັບ
              // $this->validate($request,[
              //   'name'     => $row[0],
              //   'surname' => $row[2],
              //   'nationality' => $row[3],
              //   'birthday' => $row[4],
              //   'occupation' => $row[5],
              //   'phone_number' => $row[6],
              //   'identity_card' => $row[7],
              //   'nominee' => $row[8],
              //   'owner' => $row[9],
              //   'transaction_type' => $row[10],
              //   'transaction_date' => $row[11],
              //   'transaction_amount' => $row[12],
              //   'receiver_name' => $row[13],
              //   'destination_fi' => $row[14],
              //   'currency' => $row[15],
              
                'name' => 'required',
                'surname' => 'required',
                'nationality' => 'required',
                'birthday' => 'required',
                'occupation' => 'required',
                'phone_number' => 'required',
                'identity_card' => 'required',
                'nominee' => 'required',
                'owner' => 'required',
                'transaction_type' => 'required',
                'transaction_date' => 'required',
                'transaction_amount' => 'required',
                'receiver_name' => 'required',
                'destination_fi' => 'required',
                'currency' => 'required',
      ]);
            

              if(!empty($data) && $data->count()){  

                
                  foreach ($data as $key => $value) {  
                      $insert[] = [
                        // 'idctr_upload' => Ctr_upload::where(id)  //h neo dhai hai mun deung ao id sout thai khong table ctr_upload dai
                      //  'idctr_upload' => Ctr_upload::orderBy('ctr_id', 'desc')
                      // 'idreporter' => Auth::user()->idusr,
                      // $idbank = Auth::user()->idusr;
                      'idreporter' => Auth::user()->reporter_idreporter,

                      'name' => $value->name,
                      'surname' => $value->surname,
                      'nationality' => $value->nationality,
                      'birthday' => $value->birthday,
                      'occupation' => $value->occupation,
                      'phone_number' => $value->phone_number,
                      'identity_card' => $value->identity_card,
                      'nominee' => $value->nominee,
                      'owner' => $value->owner,
                      'transaction_type' => $value->transaction_type,
                      'transaction_date' => $value->transaction_date,
                      'transaction_amount' => $value->transaction_amount,
                      'receiver_name' => $value->receiver_name,
                      'destination_fi' => $value->destination_fi,
                      'currency' => $value->currency,
                    ];  
                  }  
                  if(!empty($insert)){  
                      DB::table('ctr_person')->insert($insert);  
                      // dd('Insert Record successfully.');  
                  }  
              }  
          }  
          // return back();  
          
          if(Input::hasFile('ctr_legal')){  
            $path2 = Input::file('ctr_legal')->getRealPath();  
            $data2 = Excel::load($path2, function($reader2) {  
            })->get();  
            if(!empty($data2) && $data2->count()){  
                foreach ($data2 as $key => $value) {  
                    $insert2[] = [
                    // 'idreporter' => $reporters['Auth::user()->idusr']->idreporter,

                    'idreporter' => Auth::user()->reporter_idreporter,

                    // 'idreporter' => Auth::user()->idusr,
                    'business_name' => $value->business_name,
                    'license_no' => $value->license_no,
                    'license_date' => $value->license_date,
                    'business_type' => $value->business_type,
                    'office_phone' => $value->office_phone,
                    'customer_name' => $value->customer_name,
                    'nationality' => $value->nationality,
                    'occupation' => $value->occupation,
                    'identity_card' => $value->identity_card,
                    'customer_phone' => $value->customer_phone,
                    'transaction_type' => $value->transaction_type,
                    'transaction_date' => $value->transaction_date,
                    'transaction_amount' => $value->transaction_amount,
                    'receiver_name' => $value->receiver_name,
                    'destination_fi' => $value->destination_fi,
                    'currency' => $value->currency,
                  ];  
                }  
                if(!empty($insert2)){  
                    DB::table('ctr_legal')->insert($insert2);  
                    // dd('Insert Record successfully.');  
                }  
            }  
        }  
       
      
        if(Input::hasFile('ctr_cover')){
            $file_cover = $request->file('ctr_cover');
            $gen_cover_name = "ctr_".date("d-m-Y")."_".time()."_".$file_cover->getClientOriginalName();

            // $file_person = $request->file('ctr_person');
            // $gen_person_name = "ctr_".date("d-m-Y")."_".time()."_".$file_person->getClientOriginalName();

            // $file_legal = $request->file('ctr_legal');
            // $gen_legal_name = "ctr_".date("d-m-Y")."_".time()."_".$file_legal->getClientOriginalName();

            $directory = "fileattaches/ctr_upload";
          
            $file_cover->move($directory,$gen_cover_name);
            // $file_person->move($directory,$gen_person_name);
            // $file_legal->move($directory,$gen_legal_name);
            $ctr = new Ctr_upload;
               $ctr_month = $request->ctr_month;
               $day = date('d');
            $today = $ctr_month . '-' . $day;
            $ctr->ctr_month = $today;
            $ctr->path_file = $directory.'/'.$gen_cover_name;
            // $ctr->path_person = $directory.'/'.$gen_person_name;
            // $ctr->path_legal = $directory.'/'.$gen_legal_name;
            $ctr->idusr = Auth::user()->idusr;

            if(Input::hasFile('ctr_person')){
              
              $file_person = $request->file('ctr_person');
              $gen_person_name = "ctr_".date("d-m-Y")."_".time()."_".$file_person->getClientOriginalName();
              $directory = "fileattaches/ctr_upload";
              $file_person->move($directory,$gen_person_name);
              $ctr->path_person = $directory.'/'.$gen_person_name;
              
            }
             
        if(Input::hasFile('ctr_legal')){

          $file_legal = $request->file('ctr_legal');
          $gen_legal_name = "ctr_".date("d-m-Y")."_".time()."_".$file_legal->getClientOriginalName();
          $directory = "fileattaches/ctr_upload";
          $file_legal->move($directory,$gen_legal_name);
          $ctr->path_legal = $directory.'/'.$gen_legal_name;
          
        }
    
            $ctr->save();





      //   $new_report = Ctr_upload::create([
      //     'idusr' => Auth::user()->idusr,
      //     // 'upload_date' => $request->upload_date,
      //     // 'title' => $request->title,
      //     'ctr_month' => $request->ctr_month,
      //     'path_file' => $request->file('ctr_cover')->move('fileattaches/ctr_upload'),
      // ]);
      return redirect()->back()->with('success', 'ສົ່ງເອກະສານສຳເລັດແລ້ວ!');
    } else {
        
        return redirect()->back()->with('error', 'ການສົ່ງບໍ່ສຳເລັດ!');
    }
      // $file = $request->file('ctr_cover');
      // $gen_file_name = "ctr_".date("d-m-Y")."_".time()."_".$file->getClientOriginalName();
      // $directory = "fileattaches/ctr_upload";
      // $file->move($directory,$gen_file_name);
	    // $ctr = new Ctr_upload;
      // // $ctr->title = $request->suspicious_transaction_title;
      // $ctr->ctr_month =$request->ctr_month;
      // $ctr->path_file = $directory.'/'.$gen_file_name;
      // $ctr->idusr = Auth::user()->idusr;
      // $ctr->save();
      return redirect()->back()->with('success', 'ສົ່ງເອກະສານສຳເລັດແລ້ວ!');
      // return redirect('ctrviews');
  }

    // search form of person

    public function ctrpersonstats(Request $request){
     

      if (Auth::user()->role_idrole == '1'){
        return view('stronlines.ctr_person_stats' );
      }

      else {
        return redirect('logout');
      }
      
    }

    //CTR personstats For result of searching
    public function ctrpersonsearch(Request $request){
      $search1 = $request->name;
      $search2 = $request->identity_card;
      $ctrpersonstats = DB::table('ctr_person')
      // ->join('usr', 'ctr_person.idreporter', '=', 'usr.reporter_idreporter')
      ->join('reporter','ctr_person.idreporter', '=', 'reporter.idreporter')
      ->select('ctr_person.*','reporter.reporter_name')
      // ->orderby('ctr_person.transaction_date', 'desc')

      // $ctrpersonstats = $test->chunk(10000);
      // // dd($ctrpersonstats);

            ->where(function ($query) use ($search1, $search2) {
              $query->where('ctr_person.name', 'like', '%'.$search1.'%')
                // ->orWhere('nationality.nationality_name', 'like', '%'.$search_txt.'%')
                // ->orWhere('amliostrno.amliostr_no', 'like', '%'.$search_txt.'%')
                ->Where('ctr_person.identity_card', 'like', '%'.$search2.'%');
            })
            // $data = User::paginate(5);
            // return view('users',compact('data'));
          ->orderBy('ctr_person.id', 'DESC')->paginate(15);
        
            

          if (Auth::user()->role_idrole == '1'){
            return view('stronlines.ctr_personsearch' , compact('ctrpersonstats'));
          }
    
          else {
            return redirect('logout');
          }

    }

    //Person Notification
    public function personnotify(){
      return 'Hello';
    }




// CTR legalstats
    public function ctrlegalstats(Request $request){
      
      if (Auth::user()->role_idrole == '1'){
        return view('stronlines.ctr_legal_stats');
      }

      else {
        return redirect('logout');
      }
    
    }


    public function ctrlegalsearch(Request $request){
      $search1 = $request->business_name;
      $search2 = $request->license_no;
      $ctrlegalstats = DB::table('ctr_legal')
      // ->join('usr', 'ctr_legal.idreporter', '=', 'usr.idusr')
      ->join('reporter','ctr_legal.idreporter', '=', 'reporter.idreporter')
      ->select('ctr_legal.*', 'reporter.reporter_name')
      ->where(function ($query) use ($search1, $search2) {
        $query->where('ctr_legal.business_name', 'like', '%'.$search1.'%')
          ->Where('ctr_legal.license_no', 'like', '%'.$search2.'%');
      })
      ->orderby('ctr_legal.transaction_date', 'desc')->paginate(15);
        
            

      if (Auth::user()->role_idrole == '1'){
        return view('stronlines.ctr_legalsearch' , compact('ctrlegalstats'));
      }

      else {
        return redirect('logout');
      }
    }

// CTR all search statistic

    public function CtrSearchForm()
    {
      $reporters = Reporter::all();
       
      return view('stronlines.ctr_statssearch', compact('reporters','ctr_person_trans','ctr_person_trans_kip','ctr_person_amount_kip','ctr_person_trans_bath','ctr_person_amount_bath','ctr_person_trans_dollar','ctr_person_amount_dollar','ctr_person_trans_yuan','ctr_person_amount_yuan','ctr_person_trans_dong','ctr_person_amount_dong',
          'legal_trans','legal_amount_dong','legal_amount_yuan','legal_amount_dollar','legal_amount_bath','legal_amount_kip', 'legal_trans_kip','legal_trans_bath','legal_trans_dollar','legal_trans_yuan','legal_trans_dong'));
     
        
    }

    public function ctrstats(Request $request){
        $reporters = Reporter::all();

       
// get idreporter
if(isset($request->reporter)){
  $reporter = $request->input('reporter');
  // dd($reporter);
  // $selectValue = $request->input('subscription');

}else{
  $reporter = null;
}

// if ($request->reporter != null) {
//   $users = $users->where('idreporter', $request->idreporter);
// }

  
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

      if($from_date != null && $to_date != null ){
      
      if($reporter == 'all_re'){

      
      // $bank = DB::table('ctr_legal')->select('idreporter')->groupBy('idreporter')->get();
      $p_all_trans = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->count();
      $pk_trans = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','=','ກີບ')->count();
      $pk_amount = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','=','ກີບ')->sum('transaction_amount');

      $pb_trans = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ບາດ')->count();
      $pb_amount = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ບາດ')->sum('transaction_amount');
      
      $pdl_trans = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ໂດລາ')->count();
      $pdl_amount = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ໂດລາ')->sum('transaction_amount');

      $py_trans = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ຢວນ')->count();
      $py_amount = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ຢວນ')->sum('transaction_amount');

      $pd_trans  = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ດົງ')->count();
      $pd_amount = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ດົງ')->sum('transaction_amount');
      // For Legal Person

      $l_all_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->count();
      $lk_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ກີບ')->count();
      $lk_amount = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ກີບ')->sum('transaction_amount');

      $lb_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ບາດ')->count();
      $lb_amount = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ບາດ')->sum('transaction_amount');

      $ldl_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ໂດລາ')->count();
      $ldl_amount = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ໂດລາ')->sum('transaction_amount');

      $ly_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ຢວນ')->count();
      $ly_amount = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ຢວນ')->sum('transaction_amount');

      $ld_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ດົງ')->count();
      $ld_amount = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ດົງ')->sum('transaction_amount');

      // if (Auth::user()->role_idrole == '1'){
      //   return view('stronlines.ctr_statsall', compact('from_date','to_date','reporters',''));
      // }
    }else{
      
        // $bank = DB::table('ctr_legal')->select('idreporter')->groupBy('idreporter')->get();
        $p_all_trans = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where('idreporter',$reporter)->count();
        // kip
        $pk_trans = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ກີບ'] , ['idreporter',$reporter]
          ])->count();
        $pk_amount = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ກີບ'] , ['idreporter',$reporter]
          ])->sum('transaction_amount');
          // bath
        $pb_trans = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ບາດ'] , ['idreporter',$reporter]
          ])->count();
        $pb_amount = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ບາດ'] , ['idreporter',$reporter]
          ])->sum('transaction_amount');
          // dollar
        $pdl_trans = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ໂດລາ'] , ['idreporter',$reporter]
          ])->count();
        $pdl_amount = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ໂດລາ'] , ['idreporter',$reporter]
          ])->sum('transaction_amount');
          // yuan
        $py_trans = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ຢວນ'] , ['idreporter',$reporter]
          ])->count();
        $py_amount = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ຢວນ'] , ['idreporter',$reporter]
          ])->sum('transaction_amount');
          // Vietnam Dong
        $pd_trans  = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ດົງ'] , ['idreporter',$reporter]
          ])->count();
        $pd_amount = DB::table('ctr_person')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ດົງ'] , ['idreporter',$reporter]
          ])->sum('transaction_amount');
        // For Legal Person
  
        $l_all_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('idreporter',$reporter)->count();
        // Lao Kip
        $lk_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where('currency','ກີບ')->where([
          ['currency','=','ກີບ'] , ['idreporter',$reporter]
          ])->count();
        $lk_amount = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ກີບ'] , ['idreporter',$reporter]
          ])->sum('transaction_amount');
          // bath
        $lb_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ບາດ'] , ['idreporter',$reporter]
          ])->count();
        $lb_amount = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ບາດ'] , ['idreporter',$reporter]
          ])->sum('transaction_amount');
          // dollar
        $ldl_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ໂດລາ'] , ['idreporter',$reporter]
          ])->count();
        $ldl_amount = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ໂດລາ'] , ['idreporter',$reporter]
          ])->sum('transaction_amount');
          // china yuan
        $ly_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ຢວນ'] , ['idreporter',$reporter]
          ])->count();
        $ly_amount = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ຢວນ'] , ['idreporter',$reporter]
          ])->sum('transaction_amount');
          // vietnam dong 
        $ld_trans = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ດົງ'] , ['idreporter',$reporter]
          ])->count();
        $ld_amount = DB::table('ctr_legal')->whereBetween('transaction_date',[$from_date, $to_date])->where([
          ['currency','=','ດົງ'] , ['idreporter',$reporter]
          ])->sum('transaction_amount');
  

        // if (Auth::user()->role_idrole == '1'){
        //   return view('stronlines.ctr_statsall', compact('from_date','to_date','reporters','ctr_person_trans','ctr_person_trans_kip','ctr_person_amount_kip','ctr_person_trans_bath','ctr_person_amount_bath','ctr_person_trans_dollar','ctr_person_amount_dollar','ctr_person_trans_yuan','ctr_person_amount_yuan','ctr_person_trans_dong','ctr_person_amount_dong',
        //     'legal_trans','legal_amount_dong','legal_amount_yuan','legal_amount_dollar','legal_amount_bath','legal_amount_kip', 'legal_trans_kip','legal_trans_bath','legal_trans_dollar','legal_trans_yuan','legal_trans_dong'));
        // }
    }

    if (Auth::user()->role_idrole == '1'){
      return view('stronlines.ctr_stats', compact('from_date','to_date','reporters','p_all_trans','pk_trans','pk_amount','pb_trans', 'pb_amount','pdl_trans','pdl_amount','py_trans','py_amount','pd_trans','pd_amount',
    'l_all_trans', 'lk_trans', 'lk_amount','lb_trans','lb_amount','ldl_trans','ldl_amount','ly_trans','ly_amount','ld_trans','ld_amount'));
    }
  }
      //  $from_date  = '20140101' ;
      //  $to_date  = '20230202'; 

      // $kips = Ctr_person::where('currency', 'ບາດ')->whereBetween('transaction_date',[$from_date, $to_date])->sum('transaction_amount');
      // else {
      //   return redirect('logout');
      // }
      // return view('stronlines.ctr_stats', compact('kips', 'reporters','ctrstats_search'));
   
  }


    // CTR Stats Search
//     public function search(Request $request) { 
//       $reporters = Reporter::all();

//       if(isset($request->sdate)){
//         $from_date = $request->sdate;
//     }else{
//         $from_date = null;
//     }
    
//     if(isset($request->edate)){
//         $to_date = $request->edate;
//     }else{
//         $to_date = null;
//     }
//       // dd($from_date,$from_date);

//       // $ctr_person = Ctr_person::all();
//       // $ctr_legal = Ctr_legal::all();
//       // $search_txt = $request->search_txt;
//       if($from_date != null && $to_date != null){
//         // if($request->search_txt){
//           // $stralls = '1';

//         //  $ctrstats_search = DB::table('ctr_person')
//         //  ->join('usr', 'ctr_person.idreporter', '=', 'usr.idusr')
//         //  ->join('reporter','usr.reporter_idreporter', '=', 'reporter.idreporter')
//         //  ->select('ctr_person.*','reporter.reporter_name')->get();

//       // DB::table('ctr_legal')
//       // ->join('usr', 'ctr_legal.idreporter', '=', 'usr.idusr')
//       // ->join('reporter','usr.reporter_idreporter', '=', 'reporter.idreporter')
//       // ->select('ctr_legal.*', 'reporter.reporter_name')
//       // ->whereBetween('transaction_date',[$from_date, $to_date])->get();
       
//       $kips = Ctr_person::where('currency', 'ກີບ')->whereBetween('transaction_date',[$from_date, $to_date])->sum('transaction_amount');
      
    
// //     $ctrstats_search = DB::table('ctr_legal')
// // ->whereBetween('transaction_date', [$from_date, $to_date])
// // ->selectRaw('sum(transaction_amount)')
// // ->selectRaw('id')
// // ->groupBy('id')
// // ->get(); 

//       // $ctr_person_amount_bath = DB::table('ctr_person')->where('currency','ບາດ')->sum('transaction_amount');
//       // $ctr_person_trans_dollar = DB::table('ctr_person')->where('currency','ໂດລາ')->count();
            
            
//           // ->orderBy('str_form.created_at', 'DESC')
//           // ->get();
//         // }else{
//         //   echo 'No Result';
//         //   }
      
//         return view('stronlines.ctr_stats', compact('kips','reporters','ctrstats_search','ctr_person_amount_bath', 'ctr_person_trans_dollar'));
//         // return redirect()->back();
//       }
//       }




// Ctr all inbox admin page
    public function ctrshow(){
        $ctrshow = DB::table('ctr_upload')
        ->join('usr', 'ctr_upload.idusr', '=', 'usr.idusr')
        ->join('reporter','usr.reporter_idreporter', '=', 'reporter.idreporter')
        ->select('ctr_upload.*', 'usr.username','reporter.reporter_name')
        ->orderby('ctr_upload.ctr_id', 'desc')->get();
        
        if (Auth::user()->role_idrole == '1'){
          return view('stronlines.ctrall' , compact('ctrshow', 'ssdate', 'sedate'));
        }

        else {
          return redirect('logout');
        }
        
      }

      // Ctr all user sent User page
      public function ctrshow_rp(){
        $ctrshow_rp = DB::table('ctr_upload')
        ->select('ctr_upload.*')
        ->where('idusr', Auth::user()->idusr)
        ->orderby('ctr_upload.ctr_id', 'desc')->get();
        
        if (Auth::user()->role_idrole == '2'){
          return view('stronlines.ctrall_rp' , compact('ctrshow_rp', 'ssdate', 'sedate'));
        }

        else {
          return redirect('logout');
        }
        
      }
}