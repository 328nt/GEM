@extends('admin.layout.index')
@section('title')
    Sửa thí sinh
@endsection
@section('content')
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User
                        <small>edit</small>
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
                    <form action="admin/user/edit/{{ $user->id }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>name</label>
                            <input class="form-control" name="name" placeholder="Please Enter Name" value="{{ $user->name }}" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" placeholder="Please Enter Email" readonly="" value="{{ $user->email }}" />
                        </div>
                        <input type="checkbox" name="changepass" id="changepassword">
                        <div class="form-group">
                            <label>Change password</label>
                            <input class="form-control password" type="password" name="password" placeholder="Please Enter Password" disabled="" />
                        </div>
                        <div class="form-group">
                            <label> RE password</label>
                            <input class="form-control password" type="password" name="repassword" placeholder="Please Enter Password" disabled="" />
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="role" class="form-control" >
                                <option
                                @if($user->role == 0)
                                {{ "selected" }}
                                @endif

                                 value="0">Member</option>
                                <option
                                @if($user->role == 1)
                                {{ "selected" }}
                                @endif value="1">Admin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">User Edit</button>
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
</script>
@endsection