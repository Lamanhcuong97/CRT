<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Maatwebsite\Excel\Facades\Excel;

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
        $pathFile = 'storage/app/public/ctrperson2.xlsx';
        Excel::filter('chunk')->load($pathFile)->chunk(200, function ($results) {
            $results = $results->get();
            dd($results);
            for ($i=2; $i < count($results); $i++) { 
                $value = $results[$i];
                dd($value);
                $insert[] = [
                    // 'idreporter' => $this->user->reporter_idreporter,
                    'name' => $value[1],
                    'surname' => $value[2],
                    'nationality' => $value[3],
                    'birthday' => $value[4],
                    'occupation' => $value[5],
                    'phone_number' => $value[6],
                    'identity_card' => $value[7],
                    'nominee' => $value[8],
                    'owner' => $value[9],
                    'transaction_type' => $value[10],
                    'transaction_date' => $value[11],
                    'transaction_amount' => $value[12],
                    'receiver_name' => $value[13],
                    'destination_fi' => $value[14],
                    'currency' => $value[15],
                  ]; 
                  dd($insert); 
            }
            if (!empty($insert)){  
                DB::table('ctr_person')->insert($insert);  
            }  
        });
    }
}
