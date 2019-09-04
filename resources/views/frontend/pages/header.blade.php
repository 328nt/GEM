<nav id="nav-primary" class="navbar navbar-custom" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index" title="GEM" class="scroll-to">
          <img height="80px" src="frontend/wp-content/uploads/GEM/logo.png"
            alt="GEM" />
        </a>
      </div>

      <div id="nav" class="collapse navbar-collapse">
        <ul id="menu-primary" class="nav navbar-nav navbar-right">
          <li id="menu-item-1227"
            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1227 active">
            <a title="Home" href="index.html#slider">TRANG CHỦ</a></li>
          <li><a href="index.html#program">GIỚI THIỆU</a></li>
          <li><a href="index.html#speakers">Speakers</a></li>
          <li><a href="index.html#venue">Venue</a></li>
          <li id="menu-item-815"
            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-815 active">
            <a title="Sponsors" href="index.html#partners">Sponsors</a></li>
          <li id="menu-item-820" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-820"><a
              title="News" href="news/index.html#news">News</a></li>
              {{-- @if (Auth::check())
              <li>
                <a href="account">
                    <span class ="glyphicon glyphicon-user"></span> Hello 
                    {{ Auth::user()->name }}
                </a>
            </li>

            <li>
                <a href="logout">Đăng xuất</a>
            </li>
              @else
              <li><a href="login">ĐĂNG NHẬP</a></li>
              <li><a href="index.html#register">ĐĂNG KÝ</a></li>
              @endif --}}
                    @if(Auth::check())
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>Hello {{ Auth::user()->name}}  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }}</a>
                    </li>
                  <li><a href="account/{{ Auth::user()->id }}"><i class="fa fa-gear fa-fw"></i> update Link</a>
                    </li>
                    <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            @else
            <li><a href="login">ĐĂNG NHẬP</a></li>
            <li><a href="register">ĐĂNG KÝ</a></li>
            @endif
          {{-- <li id="menu-item-2017" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2017"><a title="FAQs" href="faqs/index.html">FAQs</a></li>
<li id="menu-item-1274" class="qtranxs-lang-menu qtranxs-lang-menu-vi menu-item menu-item-type-custom menu-item-object-custom menu-item-1274"><a title="Tiếng Việt" href="vi/index.html"><span class="glyphicon Tiếng Việt"></span>&nbsp;Tiếng Việt</a></li> --}}
        </ul>
      </div>
    </div>
  </nav>