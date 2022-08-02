<?php

namespace App\Imports;

use App\Ctr_person;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class CtrPersonImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ctr_person([
            // 'id'     => $row[0],
            // 'idreporter'    => $row[2],
            // 'password' => Hash::make($row[3])
            'name' => $row[1],
            'surname' => $row[2],
            'nationality' => $row[3],
            'birthday' => $row[4],
            'occupation' => $row[5],
            'phone_number' => $row[6],
            'identity_card' => $row[7],
            'nominee' => $row[8],
            'owner' => $row[9],
            'transaction_type' => $row[10],
            'transaction_date' => $row[11],
            'transaction_amount' => $row[12],
            // 'currency' => $row[15],
            'receiver_name' => $row[13],
            'destination_fi' => $row[14],
        ]);
    }
}