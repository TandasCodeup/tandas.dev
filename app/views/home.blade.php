@extends('layouts.master')


@section('content')
    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="brand-heading">Money Carousel</h1>
                        <p class="heading"><strong>What goes around comes around.</strong> A trust-based lending circle where everyone saves, and when it’s their turn, gets paid.</p>
                        <div class="page-scroll">
                            <center>
                                <button type="button" class="btn btn-default btn-lg" class="page-scroll">
                                    <a href="#about">Learn More About Money Carousel</a> 
                                </button>
                                <br><br><br>
                                <div class="col-lg-8 col-lg-offset-2">  
                                <!-- Button trigger modal -->
                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#signUpModal">
                                      Join Money Carousel
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                          <div class="modal-body">
                                            <div class="col-xs-12 well">
                                                <h1 data-icon="a"></h1>
                                                    <legend>Sign up!</legend>
                                                        {{ Form::open(array('action' => 'UserController@store', 'class' => 'form')) }}   
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-6">
                                                        {{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name', 'required' => 'required')) }}        
                                                    </div>
                                                    <div class="col-xs-6 col-md-6">
                                                        {{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name', 'required' => 'required')) }}
                                                    </div>
                                                </div>
                                                    <br>
                                                <div class="col-xs-12 col-md-12">
                                                    {{ Form::text('email1', null, array('class' => 'form-control', 'placeholder' => 'Your Email', 'required' => 'required')) }}
                                                    <br>               
                                                    {{ Form::text('email2', null, array('class' => 'form-control', 'placeholder' => 'Confirm Email address', 'required' => 'required')) }}
                                                    <br>               
                                                    {{ Form::password('pass1', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required')) }}
                                                    <br>                
                                                     {{ Form::password('pass2', array('class' => 'form-control', 'placeholder' => 'Confirm   Password', 'required' => 'required')) }}
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
                                      </div>
                                </div>
                            </center>
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
                <br><br><br>
            </div>
        </div>
        <!-- Button trigger firstModal -->
        <div class="col-lg-4">
            <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modal1">
              What Is Money Carousel?
            </button>
            <br>
            <br>
        </div>
        <!-- Button trigger secondModal -->
        <div class="col-lg-4">
            <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modal2">
              How It Works
            </button>
            <br>
            <br>
        </div>

        <!-- Button trigger thirdModal -->
        <div class="col-lg-4">
            <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modal3">
              What’s the advantage?
            </button>
            <br>
            <br>
        </div>    
    </section>








        <!-- First Modal -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">What Is Money Carousel?</h4>
                    </div>
                        <div class="modal-body">
                            <p>On a carousel, what goes around comes around. And when we’re talking about money, it’s 
                            pretty great when it comes your way. 
                            Money Carousel is a trust-based lending circle where friends, family members and even strangers can help each other save money for vacations, emergencies or even a down payment on a car or yacht. OK, maybe not a yacht. 
                            But depending on the amount of money each person contributes, when the carousel comes your way, the payout could be substantial.
                            </p>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Second Modal -->
        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">How It Works</h4>
                </div>
                    <div class="modal-body">
                        <p>Lending circles — called tandas in Latin America — have a long history in cultures across the globe. But until the Internet, such circles were conducted face-to-face or through snail mail. 
                        The concept is this: A group of people form a lending circle and contribute a set amount of money per month. Each month, someone in the circle gets the whole pot of money, kind of like landing on Free Parking in a game of Monopoly. 
                        So if there are 12 people in the lending circle and everyone throws in $100 per week, someone will receive a payout of $1,200 every week. With 12 people in the circle, the money carousel would come your way every three months.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
               


        <!-- Third Modal -->
        <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">What’s the advantage?</h4>
                    </div>
                    <div class="modal-body">
                        <p>The idea behind a lending circle is that it helps you save money without being tempted to raid your own cookie jar. 
                        When you really DO need or want the money, it will be available to you at no interest, a much smarter option than a predatory, high-interest payday loan and a much easier option than trying to get a loan from a bank. 
                        The advantage of using Money Carousel is that it allows you to conduct financial transactions online through PayPal. You can set up the carousel to draft elecronically from your PayPal account each week or month, and when it’s your turn to receive the payout, the lump sum will deposit directly into your account. 
                        Best of all, unlike the old days, we can help you connect with like-minded people you may not know in person, but who have similar goals. Want to start a small business? Join a carousel where the contributions are larger, but so is the payout.
                        </p>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                </div>
            </div>
        </div>

        



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
    

    <div id="footer">
        <div class="container">
            <div class="row">
                <h3 class="footertext">Team Tanda:</h3>
                <br>
                <div class="col-md-4">
                    <center>
                        <img src="http://oi60.tinypic.com/w8lycl.jpg" class="img-circle" alt="the-brains">
                        <br>
                            <h4 class="footertext">Programmer</h4>
                        <p class="footertext">You can thank all the crazy programming here to this guy.<br>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" alt="...">
                        <br>
                            <h4 class="footertext">Artist</h4>
                        <p class="footertext">All the images here are hand drawn by this man.<br>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle" alt="...">
                        <br>
                            <h4 class="footertext">Designer</h4>
                        <p class="footertext">This pretty site and the copy it holds are all thanks to this guy.<br>
                    </center>
                </div>
                <div class="row">
                    <p><center><a href="#">Contact Stuff Here</a> <p class="footertext">Copyright 2014</p></center></p>
                </div>
            </div>
        </div>
    </div>

@stop
