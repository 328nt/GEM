@extends('admin.layout.index')
@section('title')
    Thêm thí sinh
@endsection
@section('content')
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $err)
                        <div class="alert alert-danger">
                            {{ $err }}
                        </div>
                        @endforeach
                    @endif

                    @if(session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                    @endif
                <form action="admin/user/editmembers/{{$users->id}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên</label>
                        <input class="form-control" name="name" placeholder="Please Enter Name" value="{{$users->name}}" />
                        </div>
                        <div class="form-group">
                            <label>Tên đệm</label>
                            <input class="form-control" name="lastname" value="{{$users->lastname}}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control email" name="email" value="{{$users->email}}"  disabled="" placeholder="Please Enter Email" />
                        </div>
                        
                        <input type="checkbox" name="changepass" id="changepassword">
                        <div class="form-group">
                            <label>password</label>
                            <input class="form-control password" type="password" name="password"   placeholder="Please Enter Password" disabled="" />
                        </div>
                        <div class="form-group">
                            <label> RE password</label>
                            <input class="form-control password" type="password" name="repassword"  placeholder="Please Enter Password" disabled="" />
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input class="form-control" name="birthday" value="{{$users->birthday}}" placeholder="dd/mm/yyyy" />
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" name="address" value="{{$users->address}}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Quận, huyện</label>
                            <input class="form-control" name="district" value="{{$users->district}}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Tỉnh, Thành</label>
                            <input class="form-control" name="city" value="{{$users->city}}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Lớp</label>
                            <input class="form-control" name="class" value="{{$users->class}}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Khối</label>
                            <input class="form-control" name="grade" value="{{$users->grade}}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Trường</label>
                            <input class="form-control" name="school" value="{{$users->school}}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Họ tên phụ huynh</label>
                            <input class="form-control" name="parentname" value="{{$users->parentname}}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Điện thoại </label>
                            <input class="form-control" name="mobile" value="{{$users->mobile}}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Link dự thi</label>
                            <input class="form-control" name="link" value="{{$users->link}}" placeholder="Please Enter Name" />
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $("#changepassword").change(function(){
            if($(this).is(":checked"))
            {
                $(".password").removeAttr('disabled');
            }
            else
            {
                $(".password").attr('disabled','');
            }
        })
    })
    $(document).ready(function(){
        $("#change").change(function(){
            if($(this).is(":checked"))
            {
                $(".email").removeAttr('disabled');
            }
            else
            {
                $(".email").attr('disabled','');
            }
        })
    })
</script>
@endsection
