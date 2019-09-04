<?php

namespace App\Imports;

use App\Scores;
use Maatwebsite\Excel\Concerns\ToModel;

class ScoresImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Scores([
            
            'iduser'     => $row[0],
            'scores'    => $row[2], 
        ]);
    }
}
