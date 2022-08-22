<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use App\Imports\CtrPersonImport;

class ImportCtrPerson implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    private $path;
    private $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $path)
    {
        $this->path = $path;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $dd = Excel::import(new CtrPersonImport, $this->path);
        config([
            'excel.import.startRow' => 2,
            'excel.import.dates.columns' => [
                'transaction_date',
                'birthday'
                ]
            ]);
        Excel::filter('chunk')->load($this->path)->chunk(200, function ($results) {
            foreach ($results as $key => $value) {
                $insert[] = [
                    // 'idctr_upload' => Ctr_upload::where(id)  //h neo dhai hai mun deung ao id sout thai khong table ctr_upload dai
                  //  'idctr_upload' => Ctr_upload::orderBy('ctr_id', 'desc')
                  // 'idreporter' => Auth::user()->idusr,
                  // $idbank = Auth::user()->idusr;
                  'idreporter' => $this->user->reporter_idreporter,

                  'name' => $value->name,
                  'surname' => $value->surname,
                  'nationality' => $value->nationality,
                  'birthday' => $value->birthday,
                  'occupation' => $value['0'],
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
            if (!empty($insert)){  
                DB::table('ctr_person')->insert($insert);  
            }  
        });
    }
}
