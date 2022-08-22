<?php

namespace App\Imports;

use App\Ctr_legal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class CtrPersonImport implements ToModel, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ctr_legal([
            // 'id'     => $row[1],
            // 'idreporter'    => $row[2],
            // 'password' => Hash::make($row[3])
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
        ]);
    }

    public function chunkSize(): int
    {
        return 200;
    }
}