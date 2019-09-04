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
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>name</label>
                            <input class="form-control" name="name" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" placeholder="Please Enter Email" />
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input class="form-control" type="password" name="password" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label> RE password</label>
                            <input class="form-control" type="password" name="repassword" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="role" class="form-control" >
                                <option value="0">Member</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Add</button>
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