<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DateTime;

class StrChartsController extends Controller
{
  public function __construct(){
    $this->middleware('auth', ['except'=>['chartshow']]);
  }

  public function chartshow(){

    $mode = 1; $smnth = 1; $syear = 2018; $emnth = 12; $eyear = 2018; $bgyear = 2005; $notfound = 'ເລືອກລາຍລະອຽດກ່ອນ'; $numcols = 0; $modename = '';
    $label2 = "'ເດືອນ'";
    $datasets = '[0, 10, 5, 2, 20, 30, 45, 50]';
    $contents = '["ມັງກອນ", "ກຸມພາ", "ມີນາ", "ເມສາ", "ພຶດສະພາ", "ມິຖຸນາ", "ກໍລະກົດ", "ສິງຫາ"]';

    $mode = $_POST['mode'];
    if($mode == 1){
      $modename = 'ເດືອນ';
      $label2 = "'ເດືອນ'";
      $smnth = $_POST['smnth'];
      $emnth = $_POST['emnth'];
      $syear = $_POST['syear'];
      $eyear = $_POST['eyear'];
      //////////////////////////
      $sdate = $syear . '-' . $smnth . '-01';
      $edates = $eyear . '-' . $emnth . '-28';
      $date = new DateTime($edates);
      $edate = $date->format('Y-m-t');
      ///////////////////////////////////
      $countreporteachmonths = DB::table('str_form')
      ->select(DB::raw('COUNT(idstr_form) AS rp_time'), DB::raw('YEAR(created_at) AS rp_y, MONTH(created_at) AS rp_m'))
      ->where('created_at', '>=', $sdate) ->where('created_at', '<=', $edate)
      ->groupBy(DB::raw('YEAR(created_at), MONTH(created_at)')) ->get();
      if($countreporteachmonths){
        $rp_counts[][] = '';
        $datasets = '[';
        $contents = '[';
        foreach($countreporteachmonths as $countreporteachmonth){
          $rp_counts[$countreporteachmonth->rp_y][$countreporteachmonth->rp_m] = $countreporteachmonth->rp_time;
        }
        //////////////////////////////////////////
        for($shy = $syear; $shy <= $eyear; $shy++){
          if($syear == $eyear){
            $wide_screen = 0;
            for($shm = $smnth; $shm <= $emnth; $shm++){
              if($shm == $emnth){
                if(isset($rp_counts[$shy][(int)$shm])){ $newdataset = $rp_counts[$shy][(int)$shm]; }else{ $newdataset = 0; }
                $datasets = $datasets . $newdataset . ']';
                if((int)$shm == 1){ $newcontent = '"ມັງກອນ"';
                }elseif((int)$shm == 2){ $newcontent = '"ກຸມພາ"';
                }elseif((int)$shm == 3){ $newcontent = '"ມີນາ"';
                }elseif((int)$shm == 4){ $newcontent = '"ເມສາ"';
                }elseif((int)$shm == 5){ $newcontent = '"ພຶດສະພາ"';
                }elseif((int)$shm == 6){ $newcontent = '"ມິຖຸນາ"';
                }elseif((int)$shm == 7){ $newcontent = '"ກໍລະກົດ"';
                }elseif((int)$shm == 8){ $newcontent = '"ສິງຫາ"';
                }elseif((int)$shm == 9){ $newcontent = '"ກັນຍາ"';
                }elseif((int)$shm == 10){ $newcontent = '"ຕຸລາ"';
                }elseif((int)$shm == 11){ $newcontent = '"ພະຈິກ"';
                }else{ $newcontent = '"ທັນວາ"'; }
                $contents = $contents . $newcontent . ']';
              }else{
                if(isset($rp_counts[$shy][(int)$shm])){ $newdataset = $rp_counts[$shy][(int)$shm]; }else{ $newdataset = 0; }
                $datasets = $datasets . $newdataset . ', ';
                if((int)$shm == 1){ $newcontent = '"ມັງກອນ"';
                }elseif((int)$shm == 2){ $newcontent = '"ກຸມພາ"';
                }elseif((int)$shm == 3){ $newcontent = '"ມີນາ"';
                }elseif((int)$shm == 4){ $newcontent = '"ເມສາ"';
                }elseif((int)$shm == 5){ $newcontent = '"ພຶດສະພາ"';
                }elseif((int)$shm == 6){ $newcontent = '"ມິຖຸນາ"';
                }elseif((int)$shm == 7){ $newcontent = '"ກໍລະກົດ"';
                }elseif((int)$shm == 8){ $newcontent = '"ສິງຫາ"';
                }elseif((int)$shm == 9){ $newcontent = '"ກັນຍາ"';
                }elseif((int)$shm == 10){ $newcontent = '"ຕຸລາ"';
                }elseif((int)$shm == 11){ $newcontent = '"ພະຈິກ"';
                }else{ $newcontent = '"ທັນວາ"'; }
                $contents = $contents . $newcontent . ', ';
              }
            }
          }else{
            $wide_screen = 1;
            if($shy == $syear){
              for($shm = $smnth; $shm <= 12; $shm++){
                if(isset($rp_counts[$shy][(int)$shm])){ $newdataset = $rp_counts[$shy][(int)$shm]; }else{ $newdataset = 0; }
                $datasets = $datasets . $newdataset . ', ';
                if((int)$shm == 1){ $newcontent = '"ມັງກອນ"';
                }elseif((int)$shm == 2){ $newcontent = '"ກຸມພາ"';
                }elseif((int)$shm == 3){ $newcontent = '"ມີນາ"';
                }elseif((int)$shm == 4){ $newcontent = '"ເມສາ"';
                }elseif((int)$shm == 5){ $newcontent = '"ພຶດສະພາ"';
                }elseif((int)$shm == 6){ $newcontent = '"ມິຖຸນາ"';
                }elseif((int)$shm == 7){ $newcontent = '"ກໍລະກົດ"';
                }elseif((int)$shm == 8){ $newcontent = '"ສິງຫາ"';
                }elseif((int)$shm == 9){ $newcontent = '"ກັນຍາ"';
                }elseif((int)$shm == 10){ $newcontent = '"ຕຸລາ"';
                }elseif((int)$shm == 11){ $newcontent = '"ພະຈິກ"';
                }else{ $newcontent = '"ທັນວາ"'; }
                $contents = $contents . $newcontent . ', ';
              }
            }elseif($shy == $eyear){
              for($shm = 1; $shm <= $emnth; $shm++){
                if($shm == $emnth){
                  if(isset($rp_counts[$shy][(int)$shm])){ $newdataset = $rp_counts[$shy][(int)$shm]; }else{ $newdataset = 0; }
                  $datasets = $datasets . $newdataset . ']';
                  if((int)$shm == 1){ $newcontent = '"ມັງກອນ"';
                  }elseif((int)$shm == 2){ $newcontent = '"ກຸມພາ"';
                  }elseif((int)$shm == 3){ $newcontent = '"ມີນາ"';
                  }elseif((int)$shm == 4){ $newcontent = '"ເມສາ"';
                  }elseif((int)$shm == 5){ $newcontent = '"ພຶດສະພາ"';
                  }elseif((int)$shm == 6){ $newcontent = '"ມິຖຸນາ"';
                  }elseif((int)$shm == 7){ $newcontent = '"ກໍລະກົດ"';
                  }elseif((int)$shm == 8){ $newcontent = '"ສິງຫາ"';
                  }elseif((int)$shm == 9){ $newcontent = '"ກັນຍາ"';
                  }elseif((int)$shm == 10){ $newcontent = '"ຕຸລາ"';
                  }elseif((int)$shm == 11){ $newcontent = '"ພະຈິກ"';
                  }else{ $newcontent = '"ທັນວາ"'; }
                  $contents = $contents . $newcontent . ']';
                }else{
                  if(isset($rp_counts[$shy][(int)$shm])){ $newdataset = $rp_counts[$shy][(int)$shm]; }else{ $newdataset = 0; }
                  $datasets = $datasets . $newdataset . ', ';
                  if((int)$shm == 1){ $newcontent = '"ມັງກອນ"';
                  }elseif((int)$shm == 2){ $newcontent = '"ກຸມພາ"';
                  }elseif((int)$shm == 3){ $newcontent = '"ມີນາ"';
                  }elseif((int)$shm == 4){ $newcontent = '"ເມສາ"';
                  }elseif((int)$shm == 5){ $newcontent = '"ພຶດສະພາ"';
                  }elseif((int)$shm == 6){ $newcontent = '"ມິຖຸນາ"';
                  }elseif((int)$shm == 7){ $newcontent = '"ກໍລະກົດ"';
                  }elseif((int)$shm == 8){ $newcontent = '"ສິງຫາ"';
                  }elseif((int)$shm == 9){ $newcontent = '"ກັນຍາ"';
                  }elseif((int)$shm == 10){ $newcontent = '"ຕຸລາ"';
                  }elseif((int)$shm == 11){ $newcontent = '"ພະຈິກ"';
                  }else{ $newcontent = '"ທັນວາ"'; }
                  $contents = $contents . $newcontent . ', ';
                }
              }
            }else{
              for($shm = 1; $shm <= 12; $shm++){
                if(isset($rp_counts[$shy][(int)$shm])){ $newdataset = $rp_counts[$shy][(int)$shm]; }else{ $newdataset = 0; }
                $datasets = $datasets . $newdataset . ', ';
                if((int)$shm == 1){ $newcontent = '"ມັງກອນ"';
                }elseif((int)$shm == 2){ $newcontent = '"ກຸມພາ"';
                }elseif((int)$shm == 3){ $newcontent = '"ມີນາ"';
                }elseif((int)$shm == 4){ $newcontent = '"ເມສາ"';
                }elseif((int)$shm == 5){ $newcontent = '"ພຶດສະພາ"';
                }elseif((int)$shm == 6){ $newcontent = '"ມິຖຸນາ"';
                }elseif((int)$shm == 7){ $newcontent = '"ກໍລະກົດ"';
                }elseif((int)$shm == 8){ $newcontent = '"ສິງຫາ"';
                }elseif((int)$shm == 9){ $newcontent = '"ກັນຍາ"';
                }elseif((int)$shm == 10){ $newcontent = '"ຕຸລາ"';
                }elseif((int)$shm == 11){ $newcontent = '"ພະຈິກ"';
                }else{ $newcontent = '"ທັນວາ"'; }
                $contents = $contents . $newcontent . ', ';
              }
            }

          }
        }
      }
      //////////////////////////////
    }elseif($mode == 2){
      $modename = 'ລວມ STR ຕາມທະນາຄານ';
      $label2 = "'ລວມ STR ຕາມທະນາຄານ'";
      $smnth = $_POST['smnth'];
      $emnth = $_POST['emnth'];
      $syear = $_POST['syear'];
      $eyear = $_POST['eyear'];
      //////////////////////////
      $sdate = $syear . '-' . $smnth . '-01';
      $edates = $eyear . '-' . $emnth . '-28';
      $date = new DateTime($edates);
      $edate = $date->format('Y-m-t');
      ///////////////////////////////////
      $countreporteachmonths = DB::table('str_form')
      ->join('usr', 'reporter_idusr', '=', 'idusr')
      ->join('reporter', 'reporter_idreporter', '=', 'idreporter')
      ->join('reporter_type', 'reporter.reporter_type_idreporter_type', '=', 'reporter_type.idreporter_type')
      ->select(DB::raw('COUNT(idstr_form) AS rp_time'), 'reporter_name AS rpt_name')
      ->where('created_at', '>=', $sdate) ->where('created_at', '<=', $edate)
      ->where('bank_nonbank', '=', 'bk')
      ->groupBy('reporter_name') ->get();
      if($countreporteachmonths){
        $rp_counts[] = '';
        $rp_banks[] = '';
        $datasets = '[';
        $contents = '[';
        $loop_count = 0;
        foreach($countreporteachmonths as $countreporteachmonth){
          $loop_count++;
          $rp_counts[$loop_count] = $countreporteachmonth->rp_time;
          $rp_banks[$loop_count] = $countreporteachmonth->rpt_name;

        }
        ////////////////////////////////////////
        if($loop_count > 12){ $wide_screen = 1; }else{ $wide_screen = 0; }
        /////////////////////////////////////////
        for($sbk = 1; $sbk <= $loop_count; $sbk++){
          if($sbk == $loop_count){
            $datasets = $datasets . $rp_counts[$sbk] . ', 0]';
            $contents = $contents . '"' . $rp_banks[$sbk] . '", ""]';
          }else{
            $datasets = $datasets . $rp_counts[$sbk] . ', ';
            $contents = $contents . '"' . $rp_banks[$sbk] . '", ';
          }
        }
        //////////////////////////////////////////
      }
      ///////////////////////////////////////
    }elseif($mode == 3){
      $modename = 'ລວມມູນຄ່າລາຍງານ STR ຕາມທະນາຄານ';
      $label2 = "'ລວມມູນຄ່າລາຍງານ STR ຕາມທະນາຄານ'";
      $smnth = $_POST['smnth'];
      $emnth = $_POST['emnth'];
      $syear = $_POST['syear'];
      $eyear = $_POST['eyear'];
      //////////////////////////
      $sdate = $syear . '-' . $smnth . '-01';
      $edates = $eyear . '-' . $emnth . '-28';
      $date = new DateTime($edates);
      $edate = $date->format('Y-m-t');
      ///////////////////////////////////
      $countreporteachmonths = DB::table('str_form')
      ->join('usr', 'str_form.reporter_idusr', '=', 'usr.idusr')
      ->join('reporter', 'usr.reporter_idreporter', '=', 'reporter.idreporter')
      ->join('reporter_type', 'reporter.reporter_type_idreporter_type', '=', 'reporter_type.idreporter_type')
      ->join('str_detail', 'str_form.str_detail_idstr_detail', '=', 'str_detail.idstr_detail')
      ->select(DB::raw('SUM(total_amount) AS rp_amt'), 'reporter_name AS rpt_name')
      ->where('created_at', '>=', $sdate) ->where('created_at', '<=', $edate)
      ->where('bank_nonbank', '=', 'bk')
      ->groupBy('reporter_name') ->get();
      if($countreporteachmonths){
        $rp_counts[] = '';
        $rp_banks[] = '';
        $datasets = '[';
        $contents = '[';
        $loop_count = 0;
        foreach($countreporteachmonths as $countreporteachmonth){
          $loop_count++;
          $rp_counts[$loop_count] = $countreporteachmonth->rp_amt;
          $rp_banks[$loop_count] = $countreporteachmonth->rpt_name;

        }
        ////////////////////////////////////////
        if($loop_count > 12){ $wide_screen = 1; }else{ $wide_screen = 0; }
        /////////////////////////////////////////
        for($sbk = 1; $sbk <= $loop_count; $sbk++){
          if($sbk == $loop_count){
            $datasets = $datasets . $rp_counts[$sbk] . ', 0]';
            $contents = $contents . '"' . $rp_banks[$sbk] . '", ""]';
          }else{
            $datasets = $datasets . $rp_counts[$sbk] . ', ';
            $contents = $contents . '"' . $rp_banks[$sbk] . '", ';
          }
        }
        //////////////////////////////////////////
      }
      ////////////////////////////////////////////
    }elseif($mode == 4){
      $modename = 'ລວມ STR ຕາມຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ';
      $label2 = "'ລວມ STR ຕາມຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ'";
      $smnth = $_POST['smnth'];
      $emnth = $_POST['emnth'];
      $syear = $_POST['syear'];
      $eyear = $_POST['eyear'];
      //////////////////////////
      $sdate = $syear . '-' . $smnth . '-01';
      $edates = $eyear . '-' . $emnth . '-28';
      $date = new DateTime($edates);
      $edate = $date->format('Y-m-t');
      ///////////////////////////////////
      $countreporteachmonths = DB::table('str_form')
      ->join('usr', 'reporter_idusr', '=', 'idusr')
      ->join('reporter', 'reporter_idreporter', '=', 'idreporter')
      ->select(DB::raw('COUNT(idstr_form) AS rp_time'), 'reporter_name AS rpt_name')
      ->where('created_at', '>=', $sdate) ->where('created_at', '<=', $edate)
      ->groupBy('reporter_name') ->get();
      if($countreporteachmonths){
        $rp_counts[] = '';
        $rp_banks[] = '';
        $datasets = '[';
        $contents = '[';
        $loop_count = 0;
        foreach($countreporteachmonths as $countreporteachmonth){
          $loop_count++;
          $rp_counts[$loop_count] = $countreporteachmonth->rp_time;
          $rp_banks[$loop_count] = $countreporteachmonth->rpt_name;

        }
        ////////////////////////////////////////
        if($loop_count > 12){ $wide_screen = 1; }else{ $wide_screen = 0; }
        /////////////////////////////////////////
        for($sbk = 1; $sbk <= $loop_count; $sbk++){
          if($sbk == $loop_count){
            $datasets = $datasets . $rp_counts[$sbk] . ', 0]';
            $contents = $contents . '"' . $rp_banks[$sbk] . '", ""]';
          }else{
            $datasets = $datasets . $rp_counts[$sbk] . ', ';
            $contents = $contents . '"' . $rp_banks[$sbk] . '", ';
          }
        }
        //////////////////////////////////////////
      }
      ///////////////////////////////////////
    }elseif($mode == 5){
      $modename = 'ລວມ STR ຕາມສັນຊາດທີ່ຖືກລາຍງານ';
      $label2 = "'ລວມ STR ຕາມສັນຊາດທີ່ຖືກລາຍງານ'";
      $smnth = $_POST['smnth'];
      $emnth = $_POST['emnth'];
      $syear = $_POST['syear'];
      $eyear = $_POST['eyear'];
      //////////////////////////
      $sdate = $syear . '-' . $smnth . '-01';
      $edates = $eyear . '-' . $emnth . '-28';
      $date = new DateTime($edates);
      $edate = $date->format('Y-m-t');
      ///////////////////////////////////
      $countreporteachmonths = DB::table('str_form')
      ->join('usr', 'reporter_idusr', '=', 'idusr')
      ->join('reporter', 'reporter_idreporter', '=', 'idreporter')
      ->join('personnel', 'personnel_idpersonnel', '=', 'idpersonnel')
      ->join('nationality', 'personnel_nationality', '=', 'idnationality')
      ->select(DB::raw('COUNT(idstr_form) AS rp_time'), 'nationality_name AS rpt_nat')
      ->where('created_at', '>=', $sdate) ->where('created_at', '<=', $edate)
      ->groupBy('nationality_name') ->get();
      if($countreporteachmonths){
        $rp_counts[] = '';
        $rp_banks[] = '';
        $datasets = '[';
        $contents = '[';
        $loop_count = 0;
        foreach($countreporteachmonths as $countreporteachmonth){
          $loop_count++;
          $rp_counts[$loop_count] = $countreporteachmonth->rp_time;
          $rp_banks[$loop_count] = $countreporteachmonth->rpt_nat;

        }
        ////////////////////////////////////////
        if($loop_count > 12){ $wide_screen = 1; }else{ $wide_screen = 0; }
        /////////////////////////////////////////
        for($sbk = 1; $sbk <= $loop_count; $sbk++){
          if($sbk == $loop_count){
            $datasets = $datasets . $rp_counts[$sbk] . ', 0]';
            $contents = $contents . '"' . $rp_banks[$sbk] . '", ""]';
          }else{
            $datasets = $datasets . $rp_counts[$sbk] . ', ';
            $contents = $contents . '"' . $rp_banks[$sbk] . '", ';
          }
        }
        //////////////////////////////////////////
      }
      ////////////////////////////////////////////
    }

    if(Auth::user()->role_idrole == 1){
    return view('stronlines.chartviews', compact('mode', 'smnth', 'syear', 'emnth', 'eyear', 'bgyear', 'numcols', 'notfound', 'modename', 'label2', 'datasets', 'contents', 'wide_screen'));
    }
    else {
    return view('index');
   }
  }
}
