<?php

namespace App\Imports;

use App\Members;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

// php artisan make:import MembersImport --model=User
class MemberImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Members([
            // 'name' => $row['name'],
            // 'email' =>$row['email'],
            'name' =>$row[1],
            'email' =>$row[2],
            'sbd' =>$row[3],
        ]);
    }
    // public function headingRow(): int
    // {
    //     return 2;
    // }
}
