<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Grayscale - Start Bootstrap Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{URL::asset('jigibigs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{URL::asset('jigibigs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700')}}" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->
        {{--  <link href="jigibigs/css/grayscale.css" rel="stylesheet">  --}}
        {{--  <link rel="stylesheet" type="text/css" ref="{{ asset('/jigibigs/css/grayscale.css') }}" >  --}}

        <link rel="stylesheet" href="{{URL::asset('jigibigs/css/grayscale.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="index.php">
                        <i class="fa fa-play-circle"></i> Flood<span class="light"> Detection System</span> 
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/level">Water Level</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        @yield('content')
        <!-- Footer -->
        <footer>
            <div class="container text-center">
                <small>Copyright &copy; FDS 2018</small>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="jigibigs/jquery/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="jigibigs/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="jigibigs/js/grayscale.min.js"></script>

    </body>

</html>
