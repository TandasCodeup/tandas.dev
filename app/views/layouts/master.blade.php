<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tandas website">
    <meta name="author" content="Codeup Team">
	 

@yield('topscript')
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/united/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato:200,500,200italic,500italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,800italic,400,300,600,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,900italic' rel='stylesheet' type='text/css'>
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
                <a class="navbar-brand" href="#page-top">
                <span data-icon="a" class="light"> Money Carousel</span>
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
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#Join">Join</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                     @if (Auth::check())
                     <li>
                        <a href="{{{ action('HomeController@logout') }}}"><span class="label label-warning" >Logout&nbsp;{{ Auth::user()->email }}</span></a>
                    </li> 
                    <li>
                        <a href="{{{ action('UserController@show', Auth::user()->id) }}}">Dashboard</a>
                    </li>                                
                    @else
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                        <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                            {{ Form::open(array('action' => 'HomeController@doLogin', 'form-signin')) }}
                            <br>  
                            {{ Form::text('email', null, array('class' => 'form-control' , 'placeholder' => 'Email address', 'required' => 'required')) }}
                            <br>
                            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required')) }}
                            <br>
                            <center></center>enter<label>{{ Form::checkbox('name', 'value', 'true') }} Remember Me</label></center>
                            <br>
                            {{ Form::submit('Login',  array('class' => 'btn btn-sm btn-info btn-block')) }}
                            {{ Form::close() }}
                            <br>
                            <center><a id= "fg" href="#">Forgot password?</a></center>                 
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
    
    <script>
		$('.alert').fadeIn();
		setTimeout(function() {
		$('.alert').fadeOut();
		}, 2000);
	</script>
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



</body>
</html>