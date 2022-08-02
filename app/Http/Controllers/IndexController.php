<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Usr;
use App\Role;

class IndexController extends Controller
{

  public function login(Request $request){

    $username = $request->username;
    $password = $request->password;

    if (Auth::attempt(['username' => $username, 'password' => $password])) {
    
        if (Auth::user()->role_idrole==4) {
          return redirect('/addcbr');
        }

        if (Auth::user()->role_idrole==3) {
          return redirect('/viewcbr');
        }

		if (Auth::user()->role_idrole==5) {
          return view('Adhoc.indexLa');
        }

          /*$request->session()->put('UserID', $login->idusr);
          $request->session()->put('Username', $login->usr_name);
          $request->session()->put('Surename', $login->usr_surename);
          $request->session()->put('Reporter', $login->reporter_idreporter);
          $request->session()->put('Role', $login->getRelation('Role')->idrole);*/

      return redirect('/');
    }else{
      return redirect('/index')->with('error', 'ຊື່ຜູ້ໃຊ້ ຫລື ລະຫັດຜ່ານ ບໍ່ຖືກຕ້ອງ');
    }
  }

  public function reset(Request $request){
    
    $password = $request->password;
    $newpass1 = $request->newpass1;
    $newpass2 = $request->newpass2;

    $User = Usr::find(Auth::id());

    if (Hash::check($password, $User->password)) {
      if($newpass1 == $newpass2){
        $User->password = Hash::make($newpass1);
        $User->save();
        Auth::logout();
        return redirect('/index')->with('status', 'ການປ່ຽນລະຫັດຜ່ານ ສຳເລັດ, ກະລູນາເຂົ້າລະບົບໃໝ່');
      }else{
        return redirect('/reset')->with('error', 'ລະຫັດຜ່ານໃໝ່ຢັ້ງຢືນ ບໍຄືກັນ');
      }
    }else{
      return redirect('/reset')->with('error', 'ລະຫັດຜ່ານປະຈຸບັນ ບໍ່ຖືກຕ້ອງ');
    }
  }

  public function resetAdhoc(Request $request){

    
    $password = $request->password;
    $newpass1 = $request->newpass1;
    $newpass2 = $request->newpass2;

    $User = Usr::find(Auth::id());

    if (Hash::check($password, $User->password)) {
      if($newpass1 == $newpass2){
        $User->password = Hash::make($newpass1);
        $User->save();
        Auth::logout();
        return redirect('/index')->with('status', 'Your password has been changed successfully, Please Re-login');
      }else{
        return redirect('/resetPassword')->with('error', 'Password does not match');
      }
    }else{
      return redirect('/resetPassword')->with('error', 'Your current password is incorrect');
    }
  }




  public function logout(){
    Auth::logout();
    return redirect('/index');
  }
}
