<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests;
// use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\StrForm; // Added by Youi 20171222
use App\AmountCurrency; // Added by Youi 20180216
use App\User;
use App\Responsibility;
use App\Amliostrno;

class pwController extends Controller
{
  public function pw(){
    $pw = Hash::make('12345');
	dd($pw);
  }



}
