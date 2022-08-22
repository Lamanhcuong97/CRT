<?php

namespace App\Imports;

use App\Ctr_person;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use \PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Contracts\Queue\ShouldQueue;

class CtrPersonImport implements ToCollection, WithChunkReading, WithHeadingRow, ShouldQueue
{
    private $user;
    public function __construct($user)
    {
        $this->user = $user;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {

        foreach ($rows as $row) {
            return new Ctr_person([
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
}