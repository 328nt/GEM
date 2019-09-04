<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;

class UserController extends Controller
{
    public function getlist()
    {
        $user = User::orderBy('id', 'desc')->get();
        return view('admin/users/list', ['user'=>$user]);
    }

    function getlistad()
    {
        
    $users = User::where('role', 1)->get();
    return view('admin/users/listad', ['users'=>$users]);
    }

    public function getaddmembers()
    {
        return view('admin/users/addmembers');
    }
    public function postaddmembers(Request $rq)
    {
        $this->validate($rq,
        [
         
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6|max:20',
            'repassword' => 'required|same:password',
            'birthday' => 'required',
            'address' => 'required',
            'district' => 'required',
            'city' => 'required',
            'class' => 'required',
            'grade' => 'required',
            'school' => 'required',
            'parentname' => 'required',
            'mobile' => 'required',
        ],[
            
            'name.required' => 'Tên không được bỏ trống',
            'password.required' => 'password không được bỏ trống',
            'repassword.required' => 'vui lòng nhập lại password',
            'birthday.required' => 'vui lòng nhập ngày sinh',
            'address.required' => 'vui lòng nhập địa chỉ',
            'district.required' => 'vui lòng nhập quận huyện',
            'city.required' => 'vui lòng nhập tỉnh thành ',
            'class.required' => 'vui lòng nhập lớp',
            'grade.required' => 'vui lòng nhập khối',
            'school.required' => 'vui lòng nhập trường',
            'parentname.required' => 'vui lòng nhập họ tên phụ huynh',
            'mobile.required' => 'vui lòng nhập số điện thoại liên hệ',
        ]);
        $user = new User();
        $user->name = $rq->name;
        $user->email = $rq->email;
        $user->password = bcrypt($rq->password);
        $user->birthday = $rq->birthday;
        $user->address = $rq->address;
        $user->district = $rq->district;
        $user->city = $rq->city;
        $user->class = $rq->class;
        $user->grade = $rq->grade;
        $user->school = $rq->school;
        $user->parentname = $rq->parentname;
        $user->mobile = $rq->mobile;
        $user->link = $rq->link;
        $user->save();
        return redirect('admin/user/list')->with('msg','Thêm thí sinh thành công');

    }

    public function geteditmembers($id)
    {
        $users = User::find($id);
        return view('admin/users/editmembers', ['users'=>$users]);
    }
    public function posteditmembers(Request $rq, $id)
    {
        $users = User::find($id);
        $this->validate($rq,
        [
         
            'name' => 'required',
            'lastname' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'district' => 'required',
            'city' => 'required',
            'class' => 'required',
            'grade' => 'required',
            'school' => 'required',
            'parentname' => 'required',
            'mobile' => 'required',
        ],[
            
            'name.required' => 'Tên không được bỏ trống',
            'lastname.required' => 'Tên đệm không được bỏ trống',
            'birthday.required' => 'vui lòng nhập ngày sinh',
            'address.required' => 'vui lòng nhập địa chỉ',
            'district.required' => 'vui lòng nhập quận huyện',
            'city.required' => 'vui lòng nhập tỉnh thành ',
            'class.required' => 'vui lòng nhập lớp',
            'grade.required' => 'vui lòng nhập khối',
            'school.required' => 'vui lòng nhập trường',
            'parentname.required' => 'vui lòng nhập họ tên phụ huynh',
            'mobile.required' => 'vui lòng nhập số điện thoại liên hệ',
        ]);
        
        $users->name = $rq->name;
        $users->lastname = $rq->lastname;
        $users->birthday = $rq->birthday;
        $users->address = $rq->address;
        $users->district = $rq->district;
        $users->city = $rq->city;
        $users->class = $rq->class;
        $users->grade = $rq->grade;
        $users->school = $rq->school;
        $users->parentname = $rq->parentname;
        $users->mobile = $rq->mobile;
        $users->link = $rq->link;
        if ( $rq->changepass =="on")
        {
            $this->validate($rq,
        [
            'password' => 'required',
            'repassword' => 'required|same:password',
        ],[
            'name.required' => 'mật khẩu không được để trống',
            'repassword.same' => 'mật khẩu nhập lại chưa đúng'
        ]);
        $user->password = bcrypt($rq->password);
        }
        $users->save();
        return redirect('admin/user/editmembers/'.$id)->with('msg', 'sửa user thành công');
    }

    public function getadd()
    {
        $user = User::All();
        return view('admin/users/add', ['user'=>$user]);
    }
    public function postadd(Request $rq)
    {
        $this->validate($rq, 
        [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6|max:20',
            'repassword' => 'required|same:password',
        ],[
            'name.required' => 'Tên không được bỏ trống',
            'password.required' => 'password không được bỏ trống',
            'repassword.required' => 'vui lòng nhập password',
            'password.same' => 'password nhập lại không đúng',
        ]);
        
        $user = new User();
        $user->name = $rq->name;
        $user->email = $rq->email;
        $user->password = bcrypt($rq->password);
        $user->role = $rq->role;
        $user->save();
        return redirect('admin/user/add')->with('msg', 'thêm users thành công !');
    }

    public function getedit($id)
    {
        $user = User::find($id);
        return view('admin/users/edit',['user'=>$user]);
    }
    public function postedit(Request $rq, $id)
    {
        $this->validate($rq,
        [
            'name' => 'required'
        ],[
            'name.required' => 'tên không được để trống'
        ]);
        $user = User::find($id);
        $user->name = $rq->name;
        $user->role = $rq->role;

        if ( $rq->changepass =="on")
        {
            $this->validate($rq,
        [
            'password' => 'required',
            'repassword' => 'required|same:password',
        ],[
            'name.required' => 'mật khẩu không được để trống',
            'repassword.same' => 'mật khẩu nhập lại chưa đúng'
        ]);
        $user->password = bcrypt($rq->password);
        }
        $user->save();

        return redirect('admin/user/edit/'.$id)->with('msg', 'sửa user thành công');
    }

    public function getdelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/list')->with('msg', 'xóa User thành công');
    }


    public function getloginadmin()
    {
        return view('admin.login');
    }
    public function postloginadmin(Request $rq)
    {
        $this->validate($rq,
        [
            'password' => 'required',
            'email' => 'required',

        ],[
            'password.required' => 'Mật khẩu không được bỏ trống',
            'email.required' => 'email không được bỏ trống',
        ]);
        if(Auth::attempt(['email' => $rq->email, 'password' => $rq->password]))
        {
            return redirect('admin/user/list');
        }
        else {
            return redirect('admin/login')->with('msg', 'đăng nhập thất bại, vui lòng thử lại');
        }
    }
    public function logoutadmin()
    	{
    		Auth::logout();
    		return redirect('admin/login')->with('msg', 'dang xuat thanh cong');
    	}
}
