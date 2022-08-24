<?php

namespace App\Imports;

use App\Ctr_person;

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
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Ctr_person::create([
                'idreporter' => $this->user->reporter_idreporter,
                'name' => $row['name'],
                'surname' => $row['surname'],
                'nationality' => $row['nationality'],
                'birthday' => Date::excelToDateTimeObject($row['birthday']),
                'occupation' => $row['occupation'],
                'phone_number' => $row['phone_number'],
                'identity_card' => $row['identity_card'],
                'nominee' => $row['nominee'],
                'owner' => $row['owner'],
                'transaction_type' => $row['transaction_type'],
                'transaction_date' => Date::excelToDateTimeObject($row['transaction_date']),
                'transaction_amount' => $row['transaction_amount'],
                'receiver_name' => $row['receiver_name'],
                'destination_fi' => $row['destination_fi'],
                'currency' => $row['currency'],
                'ctr_id' => $this->ctr->ctr_id
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