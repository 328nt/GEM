
@extends('frontend.authetication.index')
@section('title')
    Tra cứu điểm thi
@endsection
@section('content')
    
<form action="search" method="post">
    {{ csrf_field() }}
    <div>
      <input type="text" name="search" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
</form>
@endsection