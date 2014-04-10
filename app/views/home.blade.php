@extends('layouts.master')


@section('content')
    <section class="intro">
        <div class="intro-body">
            <div class="hr"><hr /></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Money Carousel</h1>
                        <p class="intro-text">What goes around comes around</p>
                        <div class="page-scroll">
                            <center><a href="#about" class="btn btn-circle">
                                <i data-icon="a"></i>
                            </a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Money Carousel</h2>
                <p>A trust-based lending circle where everyone saves and when its their turn, gets paid.</p>
                <p>Through our Trust Ratings System, users can create a reputation.</p>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-4" >
                <div id="circle1" class="circle"></i><h1 class="niceicons"><i data-icon="c"></i></h1></div>
            </div>
            <div class="col-lg-4" >    
                <div id="circle2" class="circle"></i><h1 class="niceicons"><i data-icon="d"></i></h1></div>
            </div>
            <div class="col-lg-4" >
                <div id="circle3" class="circle"><h1 class="niceicons"><i data-icon="b"></i></h1></div>
            </div>
        </div>
    </section>
  

    <section id="Join" class="container-fluid">    
     <div class="Join-section">        
        <div class="row">
                
           <div class="col-xs-12 col-sm-6 col-md-offset-3 well well-lg">
                <h1 data-icon="a"></h1>
                <legend>Sign up!</legend>
                    {{ Form::open(array('action' => 'UserController@store', 'class' => 'form')) }}   
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                    {{ Form::text('first_name', null, array('class' => 'form-control' , 'name' => 'firstname', 'placeholder' => 'First Name', 'required' => 'required')) }}        
                    </div>
                    <div class="col-xs-6 col-md-6">
                   {{ Form::text('last_name', null, array('class' => 'form-control' , 'name' => 'lastname', 'placeholder' => 'Last Name', 'required' => 'required')) }}
                    </div>
                </div>
                <br>
                <div class="col-xs-12 col-md-12">
                    {{ Form::text('email1', null, array('class' => 'form-control' , 'name' => 'youremail', 'placeholder' => 'Your Email', 'required' => 'required')) }}
                    <br>               
                    {{ Form::text('email2', null, array('class' => 'form-control' , 'name' => 'reenteremail', 'placeholder' => 'Confirm Email address', 'required' => 'required')) }}
                    <br>               
                    {{ Form::password('pass1', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required')) }}
                    <br>                
                    {{ Form::password('pass2', array('class' => 'form-control', 'placeholder' => 'Confirm Password', 'required' => 'required')) }}
                    <br>                          
                </div>
                <br/>
              
                <div class="col-xs-12 col-md-6 col-md-offset-3 ">
                {{ Form::submit('Sign Up',  array('class' => 'btn btn-md btn-primary btn-block')) }}
                {{ Form::close() }}
                </div>
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

@stop