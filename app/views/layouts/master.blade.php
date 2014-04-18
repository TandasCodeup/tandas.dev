<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Money Carousel is a community savings project">
    <meta name="keywords" content="Savings, financial, grassroots, community, tandas, cundinas, lending circle">
    <meta name="author" content="Travis Meyer, Mitchell Connell and Jaime Velasco">
	 

@yield('topscript')
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato:200,500,200italic,500italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,800italic,400,300,600,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- Custom Theme CSS -->
    <link href="/assets/css/tandas.css" rel="stylesheet">
 

</head>



<body>
   
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{{ action('HomeController@showHome') }}}">
                <span data-icon="a" class="navbarTitle"> Money Carousel</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        @if (Session::has('loginSucc'))
                            <div class="alert alert-success alert-dismissable">{{{ Session::get('successMessage') }}}</div>
                        @endif
                        @if (Session::has('errorMessage'))
                            <div class="alert alert-warning alert-dismissable">{{{ Session::get('errorMessage') }}}</div>
                        @endif
                        @if (Session::has('loginFail'))
                            <div class="alert alert-warning alert-dismissable">{{{ Session::get('loginFail') }}}</div>
                        @endif
                    </li>   
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    @yield('contact')

                    <li>
                        <a href="{{{ action('HomeController@showAbout') }}}">FAQ</a>
                    </li>

                    @if (Auth::check())
                    <li>
                        <a href="{{{ action('UserController@show', Auth::user()->id) }}}">Dashboard</a>
                    </li>                                
                     <li>
                        <a>{{ Auth::user()->email }}</a>
                    </li>
                    <li>
                        <a href="{{{ action('HomeController@logout') }}}"><span class="label label-danger">&nbsp;Logout&nbsp;</span></a>
                    </li> 
                    @else
                    <li class="page-scroll">
                        <a  href="" data-toggle="modal" data-target="#signUpModal">Join</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                        <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                            {{ Form::open(array('action' => 'HomeController@doLogin', 'form-signin')) }}
                            <br>  
                            {{ Form::text('email', null, array('class' => 'form-control' , 'placeholder' => 'Email address', 'required' => 'required')) }}
                            <br>
                            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required')) }}
                            <br>
                            <center>{{ Form::checkbox('name', 'value', 'true') }}<label>&nbsp;&nbsp;Remember me</label></center>
                            <br>
                            {{ Form::submit('Login',  array('class' => 'btn btn-sm btn-info btn-block')) }}
                            {{ Form::close() }}
                            <br>
                                           
                        </ul>
                    </li>
                    @endif
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>




    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    <!-- Alerts fadeout -->

    <script>
		$('.alert').fadeIn();
		setTimeout(function() {
		$('.alert').fadeOut();
		}, 2000);
	</script>

    <!-- Sing-in drop-down script -->
    <script type="text/javascript">
        $(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
});
    </script>



    <!-- Custom Theme JavaScript -->
    <script src="/assets/js/tandas.js"></script>



@yield('bottomscript')



@yield('footer')


<footer>
    <hr>
    <div class="container">    
      <div class="row">
        <div class="col-lg-12">
          <div class="col-md-4">
            <ul class="list-unstyled">
                <li><strong>Money Carousel</strong></li><br>
                <li><a href="#">About us <br></a></li>
                <li><a href="#">Codeup <br></a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Partnerships</a></li>
                
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-unstyled">
              <li><strong>Team Members</strong><li><br>
              <li><a href="#">Travis Meyer</a></li>
              <li><a href="#">Mitchell D Connell</a></li>
              <li><a href="#">Jaime Velasco</a></li>             
            </ul>
          </div>
          <div class="col-md-4 pull">
            <ul class="list-unstyled">
              <li><strong>Address</strong><li><br>

              <li>112 E. Pecan Street, Floor 10, San Antonio, Texas</li>
              <li>Tel 210.555.5555</li>              
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="col-md-5 pull-right">
            <h5 class="muted pull-right">© 2014 Money Carousel</h5>
            <a href="#">Terms of Service</a> |   
            <a href="#">Privacy</a> |  
            <a href="#">Security</a>
          </div>
        </div>
      </div>
    </div>
</footer>


</body>


</html>