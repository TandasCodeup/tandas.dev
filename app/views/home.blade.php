@extends('layouts.master')

@section('content')
    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">tandas</h1>
                        <p class="intro-text">Tandas is a trust-based, community-centered savings/credit association</p>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About tandas</h2>
                <p>tandas is a trust-based community-centered savings/credit association</p>
                <p>Through our Trust Ratings System, users can create a reputation.</p>
                <br>
                <br>
                <br>
            </div>
        </div>
    </section>

    <section id="Join" class="content-section text-center">
        <div class="Join-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Join tandas</h2>
                    <p>You can join Tandas and start your own, save for a few montsh and build your reputation so you can have access to larger Tandas, with maybe several recipients a month or something.</p>
                    <a href="http://tandas.com" class="btn btn-default btn-lg">Visit Join Page</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Tandas team</h2>
                <p>Feel free to email us to provide some feedback on our website, give us suggestions for new features or omproovements, or to just say hello!</p>
                <p>feedback@tandas.com</p>
                <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/Tandas" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="https://github.com/TandasCodeup/tandas.dev" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li><a href="https://plus.google.com/TandasCodeup" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div id="login"></div>
     <div class="omb_login">
    	<h3 class="omb_authTitle">Login or <a href="#">Sign up</a></h3>
		<div class="row omb_row-sm-offset-3 omb_socialButtons">
    	    <div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
			        <i class="fa fa-facebook visible-xs"></i>
			        <span class="hidden-xs">Facebook</span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
			        <i class="fa fa-twitter visible-xs"></i>
			        <span class="hidden-xs">Twitter</span>
		        </a>
	        </div>	
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-google">
			        <i class="fa fa-google-plus visible-xs"></i>
			        <span class="hidden-xs">Google+</span>
		        </a>
	        </div>	
		</div>

		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">or</span>
			</div>
		</div>

		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">				   
				{{ Form::open(array('action' => 'HomeController@doLogin', 'form-signin')) }}       
                    {{ Form::text('email', null, array('class' => 'form-control' , 'placeholder' => 'Email address', 'required' => 'required', 'autofocus')) }}
                    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required')) }} 
                    {{ Form::submit('Login',  array('class' => 'btn btn-lg btn-primary btn-block')) }}
                {{ Form::close() }}
			</div>
    	</div>
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-3">
				<label class="checkbox">
					<input type="checkbox" value="remember-me">Remember Me
				</label>
			</div>
			<div class="col-xs-12 col-sm-3">
				<p class="omb_forgotPwd">
					<a href="#">Forgot password?</a>
				</p>
			</div>
		</div>	    	
	</div>
@stop