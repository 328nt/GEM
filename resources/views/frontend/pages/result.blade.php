@extends('frontend.authetication.index')
@section('title')
Kết quả tra cứu
@endsection
    @section('content')
        <!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337AB7; color:white;">
                    <h4><b>Ket qua: {{ $search }}</b></h4>
                </div>
                {{-- {{dd($user)}} --}}
                @if ($user == null)
                    Không có thí sinh nào mang số báo danh
                @else

                @foreach($user as $u)
                Thí sinh: {{$u->name}}
                @endforeach 
                <br>
                @foreach($scores as $s)
                 Đã đạt {{$s->scores}} Điểm
                @endforeach
                    
                @endif

            </div>
        </div>

    </div>

</div>
<!-- end Page Content -->
@endsection