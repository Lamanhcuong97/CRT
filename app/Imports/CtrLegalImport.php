<?php

namespace App\Imports;

use App\Ctr_legal;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use \PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class CtrPersonImport implements ToCollection, WithChunkReading, WithHeadingRow, ShouldQueue, WithBatchInserts
{

    private $user;
    private $ctr;
    public function __construct($user, $ctr)
    {
        $this->user = $user;
        $this->ctr = $ctr;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            dd($row);
            Ctr_legal::create([
                'idreporter' => $this->user->reporter_idreporter,
                'business_name' => $row[0],
                'license_no' => $row[1],
                'license_date' => $row[2],
                'business_type' => $row[3],
                'office_phone' => $row[4],
                'customer_name' => $row[5],
                'nationality' => $row[6],
                'occupation' => $row[7],
                'identity_card' => $row[8],
                'customer_phone' => $row[9],
                'transaction_type' => $row[10],
                'transaction_date' => $row[11],
                'transaction_amount' => $row[12],
                'currency' => $row[13],
                'receiver_name' => $row[14],
                'destination_fi' => $row[15],
                'ctr_id' => $this->ctr->id,
            ]);
        }
    }

    public function chunkSize(): int
    {
        return 200;
    }

    public function headingRow(): int
    {
        return 1;
    }

    public function batchSize(): int
    {
        return 200;
    }
}