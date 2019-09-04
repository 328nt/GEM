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
                <h1 class="page-header">DANH SÁCH QUẢN TRỊ
                </h1>
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
                        <th>Email</th>
                        <th>role</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $u)
                    <tr class="odd gradeX" align="left">
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>
                                @if($u->role == 1)
                                {{ "admin" }}
                        @else
                        {{ "member" }}
                        @endif

                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/delete/{{ $u->id }}">
                                Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                href="admin/user/edit/{{ $u->id }}">Edit</a></td>
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