<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class ImportCtrLegal implements ShouldQueue
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
        $pathFile = 'storage/app/public/ctrlegal2.xlsx';
        config(['excel.import.dates.columns' => [
            'license_date',
            'transaction_date'
        ]]);

        Excel::filter('chunk')->setDateColumns(['license_date','transaction_date'])->load($pathFile)->chunk(200, function ($results) {
            foreach ($results as $key => $value) {  
                $insert2[] = [
                    // 'idreporter' => $reporters['Auth::user()->idusr']->idreporter,

                    'idreporter' => $this->user->reporter_idreporter,
                    'business_name' => $value->business_name,
                    'license_no' => $value->license_no,
                    'license_date' => $value->license_date,
                    'business_type' => $value->business_type,
                    'office_phone' => $value->office_phone_text,
                    'customer_name' => $value->customer_name,
                    'nationality' => $value->nationality,
                    'occupation' => $value->occupation,
                    'identity_card' => $value->identity_card,
                    'customer_phone' => $value->customer_phone_text,
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
            }  
        });
    }
}
