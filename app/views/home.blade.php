@extends('layouts.master')


@section('content')
    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 data-icon="a"></h1>
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
  

    <section id="Join" class="container-fluid">
    
     <div class="Join-section" id="Join-section">
        <h3 class="col-md-12 col-md-12" >Sign up</h3>        
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                
                    {{ Form::open(array('action' => 'UserController@store', 'class' => 'Join-section')) }}       
                    {{ Form::text('first_name', null, array('class' => 'form-control' , 'placeholder' => 'First Name', 'required' => 'required')) }}
                    {{ Form::text('last_name', null, array('class' => 'form-control' , 'placeholder' => 'Last Name', 'required' => 'required')) }}
                    {{ Form::text('email1', null, array('class' => 'form-control' , 'placeholder' => 'Email address', 'required' => 'required')) }}
                    {{ Form::text('email2', null, array('class' => 'form-control' , 'placeholder' => 'Confirm Email address', 'required' => 'required')) }}
                    {{ Form::password('pass1', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required')) }}                
                    {{ Form::password('pass2', array('class' => 'form-control', 'placeholder' => 'Confirm Password', 'required' => 'required')) }}                  
                    {{ Form::submit('Sign Up',  array('class' => 'btn btn-lg btn-primary btn-block')) }}
                    {{ Form::close() }}  
                   
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