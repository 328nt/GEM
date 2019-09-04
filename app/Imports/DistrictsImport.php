<?php

namespace App\Imports;

use App\Districts;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DistrictsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row, Request $request)
    {
        return new Districts([
            
            'id_provinces' => $request->city,
            'name' => $row['districts']
        ]);
    }
}
