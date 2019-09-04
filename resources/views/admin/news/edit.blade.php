@extends('admin.layout.index')
@section('content')
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">News
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{ $err }}
                    @endforeach
                    </div>
                    @endif

                    @if(session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                    @endif
                <form action="admin/news/edit/{{$news->id}}" method="POST" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Title</label>
                        <input class="form-control" name="title" placeholder="Please Enter Title" value="{{$news->title}}" />
                        </div>
                        <div>
                            <label>Description</label>
                            <input class="form-control" name="des" placeholder="Please Enter Description" value="{{$news->description}}" />
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea id="demo" class="form-control ckeditor" name="content" rows="6" >{{$news->content}}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Image</label>
                            <p><img width="400px" src="upload/news/{{ $news->image }}"> </p>
                            <input  class="form-control" type="file" name="image" />
                        </div>
                        <div class="form-group">
                            <label>Hightlight</label>
                            <label class="radio-inline">
                                <input name="hightlight" value="0"
                                @if($news->hightlight == 0)
                                {{"checked"}}
                                @endif
                                type="radio">no
                            </label>
                            <label class="radio-inline">
                                <input name="hightlight" value="1" 
                                @if($news->hightlight == 0)
                                {{"checked"}}
                                @endif
                                type="radio">yes
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">EDIT</button>
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

@section ('script')
<?php//AJAX CHECK SELECTION?>
<script>
    $(document).ready(function() {
        $("#Theloai").change(function(){
            var idTheLoai = $(this).val();
            $.get("admin/ajax/loaitin/"+idTheLoai, function(data){
             $("#Loaitin").html(data);
            });
        });
    }); 
</script>
@endsection