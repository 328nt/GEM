<?php

namespace App\Http\Controllers;
use App\Members;
use App\Provinces;
use DB;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\MemberExport;
use App\Imports\UsersImport;
use App\Imports\ScoresImport;
use App\Imports\MemberImport;
use App\Imports\MembersImport;
use App\Imports\ProvincesImport;
use App\Imports\DistrictsImport;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{
    public function importExportView()
    {
        $citys = Provinces::all();
        $members = Members::all();
       return view('import', ['citys'=>$citys, 'members'=>$members]);
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportmember() 
    {
        return Excel::download(new MemberExport, 'member.xlsx');
    }
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
           
        return back();
    }
    public function importmember() 
    {
        Excel::import(new MembersImport,request()->file('file'));
           
        return back()->with('msg', 'success');
    } 

    
    public function updatemember() 
    {
        $datas = Excel::toCollection(new MemberImport,request()->file('file'));
        foreach ($datas[0] as $data) {
            // dd($data[1]. ' ' .$data[2]);
            Members::where('id', $data[0])->update([
                'name' =>$data[1],
                'email' =>$data[2],
                'sbd' =>$data[3],
            ]);
        }
        return back()->with('msg', 'success');
    }
    
    
    public function ImportMembersJson()
    {
        // echo getcwd();
        ini_set('max_execution_time', 3600);
        $json = file_get_contents('members.json');
        $json = json_decode($json, true);
        $i = 0; 
        foreach ($json as $student_json) {
            $student = Members::where('email',$student_json['Email'])->first();
            if ($student == null) {
                echo $i." : Không tìm thấy SBD: ".$student_json['Email']."<br>";
                $i++;
                continue;
            }
            $student->sbd = $student_json['id'];
            $student->update();
        }
    }



    public function importscores() 
    {
        Excel::import(new ScoresImport,request()->file('file'));
           
        return back()->with('msg', 'success');
    }

    public function importprovinces() 
    {
        Excel::import(new ProvincesImport, request()->file('file'));
           
        return back()->with('msg', 'success');
    }
    
    public function importdistricts() 
    {
        Excel::import(new DistrictsImport,request()->file('file'));
           
        return back()->with('msg', 'success');
    }
}
