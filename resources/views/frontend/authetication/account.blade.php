@extends('frontend.authetication.index')
@section('title')
Thông tin thí sinh
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

@section('content')
<div class="container">
        <div class="row carousel-holder">
            @if (count($errors)>0)
                @foreach ($errors->all() as $err)
                    <div class="alert alert-danger">
                        {{$err}}
                    </div>
                @endforeach
            @endif
            @if (session('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
            @endif
        </div>
    <div class="row carousel-holder">
        <div class="col-md-4">
            @if ($scores == Null)
                Banj chwa co didemr
            @else
                
            <p>Điểm của bạn là: {{$scores}} </p>
            @endif
            @if ($user->link == null)

            <p>Bạn chưa cập nhật link video bài thi</p>
            @else
            <p>Link dự thi của bạn</p><br>
            <p><a href="{{$link = $user->link}}">{{$link}}</a></p>
                    @if (substr($link, 12, 7) === 'youtube')
                        
                <iframe width="100%" height="40%" src="https://www.youtube.com/embed/{{substr($link,-11)}}"></iframe>
                    @else
                <embed width="100%" src="https://drive.google.com/file/d/{{substr($link,-33)}}/preview">
                    @endif
            <br>
            @endif
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Thông tin thí sinh</div>
                        <hr>
                        <div class="panel-body">
                            <div>
                                <label>Họ tên</label>
                                <input type="text" class="form-control" placeholder="Username" name="name"
                                    aria-describedby="basic-addon1" value="{{ $user->fullname }}" disabled>
                            </div>
                            <div>
                                <label>Ngày sinh</label>
                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                    value="{{ $user->birthday }}" disabled>
                            </div>
                            <div>
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                    value="{{ $user->address }} {{ $user->district }} {{ $user->city }}"
                                    disabled>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <label>Lớp</label>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1"
                                        value="{{ $user->class }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label>Khối</label>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1"
                                        value="{{ $user->grade }}" disabled>
                                </div>
                            </div>
                            <div>
                                <label>Trường</label>
                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                    value="{{ $user->school }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Thông Tin Phụ Huynh</p>
                    <hr>
                    <div>
                        <label>Tên bố(mẹ)</label>
                        <input type="text" class="form-control" aria-describedby="basic-addon1" disabled
                            value="{{ $user->parentname }}">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" class="form-control" value="{{ $user->email }}"
                            aria-describedby="basic-addon1" disabled>
                    </div>
                    <div>
                        <label>Số điện thoại liên lạc</label>
                        <input type="email" class="form-control" value="{{ $user->mobile }}"
                            aria-describedby="basic-addon1" disabled>
                    </div>
                    <hr>
                    <div>
                        <p>Nếu có bất cứ thông tin nào sai xin vui lòng liên hệ với IEG theo hotline: 1900.0000</p>
                    </div>
                </div>
            </div>
            <hr>
            <form action="account/{{$user->id}}" method="post">
                {{ csrf_field() }}
                <div><b>Các bạn vui lòng cập nhật link video dự thi</b></div>
                <div>
                    <label>Link dự thi (link Youtube hoặc driver)</label>
                    <input type="text" class="form-control" placeholder="Youtube.com/abcxyz" name="link"
                        aria-describedby="basic-addon1">
                </div>
                <button type="submit" class="btn btn-default">Cập nhật link dự thi</button>
            </form>
        </div>
    </div>
</div>
@endsection