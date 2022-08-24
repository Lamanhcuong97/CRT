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

class CtrLegalImport implements ToCollection, WithChunkReading, WithHeadingRow, ShouldQueue, WithBatchInserts
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
            Ctr_legal::create([
                'idreporter' => $this->user->reporter_idreporter,
                'business_name' => $row['business_name'],
                'license_no' => $row['license_no'],
                'license_date' => Date::excelToDateTimeObject($row['license_date']),
                'business_type' => $row['business_type'],
                'office_phone' => $row['office_phone_text'],
                'customer_name' => $row['customer_name'],
                'nationality' => $row['nationality'],
                'occupation' => $row['occupation'],
                'identity_card' => $row['identity_card'],
                'customer_phone' => $row['customer_phone_text'],
                'transaction_type' => $row['transaction_type'],
                'transaction_date' => Date::excelToDateTimeObject($row['transaction_date']),
                'transaction_amount' => $row['transaction_amount'],
                'currency' => $row['currency'],
                'receiver_name' => $row['receiver_name'],
                'destination_fi' => $row['destination_fi'],
                'ctr_id' => $this->ctr->ctr_id,
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