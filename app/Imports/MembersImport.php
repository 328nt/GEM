<?php

namespace App\Imports;

use App\Members;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MembersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Members([
            
            'name'  => $row[1],
            'email' => $row[2],
            'sbd' => $row[3],
            'day' => $row[4],
        ]);
    }
}
