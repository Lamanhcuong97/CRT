<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Maatwebsite\Excel\Facades\Excel;

class ImportCtrLegal implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $pathFile = 'storage/app/public/ctrperson2.xlsx';
        Excel::filter('chunk')->load($pathFile)->chunk(200, function ($results) {
            for ($i=1; $i < count($results); $i++) { 
                $value = $results[$i];
                $insert2[] = [
                    // 'idreporter' => $reporters['Auth::user()->idusr']->idreporter,

                    // 'idreporter' => Auth::user()->reporter_idreporter,

                    // 'idreporter' => Auth::user()->idusr,
                    'business_name' => $value[1],
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
                dd(json_encode($insert2));
            }
        });
    }
}
