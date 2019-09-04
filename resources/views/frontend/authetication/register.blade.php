@extends('frontend.authetication.index')
@section('title')
    Đăng ký dự thi
@endsection
@section('content')
<div class="container">
    @if (count($errors)>0)
        @foreach ($errors->all() as $err)
            <div class="alert alert-danger">
                {{$err}}
            </div>
        @endforeach
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p class="title">Đăng ký dự thi</p></div>

                <div class="card-body">
                    <form method="POST" action="register">
                        @csrf
                        <div>Thông Tin thí sinh</div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tên') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Ví dụ: Thu, Huy.."
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname"
                                class="col-md-4 col-form-label text-md-right">{{ __('Họ đệm') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" placeholder="Ví dụ: Nguyễn Thị, Trần Minh..."
                                    class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                    value="{{ old('lastname') }}" required autocomplete="lastname">

                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday"
                                class="col-md-4 col-form-label text-md-right">{{ __('Ngày sinh') }}</label>

                            <div class="col-md-6">
                                <div class="col-third">
                                    <input type="number" placeholder="DD" name="day" value="{{ old('day') }}"
                                        class="{{ $errors->has('day') ? 'is-invalid' : '' }}" required />
                                </div>
                                <div class="col-third">
                                    <input type="number" placeholder="MM" name="month" value="{{ old('month') }}"
                                        class="{{ $errors->has('month') ? 'is-invalid' : '' }}" required />
                                </div>
                                <div class="col-third">
                                    <input type="number" placeholder="YYYY" name="year" value="{{ old('year') }}"
                                        class="{{ $errors->has('year') ? 'is-invalid' : '' }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Tối thiểu 6 ký tự"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Nhập lại mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="repassword" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address"
                                class="col-md-4 col-form-label text-md-right">{{ __('Địa chỉ') }}</label>

                            <div class="col-md-6">
                                <input id="address" placeholder="Ví dụ: 128 Nguyễn Thái Học" type="text"
                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                    value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="district"
                                class="col-md-4 col-form-label text-md-right">{{ __('Quận, Huyện') }}</label>

                            <div class="col-md-6">
                                <input id="district" placeholder="Ví dụ: Đống Đa" type="text"
                                    class="form-control @error('district') is-invalid @enderror" name="district"
                                    value="{{ old('district') }}" required autocomplete="district">

                                @error('district')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city"
                                class="col-md-4 col-form-label text-md-right">{{ __('Tỉnh, Thành phố') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" placeholder="Ví dụ: Hà Nội.."
                                    class="form-control @error('city') is-invalid @enderror" name="city"
                                    value="{{ old('city') }}" required autocomplete="city">

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6" style="text-align: right">
                                    <label for="class" class="col-md-4 col-form-label">{{ __('Lớp') }}</label>
                                        <input id="class" type="text" class="right form-control @error('class') is-invalid @enderror"
                                            name="class" value="{{ old('class') }}" required autocomplete="class">
                                        @error('class')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                            </div>
                            <div class="col-md-6">
                            <label for="grade" class="col-md-4 col-form-label">{{ __('Khối') }}</label>
                                <input id="grade" type="text" class="right form-control @error('grade') is-invalid @enderror"
                                    name="grade" value="{{ old('grade') }}" required autocomplete="grade">
                                @error('grade')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school" class="col-md-4 col-form-label text-md-right">{{ __('Trường') }}</label>

                            <div class="col-md-6">
                                <input id="school" type="text"
                                    class="form-control @error('school') is-invalid @enderror" name="school"
                                    value="{{ old('school') }}" required autocomplete="school">

                                @error('school')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div>Thông tin phụ huynh</div>
                        <div class="form-group row">
                            <label for="parentname"
                                class="col-md-4 col-form-label text-md-right">{{ __('Tên phụ huynh') }}</label>

                            <div class="col-md-6">
                                <input id="parentname" type="text" placeholder="Ví dụ: Trần Văn Mùi"
                                    class="form-control @error('parentname') is-invalid @enderror" name="parentname"
                                    value="{{ old('parentname') }}" required autocomplete="parentname">

                                @error('parentname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('Địa chỉ Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Ví dụ: abc@gmail.com"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile"
                                class="col-md-4 col-form-label text-md-right">{{ __('Số điện thoại phụ huynh') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="number" placeholder="Ví dụ: 0988888888"
                                    class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                    value="{{ old('mobile') }}" required autocomplete="mobile">

                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Đăng ký') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection