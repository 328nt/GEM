<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DAT DAY | @yield('title')</title>
    <base href="{{ asset('') }}">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body> 
	    <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index">GEM</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Giới thiệu</a>
                        </li>
                        <li>
                            <a href="contact">Liên hệ</a>
                        </li>
                    </ul>
    
                    <ul class="nav navbar-nav pull-right">
                        @if(Auth::check() != true)
                            <li>
                                <a href="register">Đăng ký</a>
                            </li>
                            <li>
                                <a href="login">Đăng nhập</a>
                            </li>
                        @else
                            <li>
                                <a href="account">
                                    <span class ="glyphicon glyphicon-user"></span> Hello 
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
    
                            <li>
                                <a href="logout">Đăng xuất</a>
                            </li>
                        @endif
                    </ul>
                </div>
    
    
                
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
	
        <div class="container">
            <div class="row">
    
                <!-- Blog Post Content Column -->
                <div class="col-lg-9">
    
                    <!-- Blog Post -->
    
                    <!-- Title -->
                    <h1>{{ $news->title }}</h1>
    
                    <!-- Author -->
                    <p class="lead">
                        by <a href="#">Start Bootstrap</a>
                    </p>
    
                    <!-- Preview Image -->
                    <img class="img-responsive" src="upload/news/{{ $news->image }}" alt="">
    
                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time"></span> Posted on: {{ $news->created_at }}</p>
                    <hr>
    
                    <!-- Post Content -->
                    <p class="lead">{!!  $news->content  !!}</p>
    
                    <hr>
    
                </div>
    
                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-3">
    
                    <div class="panel panel-default">
                        <div class="panel-heading"><b>Tin liên quan</b></div>
                        <div class="panel-body">
    
                            <!-- item -->
                            @foreach($allnews as $new)
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-5">
                                    <a href="news/{{ $new->id }}/{{ $new->titlenone }}.html">
                                        <img class="img-responsive" src="upload/news/{{ $new->image }}" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                <a href="news/{{ $new->id }}/{{ $new->titlenone }}.html"><b>{{ $new->title }}</b></a>
                                </div>
                                <p style="padding: 10px;">{{ $new->description }}</p>
                                <div class="break"></div>
                            </div>
                            @endforeach
                            <!-- end item -->
                        </div>
                    </div>
    
                    <div class="panel panel-default">
                        <div class="panel-heading"><b>Tin nổi bật</b></div>
                        <div class="panel-body">
    
                            <!-- item -->
                            @foreach($hightlight as $hl)
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-5">
                                    <a href="news/{{ $hl->id }}/{{ $hl->titlenone }}.html">
                                        <img class="img-responsive" src="upload/news/{{ $hl->image }}" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="#"><b>{{ $hl->title }}</b></a>
                                </div>
                                <p style="padding: 10px;">{{ $hl->description }}</p>
                                <div class="break"></div>
                            </div>
                            @endforeach
                            <!-- end item -->
                    </div>
                    
                </div>
    
            </div>
            <!-- /.row -->
        </div>
        <!-- end Page Content -->

	    <!-- Footer -->
        <hr>
        <footer>
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

    @yield('script')

</body>

</html>
