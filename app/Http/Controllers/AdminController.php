<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use App\Usr;
use App\Role;
use App\Reporter;
use App\Nationality;
use App\Currency;
use App\ReporterType;
use App\Bankgroup;
use App\Province;
use App\District;
use App\Village;

use App\FirForm;
use App\StrForm;
use App\Strreply;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  } 
  
  public function admin(){
    if (Auth::user()->role_idrole == '1'){
      return redirect()->action('AdminController@admin_user');
    }
    else {
      return redirect('logout');
    }
    
  }

  // ---------------------- user ------------------------ //
  public function admin_user(){
    $Users = Usr::with('Role')->with('Report')->get();
    $User_roles = Role::all();
    $User_reports = Reporter::all();
    // dd(Auth::user()->role_idrole);
    if (Auth::user()->role_idrole == '1'){
      return view('admin.admin')->with('Users',$Users)
    ->with('User_roles',$User_roles)->with('User_reports',$User_reports);
    }
    else {
      return redirect('logout');
    }
    
  }

  public function admin_user_add(Request $request){
    dd($request->all());
    try {
      $Check_user = Usr::where('username', $request->input('username'))->firstOrFail();
      return redirect('/admin/user')->with('error', 'ການເພີ່ມຂໍ້ມູນຜູ້ໃຊ້ ບໍ່ສຳເລັດ, ຂໍ້ມູນ ຊື່ເຂົ້າໃຊ້ລະບົບ ມີແລ້ວ');
    } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {  
      
    }
      $Usr = new Usr;
      $Usr->username = $request->input('username');
      $Usr->password = Hash::make($request->input('password'));
      $Usr->usr_name = $request->input('usr_name');
      $Usr->usr_surname = $request->input('usr_surname');
      $Usr->usr_email = $request->input('usr_email');
      $Usr->usr_tel = $request->input('usr_tel');
      $Usr->usr_assigned = date("Y-m-d H:i:s");
      //$Usr->usr_last_login = "DEFAULT";
      $Usr->role_idrole = $request->input('role_idrole');
      $Usr->reporter_idreporter = $request->input('reporter_idreporter');
      $Usr->save();
     
      return redirect('/admin/user')->with('status', 'ການເພີ່ມຂໍ້ມູນຜູ້ໃຊ້ ສຳເລັດ');
  }

  public function admin_user_edit(Request $request){
    $User_edit = Usr::find($request->id);
    $User_roles = Role::all();
    $User_reports = Reporter::all();
    return view('admin.admin')->with('User_edit',$User_edit)
    ->with('User_roles',$User_roles)->with('User_reports',$User_reports)
    ->with('Get_edit',$request->id);
  }

  public function admin_user_edit_add(Request $request){
    $Usr_edit = Usr::find($request->input('idusr'));
    $Usr_edit->username = $request->input('username');
    if($request->input('password') != ""){
      $Usr_edit->password = Hash::make($request->input('password'));
    }
    $Usr_edit->usr_name = $request->input('usr_name');
    $Usr_edit->usr_surname = $request->input('usr_surname');
    $Usr_edit->usr_email = $request->input('usr_email');
    $Usr_edit->usr_tel = $request->input('usr_tel');
    //$Usr_edit->usr_assigned = date("Y-m-d H:i:s");
    //$Usr->usr_last_login = "DEFAULT";
    $Usr_edit->role_idrole = $request->input('role_idrole');
    $Usr_edit->reporter_idreporter = $request->input('reporter_idreporter');
    $Usr_edit->save();
    return redirect('/admin/user')->with('edit', 'ການແກ້ໄຂຂໍ້ມູນຜູ້ໃຊ້ ສຳເລັດ');
  }

  public function admin_user_del(Request $request){
    try {
      $Usr_fir = FirForm::where('idfir_form', $request->input('idusr'))->firstOrFail();
      return redirect('/admin/user')->with('error', 'ການລຶບຂໍ້ມູນຜູ້ໃຊ້ ບໍ່ສຳເລັດ, ຜູ້ໃຊ້ໄດ້ລາຍງານ ຫຼື ຕອບຮັບລາຍງານແລ້ວ');
    } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {  
      try {
        $Usr_str = StrForm::where('idstr_form', $request->input('idusr'))->firstOrFail();
        return redirect('/admin/user')->with('error', 'ການລຶບຂໍ້ມູນຜູ້ໃຊ້ ບໍ່ສຳເລັດ, ຜູ້ໃຊ້ໄດ້ລາຍງານ ຫຼື ຕອບຮັບລາຍງານແລ້ວ');
      }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {  
        try {
          $Usr_rep = Strreply::where('id', $request->input('idusr'))->firstOrFail();
          return redirect('/admin/user')->with('error', 'ການລຶບຂໍ້ມູນຜູ້ໃຊ້ ບໍ່ສຳເລັດ, ຜູ້ໃຊ້ໄດ້ລາຍງານ ຫຼື ຕອບຮັບລາຍງານແລ້ວ');
        }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {  
          $Usr_del = Usr::find($request->input('idusr'));
          $Usr_del->delete();
          return redirect('/admin/user')->with('del', 'ການລຶບຂໍ້ມູນຜູ້ໃຊ້ ສຳເລັດ');
        }
      }
    }
    
    
  }
  // // ---------------------- nat ------------------------ //
  public function admin_nat(){
    $Nats = Nationality::all();
    if (Auth::user()->role_idrole == '1'){
      return view('admin.admin_nat')->with('Nats',$Nats);
    }
    else{
      return redirect('logout');
    }
    
  }

  public function admin_nat_add(Request $request){
    try {
      $Check_nat = Nationality::where('nationality_code', $request->input('nationality_code'))->firstOrFail();
      return redirect('/admin/nat')->with('error', 'ການເພີ່ມຂໍ້ມູນປະເທດ ບໍ່ສຳເລັດ, ຂໍ້ມູນ ລະຫັດປະເທດ ມີແລ້ວ');
    } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {  
      
    }
      $Nat = new Nationality;
      $Nat->nationality_code = $request->input('nationality_code');
      $Nat->nationality_name = $request->input('nationality_name');
      $Nat->save();
      return redirect('/admin/nat')->with('status', 'ການເພີ່ມຂໍ້ມູນປະເທດ ສຳເລັດ');
  }

  public function admin_nat_edit(Request $request){
    $Nat_edit = Nationality::find($request->id);
    return view('admin.admin_nat')->with('Nat_edit',$Nat_edit)
    ->with('Get_edit',$request->id);
  }

  public function admin_nat_edit_add(Request $request){
    $Nat_edit = Nationality::find($request->input('idnationality'));
    $Nat_edit->nationality_code = $request->input('nationality_code');
    $Nat_edit->nationality_name = $request->input('nationality_name');
    $Nat_edit->save();
    return redirect('/admin/nat')->with('edit', 'ການແກ້ໄຂຂໍ້ມູນປະເທດ ສຳເລັດ');
  }

  public function admin_nat_del(Request $request){
    $Nat_del = Nationality::find($request->input('idnationality'));
    $Nat_del->delete();
    return redirect('/admin/nat')->with('del', 'ການລຶບຂໍ້ມູນປະເທດ ສຳເລັດ');
  }

   // ---------------------- curr ------------------------ //

   public function admin_curr(){
    $Currs = Currency::all();
    if (Auth::user()->role_idrole == '1'){
      return view('admin.admin_curr')->with('Currs',$Currs);
    }
    else{
      return redirect('logout');
    }
    
    
  }

  public function admin_curr_add(Request $request){
    try {
      $Check_curr = Currency::where('currency_ini_e', $request->input('currency_ini_e'))->firstOrFail();
      return redirect('/admin/curr')->with('error', 'ການເພີ່ມຂໍ້ມູນສະກຸນເງິນ ບໍ່ສຳເລັດ, ຂໍ້ມູນ ສະກຸນເງິນ ມີແລ້ວ');
    } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {  
      
    }
      $Curr = new Currency;
      $Curr->currency_l = $request->input('currency_l');
      $Curr->currency_e = $request->input('currency_e');
      $Curr->currency_ini_l = $request->input('currency_ini_l');
      $Curr->currency_ini_e = $request->input('currency_ini_e');
      $Curr->save();
      return redirect('/admin/curr')->with('status', 'ການເພີ່ມຂໍ້ມູນສະກຸນເງິນ ສຳເລັດ');
  }

  public function admin_curr_edit(Request $request){
    $Curr_edit = Currency::find($request->id);
    return view('admin.admin_curr')->with('Curr_edit',$Curr_edit)
    ->with('Get_edit',$request->id);
  }

  public function admin_curr_edit_add(Request $request){
    $Curr_edit = Currency::find($request->input('idcurrency'));
    $Curr_edit->currency_l = $request->input('currency_l');
    $Curr_edit->currency_e = $request->input('currency_e');
    $Curr_edit->currency_ini_l = $request->input('currency_ini_l');
    $Curr_edit->currency_ini_e = $request->input('currency_ini_e');
    $Curr_edit->save();
    return redirect('/admin/curr')->with('edit', 'ການແກ້ໄຂຂໍ້ມູນສະກຸນເງິນ ສຳເລັດ');
  }

  public function admin_curr_del(Request $request){
    $Curr_del = Currency::find($request->input('idcurrency'));
    $Curr_del->delete();
    return redirect('/admin/curr')->with('del', 'ການລຶບຂໍ້ມູນສະກຸນເງິນ ສຳເລັດ');
  }

    // ---------------------- rep ------------------------ //

    public function admin_rep(){
      $Reps = Reporter::with('Report_type')->with('Bank_group')->get();
      $Rep_types = ReporterType::all();
      $Rep_groups = Bankgroup::all();
      if (Auth::user()->role_idrole == '1'){
        return view('admin.admin_rep')->with('Reps',$Reps)
        ->with('Rep_types',$Rep_types)->with('Rep_groups',$Rep_groups);
      }
      else {
        return redirect('logout');
      }
     
    }

    public function admin_rep_add(Request $request){
      try {
        $Check_rep = Reporter::where('reporter_name', $request->input('reporter_name'))->firstOrFail();
        return redirect('/admin/rep')->with('error', 'ການເພີ່ມຂໍ້ມູນຜູ້ລາຍງານ ບໍ່ສຳເລັດ, ຂໍ້ມູນ ຊື່ຜູ້ລາຍງານ ມີແລ້ວ');
      } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {  
        
      }
        $Rep = new Reporter;
        $Rep->reporter_name = $request->input('reporter_name');
        $Rep->reporter_type_idreporter_type = $request->input('reporter_type_idreporter_type');
        $Rep->bank_group_idbank_group = $request->input('bank_group_idbank_group');
        $Rep->save();
        return redirect('/admin/rep')->with('status', 'ການເພີ່ມຂໍ້ມູນຜູ້ລາຍງານ ສຳເລັດ');
    }

    public function admin_rep_edit(Request $request){
      $Rep_edit = Reporter::find($request->id);
      $Rep_types = ReporterType::all();
      $Rep_groups = Bankgroup::all();
      return view('admin.admin_rep')->with('Rep_edit',$Rep_edit)
      ->with('Rep_types',$Rep_types)->with('Rep_groups',$Rep_groups)
      ->with('Get_edit',$request->id);
    }

    public function admin_rep_edit_add(Request $request){
      $Rep_edit = Reporter::find($request->input('idreporter'));
      $Rep_edit->reporter_name = $request->input('reporter_name');
      $Rep_edit->reporter_type_idreporter_type = $request->input('reporter_type_idreporter_type');
      $Rep_edit->bank_group_idbank_group = $request->input('bank_group_idbank_group');
      $Rep_edit->save();
      return redirect('/admin/rep')->with('edit', 'ການແກ້ໄຂຂໍ້ມູນຜູ້ລາຍງານ ສຳເລັດ');
    }

    public function admin_rep_del(Request $request){
      $Rep_del = Reporter::find($request->input('idreporter'));
      $Rep_del->delete();
      return redirect('/admin/rep')->with('del', 'ການລຶບຂໍ້ມູນຜູ້ລາຍງານ ສຳເລັດ');
    }

      // ---------------------- reptype ------------------------ //

    public function admin_reptype(){
      $Reptypes = ReporterType::all();
      if (Auth::user()->role_idrole == '1'){
        return view('admin.admin_reptype')->with('Reptypes',$Reptypes);
      }
      else {
        return redirect('logout');
      }
      
    }

    public function admin_reptype_add(Request $request){
      try {
        $Check_reptype = ReporterType::where('reporter_type_title', $request->input('reporter_type_title'))->firstOrFail();
        return redirect('/admin/reptype')->with('error', 'ການເພີ່ມຂໍ້ມູນປະເພດຜູ້ລາຍງານ ບໍ່ສຳເລັດ, ຂໍ້ມູນ ຊື່ປະເພດຜູ້ລາຍງານ ມີແລ້ວ');
      } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {  
        
      }
        $Reptype = new ReporterType;
        $Reptype->reporter_type_title = $request->input('reporter_type_title');
        $Reptype->save();
        return redirect('/admin/reptype')->with('status', 'ການເພີ່ມຂໍ້ມູນປະເພດຜູ້ລາຍງານ ສຳເລັດ');
    }

    public function admin_reptype_edit(Request $request){
      $Reptype_edit = ReporterType::find($request->id);
      return view('admin.admin_reptype')->with('Reptype_edit',$Reptype_edit)
      ->with('Get_edit',$request->id);
    }

    public function admin_reptype_edit_add(Request $request){
      $Reptype_edit = ReporterType::find($request->input('idreporter_type'));
      $Reptype_edit->reporter_type_title = $request->input('reporter_type_title');
      $Reptype_edit->save();
      return redirect('/admin/reptype')->with('edit', 'ການແກ້ໄຂຂໍ້ມູນປະເພດຜູ້ລາຍງານ ສຳເລັດ');
    }

    public function admin_reptype_del(Request $request){
      $Reptype_del = ReporterType::find($request->input('idreporter_type'));
      $Reptype_del->delete();
      return redirect('/admin/reptype')->with('del', 'ການລຶບຂໍ້ມູນປະເພດຜູ້ລາຍງານ ສຳເລັດ');
    }
    // ---------------------- province ------------------------ //

    public function admin_province(){
      $Provinces = Province::all();
      if (Auth::user()->role_idrole == '1'){
      return view('admin.admin_province')->with('Provinces',$Provinces);
      }
      else{
        return redirect('logout');
      }
    }

    public function admin_province_add(Request $request){
      /*try {
        $Check_province = Province::where('province_code', $request->input('province_code'))->firstOrFail();
        return redirect('/admin/province')->with('error', 'ການເພີ່ມຂໍ້ມູນແຂວງ ບໍ່ສຳເລັດ, ຂໍ້ມູນ ລະຫັດແຂວງ ມີແລ້ວ');
      } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {  
        
      }*/
        $Province = new Province;
        //$Province->province_code = $request->input('province_code');
        $Province->province_name = $request->input('province_name');
        $Province->province_ini_e = $request->input('province_ini_e');
        $Province->save();
        return redirect('/admin/province')->with('status', 'ການເພີ່ມຂໍ້ມູນແຂວງ ສຳເລັດ');
    }

    public function admin_province_edit(Request $request){
      $Province_edit = Province::find($request->id);
      return view('admin.admin_province')->with('Province_edit',$Province_edit)
      ->with('Get_edit',$request->id);
    }

    public function admin_province_edit_add(Request $request){
      $Province_edit = Province::find($request->input('idprovince'));
      //$Province_edit->province_code = $request->input('province_code');
      $Province_edit->province_name = $request->input('province_name');
      $Province_edit->province_ini_e = $request->input('province_ini_e');
      $Province_edit->save();
      return redirect('/admin/province')->with('edit', 'ການແກ້ໄຂຂໍ້ມູນແຂວງ ສຳເລັດ');
    }

    public function admin_province_del(Request $request){
      $Province_del = Province::find($request->input('idprovince'));
      $Province_del->delete();
      return redirect('/admin/province')->with('del', 'ການລຶບຂໍ້ມູນແຂວງ ສຳເລັດ');
    }
      // ---------------------- district ------------------------ //

    public function admin_district(){
      $Districts = District::with('Province')->get();
      $Provinces = Province::all();
      if (Auth::user()->role_idrole == '1'){
      return view('admin.admin_district')->with('Districts',$Districts)
      ->with('Provinces',$Provinces);
      }
      else{
        return redirect('logout');
      }
    }

    public function admin_district_add(Request $request){
      /*try {
        $Check_province = District::where('district_code', $request->input('district_code'))->firstOrFail();
        return redirect('/admin/district')->with('error', 'ການເພີ່ມຂໍ້ມູນເມືອງ ບໍ່ສຳເລັດ, ຂໍ້ມູນ ລະຫັດເມືອງ ມີແລ້ວ');
      } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {  
        
      }*/
        $District = new District;
        $District->district_name = $request->input('district_name');
        //$District->district_code = $request->input('district_code');
        $District->province_idprovince = $request->input('province_idprovince');
        $District->save();
        return redirect('/admin/district')->with('status', 'ການເພີ່ມຂໍ້ມູນເມືອງ ສຳເລັດ');
    }

    public function admin_district_edit(Request $request){
      $District_edit = District::find($request->id);
      $Provinces = Province::all();
      return view('admin.admin_district')->with('District_edit',$District_edit)
      ->with('Provinces',$Provinces)->with('Get_edit',$request->id);
    }

    public function admin_district_edit_add(Request $request){
      $District_edit = District::find($request->input('iddistrict'));
      $District_edit->district_name = $request->input('district_name');
      //$District_edit->district_code = $request->input('district_code');
      $District_edit->province_idprovince = $request->input('province_idprovince');
      $District_edit->save();
      return redirect('/admin/district')->with('edit', 'ການແກ້ໄຂຂໍ້ມູນເມືອງ ສຳເລັດ');
    }

    public function admin_district_del(Request $request){
      $District_del = District::find($request->input('iddistrict'));
      $District_del->delete();
      return redirect('/admin/district')->with('del', 'ການລຶບຂໍ້ມູນເມືອງ ສຳເລັດ');
    }
    // ---------------------- village ------------------------ //

    public function admin_village(){
      $Villages = Village::with('District')->paginate(2000);
      $Districts = District::all();
      if (Auth::user()->role_idrole == '1'){
      return view('admin.admin_village')->with('Villages',$Villages)
      ->with('Districts',$Districts);
      }
      else{
        return redirect('logout');
      }
    }

    public function admin_village_add(Request $request){
      /*try {
        $Check_village = Village::where('village_code', $request->input('village_code'))->firstOrFail();
        return redirect('/admin/village')->with('error', 'ການເພີ່ມຂໍ້ມູນບ້ານ ບໍ່ສຳເລັດ, ຂໍ້ມູນ ລະຫັດບ້ານ ມີແລ້ວ');
      } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {  
        
      }*/
        $Village = new Village;
        $Village->village_name = $request->input('village_name');
        //$Village->village_code = $request->input('village_code');
        $Village->district_iddistrict = $request->input('district_iddistrict');
        $Village->save();
        return redirect('/admin/village')->with('status', 'ການເພີ່ມຂໍ້ມູນບ້ານ ສຳເລັດ');
    }

    public function admin_village_edit(Request $request){
      $Village_edit = Village::find($request->id);
      $Districts = District::all();
      return view('admin.admin_village')->with('Village_edit',$Village_edit)
      ->with('Districts',$Districts)->with('Get_edit',$request->id);
    }

    public function admin_village_edit_add(Request $request){
      $Village_edit = Village::find($request->input('idvillage'));
      $Village_edit->village_name = $request->input('village_name');
      //$Village_edit->village_code = $request->input('village_code');
      $Village_edit->district_iddistrict = $request->input('district_iddistrict');
      $Village_edit->save();
      return redirect('/admin/village')->with('edit', 'ການແກ້ໄຂຂໍ້ມູນບ້ານ ສຳເລັດ');
    }

    public function admin_village_del(Request $request){
      $Village_del = Village::find($request->input('idvillage'));
      $Village_del->delete();
      return redirect('/admin/village')->with('del', 'ການລຶບຂໍ້ມູນບ້ານ ສຳເລັດ');
    }

}
