<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Scores;

class PagesController extends Controller
{
    public function getregister()
    {
        return view('frontend.authetication.register');
    }
    public function postregister(Request $rq)
    {
        $this->validate($rq,
        [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|string|email|unique:users|max:255',
            'day' => 'required|numeric|between:1,31',
            'month' => 'required|numeric|between:1,12',
            'year' => 'required|numeric',
            'address' => 'required',
            'password' =>'required|min:6',
            'repassword' => 'required|same:password',
            'district' => 'required',
            'city' => 'required',
            'class' => 'required',
            'grade' => 'required',
            'school' => 'required',
            'parentname' => 'required',
            'mobile' => 'required|min:10',
        ],[
            
            'email.email' => 'Email vừa nhập không hợp lệ',
            'email.unique' => 'Email vừa nhập đã tồn tại trên hệ thống',
            'email.required' => 'Địa chỉ email không được bỏ trống',
            'password.required' => 'Mật khẩu không được bỏ trống',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự',
            'day.required' => 'Ngày sinh không được bỏ trống',
            'day.numeric' => 'Ngày sinh phải là một số nguyên',
            'day.between' => 'Ngày sinh phải nằm trong khoảng từ 1 đến 31',
            'month.required' => 'Tháng sinh không được bỏ trống',
            'month.numeric' => 'Tháng sinh phải là một số nguyên',
            'month.between' => 'Tháng sinh phải nằm trong khoảng 1 - 12',
            'year.required' => 'Năm sinh không được bỏ trống',
            'year.numeric' => 'Năm sinh phải là một số nguyên',

            'address.required' => 'Vui lòng nhập địa chỉ',
            'district.required' => 'Tên Quận, huyện không được bỏ trống',
            'city.required' => 'Tên Tỉnh, thành phố không được bỏ trống',
            'class.required' => 'Vui lòng chọn lớp',
            'grade.required' => 'Vui lòng chọn một khối lớp',
            'school.required' => 'Vui lòng chọn một trường',
            'parentname.required' => 'Họ tên phụ huynh không được bỏ trống',
            'mobile.required' => 'SĐT không được bỏ trống',
            'mobile.min' => 'SĐT có độ dài tối thiểu 10 ký tự',
        ]);
        $user = New User;
        $bd = $rq['day'].'/'.$rq['month'].'/'.$rq['year'];
        $user->name = $rq->name;
        $user->lastname = $rq->lastname;
        $user->password = bcrypt($rq->password);
        $user->birthday = $bd;
        $user->email = $rq->email;
        $user->address = $rq->address;
        $user->district = $rq->district;
        $user->city = $rq->city;
        $user->class = $rq->class;
        $user->parentname = $rq->parentname;
        $user->grade = $rq->grade;
        $user->school = $rq->school;
        $user->district = $rq->district;
        $user->mobile = $rq->mobile;

            $user->save();
            return redirect('login')->with('msg', 'Đăng ký thành công, vui lòng đăng nhập và cập nhật link dự thi');
    }



    public function ImportJsonFile()
    {
        // echo getcwd();
        ini_set('max_execution_time', 3600);
        $json = file_get_contents('users.json');
        $json = json_decode($json, true);
        $i = 0;
        foreach ($json as $student_json) {
            $student = User::where('id', str_pad($student_json['id'], 6, '0', STR_PAD_LEFT))->first();
            if ($student == null) {
                echo $i." : Không tìm thấy SBD: ".str_pad($student_json['id'], 6, '0', STR_PAD_LEFT)."<br>";
                $i++;
                continue;
            }
            $student->sbd = $student_json['id'];
            $student->update();
        }
    }

    public function getlogin()
    {
        return view('frontend.authetication.login');
    }

    public function postlogin(Request $rq)
    {
        $this->validate($rq,
        [
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'email không được bỏ trống',
            'password.required' => 'matkhau không được bỏ trống'
        ]);
        if (Auth::attempt(['email' => $rq->email, 'password' => $rq->password]))
        {
            return redirect('index');
        }
        else {
            return redirect('login')->with('msg','Tài khoản hoặc mật khẩu không chính xác, vui lòng đăng nhập lại');
        }
    }

    function getlogout()
    {
    	Auth::logout();
    	return redirect('index');
    }

    public function getaccount($id)
    {
        if (Auth::check()) {
            $user = User::find($id);
            $scores = $user->scores->scores;
            // dd($scores);
        return view('frontend.authetication.account', ['user'=>$user,'scores' => $scores]);
        } else {
            return redirect('login');
        }
    }

    public function postaccount(Request $rq, $id)
    {
        $acc = User::Find($id);
        $this->validate($rq,
        [
            'link'=>'required'
        ],[
            'link.required'=>'vui lòng chèn link dự thi'
        ]);
        $acc->link = $rq->link;
        $acc->save();

        return redirect('account/'.$id)->with('msg', 'chúc mừng bạn đã cập nhật link dự thi thành công');
    }

    public function postsearch(Request $rq)
    {
        $search = $rq->search;
        $scores = Scores::Where('iduser', 'like', '%'.$search.'%')->get();
        $user = User::Where('id', 'like', '%'.$search.'%')->get();
        

        return view('frontend.pages.result', ['user'=>$user, 'scores'=>$scores, 'search'=>$search]);
    }
}
