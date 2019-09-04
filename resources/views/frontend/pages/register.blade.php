<section id="register" class="vc_row wpb_row vc_row-fluid vc_custom_1484367639856">
    <div class="container">
      <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <div class="custom-header">
              <h2 class="text-center" style="color:;">REGISTER</h2>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <div id="price-carousel">
              <div class="item price-table STUDENT SURF PASS" style="background-color:#f39836">
                <div class="icon">
                  <i class="pe-5x pe-7s-users"></i>
                </div>

                <div class="table-header">
                  <h3>STUDENT SURF PASS</h3>
                  <p class="price">200.000 VNĐ</p>
                </div>

                <ul class="desc list-unstyled">
                  <li>Access to talks, panel discusstions and exhibition area</li>
                  <li> Refreshments provided</li>
                </ul>
              </div>
              <div class="item price-table SURF PASS" style="background-color:#a0cd54">
                <div class="icon">
                  <i class="pe-5x pe-7s-diamond"></i>
                </div>

                <div class="table-header">
                  <h3>SURF PASS</h3>
                  <p class="price">400.000 VNĐ</p>
                </div>

                <ul class="desc list-unstyled">
                  <li>Access to talks, panel discusstions and exhibition area</li>
                  <li>Refreshments provided</li>
                </ul>
              </div>
              <div class="item price-table NETWORKING NIGHT" style="background-color:#43599b">
                <div class="icon">
                  <i class="pe-5x pe-7s-wine"></i>
                </div>

                <div class="table-header">
                  <h3>NETWORKING NIGHT</h3>
                  <p class="price">2.000.000 VNĐ</p>
                </div>

                <ul class="desc list-unstyled">
                  <li>Join Networking dinner </li>
                  <li>Access to talks, panel discussions and exhibition area</li>
                  <li>Refreshments provided</li>
                </ul>
              </div>
              <div class="item price-table PITCHING COMPETITION" style="background-color:#27a4db">
                <div class="icon">
                  <i class="pe-5x pe-7s-car"></i>
                </div>

                <div class="table-header">
                  <h3>PITCHING COMPETITION</h3>
                  <p class="price">N/A</p>
                </div>

                <ul class="desc list-unstyled">

                </ul>
              </div>
            </div>
            <script>
              jQuery(document).ready(function($){
              $("#price-carousel").owlCarousel({
                  itemsCustom : [
          [0, 1],
          [450, 1],
          [600, 2],
          [700, 3],
          [1000, 4],
          [1200, 4],
          ],
                  autoPlay: false,
                  pagination: false
              });
          });
            </script>
            <div class="text-center"><a class="button button-small button-line-dark "
                href="http://bit.ly/surfticket2018" target="">Register now</a></div>
          </div>
        </div>
      </div> --}}
      <div class="container bg-blue">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <form action="{{ route('auth.register') }}" method="post">
          @csrf
          <div class="row">
            <h4>Thông tin thí sinh</h4>
            <div class="input-group input-group-icon">
              <input type="text" placeholder="Họ và tên đệm. VD: Nguyễn Ngọc, Nguyễn Văn.." class="{{ $errors->has('last_name') ? 'is-invalid' : '' }}" value="{{ old('last_name') }}" name="last_name" required/>
              <div class="input-icon"><i class="fa fa-user"></i>
              @if($errors->has('last_name'))
              <div class="error_message">
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
              </div>
              @endif</div>
            </div>
                  <div class="input-group input-group-icon">
              <input type="text" placeholder="Tên. VD: Anh, Trâm, Minh ..." class="{{ $errors->has('first_name') ? 'is-invalid' : '' }}" value="{{ old('first_name') }}" name="first_name" required/>
              <div class="input-icon"><i class="fa fa-user"></i>
              @if($errors->has('first_name'))
              <div class="error_message">
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
              </div>
              @endif
            </div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" placeholder="Tên trường" name="school_name"  class="{{ $errors->has('school_name') ? 'is-invalid' : '' }}" value="{{ old('school_name') }}" required/>
              <div class="input-icon"><i class="fa fa-home"></i></div>
            </div>
            <div class="col-half">
               <h4>Khối</h4>
              <div class="input-group">      
                <select name="grade" value="{{ old('grade') }}" class="{{ $errors->has('grade') ? 'is-invalid' : '' }}">
                  <option value="0">Khối</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                </select>
              </div>
            </div>
            <div class="col-half">
              <h4>Tên lớp</h4>
              <div class="input-group">
                 <input type="text" placeholder="Tên lớp" name="class_name" value="{{ old('class_name') }}"/>
      
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-half">
              <h4>Ngày sinh</h4>
              <div class="input-group">
                <div class="col-third">
                  <input type="number" placeholder="DD" name="day" value="{{ old('day') }}" class="{{ $errors->has('day') ? 'is-invalid' : '' }}" required/>
                </div>
                <div class="col-third">
                  <input type="number" placeholder="MM" name="month" value="{{ old('month') }}" class="{{ $errors->has('month') ? 'is-invalid' : '' }}" required/>
                </div>
                <div class="col-third">
                  <input type="number" placeholder="YYYY" name="year" value="{{ old('year') }}" class="{{ $errors->has('year') ? 'is-invalid' : '' }}" required/>
                </div>
              </div>
            </div>
            <div class="col-half">
              <h4>Giới tính</h4>
              <div class="input-group">
                <input type="radio" name="gender" value="1" @if(old('gender') == '1') checked="true" @endif id="gender-male"/>
                <label for="gender-male">Nam</label>
                <input type="radio" name="gender" value="2" @if(old('gender') == '2') checked="true" @endif id="gender-female"/>
                <label for="gender-female">Nữ</label>
              </div>
            </div>
          </div>
          <div class="row">
            <h4>Cấp độ dự thi</h4>
            <div class="input-group">
              <input type="radio" name="level" value="1" id="level-1" @if(old('level') == '1') checked="true" @endif/>
              <label for="level-1"><span>Cấp độ 1 (Lớp 3 - 5)</span></label>
              <input type="radio" name="level" value="2" id="level-2" @if(old('level') == '2') checked="true" @endif/>
              <label for="level-2"> <span>Cấp độ 2 (Lớp 6 - 8)</label>
            </div>
             <h4>Khu vực dự thi</h4>
            <div class="input-group">
              <input type="radio" name="zone" value="1" id="zone-1" @if(old('zone') == '1') checked="true" @endif/>
              <label for="zone-1"><span>Hà Nội</span></label>
              <input type="radio" name="zone" value="2" id="zone-2" @if(old('zone') == '2') checked="true" @endif/>
              <label for="zone-2"> <span>TP. Hồ Chí Minh</label>
            </div>
            <h4>Thông tin phụ huynh</h4>
            <div class="input-group input-group-icon">
              <input type="text" placeholder="Họ tên phụ huynh" class="{{ $errors->has('parent_name') ? 'is-invalid' : '' }}" name="parent_name" value="{{ old('parent_name') }}"/>
              <div class="input-icon"><i class="far fa-address-card"></i></div>
            </div>
                  <div class="input-group input-group-icon">
              <input type="email" placeholder="Email" name="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" required/>
              <div class="input-icon"><i class="fa fa-envelope"></i>
            </div>
           
            </div>
             <div class="input-group input-group-icon">
              <input type="text" placeholder="SĐT" name="phone" class="{{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') }}" required/>
              <div class="input-icon"><i class="fas fa-mobile-alt"></i>
            </div>
            </div>
      
          </div>
          <div class="row">
            <div class="col-sm-12">
            <button class="btn btn-outline-primary float-right btn-register">Đăng ký</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>