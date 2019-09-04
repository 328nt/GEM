@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>View</th>
                            <th>Hightlight</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $ns)
                        <tr class="odd gradeX" align="left">
                            <td>{{ $ns->id }}</td>
                            <td>
                            <img width="100px" src="upload/news/{{ $ns->image }}" /></td>
                            <td>{{ $ns->title }}</td>
                            <td style="border: 1px solid #00000">{{ $ns->description }}</td>
                            <td>{{ $ns->view }}</td>
                            <td>
                            @if($ns->hightlight == 0)
                            {{ 'khong' }}
                            @else
                            {{ 'co' }}
                            @endif</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/news/delete/{{ $ns->id }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/news/edit/{{ $ns->id }}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection