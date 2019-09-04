<?php

namespace App\Exports;

use App\Members;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Memberexport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('excel.users', [
            'users' => Members::all()
        ]);
    }
}
