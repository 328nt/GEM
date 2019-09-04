@extends('admin.layout.index')
@section('title')
Danh sách thí sinh
@endsection
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div style="overflow-x:auto;" class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>List</small>
                </h1>
            </div>

            <div style="text-align: right; padding-right: 40px;">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input style="width:30%; display:inline" type="file" name="file" class="form-control">
                    <br><br>
                    <button class="btn btn-success">Nhập dữ liệu thí sinh</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Xuất danh sách thí sinh</a>
                </form>
                <br>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
            @endif
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Full Name</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                        <th>Lớp</th>
                        <th>Khối</th>
                        <th>trường</th>
                        <th>Họ tên bố, mẹ</th>
                        <th>Email</th>
                        <th>sđt</th>
                        <th>link</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $u)
                    <tr class="odd gradeX" align="left">
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->fullname }}</td>
                        <td>{{ $u->birthday }}</td>
                        <td>{{ $u->address }}</td>
                        <td>{{ $u->class }}</td>
                        <td>{{ $u->grade }}</td>
                        <td>{{ $u->school }}</td>
                        <td>{{ $u->parentname }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->mobile }}</td>
                        <td>{{ $u->link }}</td>
                        {{-- <td>
                                @if($u->quyen == 1)
                                {{ "admin" }}
                        @else
                        {{ "member" }}
                        @endif

                        </td> --}}
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/delete/{{ $u->id }}">
                                Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                href="admin/user/editmembers/{{ $u->id }}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @section('script')
        <script>
                $(function () {
                  $('#example1').DataTable()
                  $('#example2').DataTable({
                    'paging'      : true,
                    'lengthChange': false,
                    'searching'   : false,
                    'ordering'    : true,
                    'info'        : true,
                    'autoWidth'   : false
                  })
                })
              </script>
        @endsection
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection