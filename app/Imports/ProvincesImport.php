<?php

namespace App\Imports;

use App\Provinces;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

// λ php artisan make:import ProvincesImport --model=Provinces

class ProvincesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Provinces([
            'name' => $row['provinces']
        ]);
    }
}
