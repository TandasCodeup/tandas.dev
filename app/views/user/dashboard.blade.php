@extends('layouts.master')

@section('topscript')

  <style type="text/css">

    body{
        padding-top: 5%;
    }
  
    /*Big Buttons CSS*/
  
    .pic {
        margin-top:50px; 
        width:120px;
        margin-left:50px;
        margin-bottom:-60px;
    }
  
    .back {
        background-image:url("http://autoimagesize.com/wp-content/uploads/2014/01/rainbow-aurora-background-wallpaper-colour-images-rainbow-background.jpg");
    }
    
    .name {
        position:absolute;
        padding-left:200px;
        font-size:30px;
        color: black;
    }
    
    
    .hero-widget {
        text-align: center; 
        padding-top: 20px; 
        padding-bottom: 20px;
        color: darkgray; 
    }
  
    .hero-widget .icon {
        display: block; 
        font-size: 96px; 
        line-height: 96px; 
        margin-bottom: 10px; 
        text-align: center; 
        color: black;
    }
  
    .hero-widget var {
        display: block; 
        height: 64px; 
        font-size: 64px; 
        line-height: 64px; 
        font-style: normal; 
    }
  
    .hero-widget label {
        font-size: 17px; 
    }
  
    .hero-widget .options {
        margin-top: 10px; 
    }
    
    /*User Modal CSS*/
    
    .user-row {
        margin-bottom: 14px;
    }
    
    .user-row:last-child {
        margin-bottom: 0;
    }
    
    .dropdown-user {
        margin: 13px 0;
        padding: 5px;
        height: 100%;
    }
    
    .dropdown-user:hover {
        cursor: pointer;
    }
    
    .table-user-information > tbody > tr {
        border-top: 1px solid rgb(221, 221, 221);
    }
    
    .table-user-information > tbody > tr:first-child {
        border-top: 0;
    }
    
    
    .table-user-information > tbody > tr > td {
        border-top: 0;
    }
    
    /*Carrousel Modal*/
    
    .glyphicon-lg {
        font-size:3em
    }
  
    .blockquote-box {
        border-right:5px solid #E6E6E6;
        margin-bottom:25px
    }
  
    .blockquote-box .square {
        width:100px;
        min-height:50px;
        margin-right:22px;
        text-align:center!important;
        background-color:#E6E6E6;padding:20px 0
    }
  
    .blockquote-box.blockquote-primary {
        border-color:#357EBD
    }
  
    .blockquote-box.blockquote-primary .square { 
        background-color:#428BCA;
        color:#FFF
    }
  
    .blockquote-box.blockquote-success {
        border-color:#4CAE4C
    }
  
    .blockquote-box.blockquote-success .square {
        background-color:#5CB85C;
        color:#FFF
    }
  
    .blockquote-box.blockquote-info {
        border-color:#46B8DA
    }
  
    .blockquote-box.blockquote-info .square {
        background-color:#5BC0DE;
        color:#FFF
    }
  
    .blockquote-box.blockquote-warning {
        border-color:#EEA236
    }
  
    .blockquote-box.blockquote-warning .square {
        background-color:#F0AD4E;
        color:#FFF
    }
  
    .blockquote-box.blockquote-danger {
        border-color:#D43F3A
    }
  
    .blockquote-box.blockquote-danger .square {
        background-color:#D9534F;color:#FFF
    }

</style>

@stop

@section('content')

    <div class="container">
        <div class="row well">
            <div class="col-md-12">
                <div class="panel back">
                    <img class="pic img-circle" src="http://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/twDq00QDud4/s120-c/photo.jpg" alt="...">
                    <div class="name"><small>User Dashboard for {{{ Auth::user()->first_name }}} {{{ Auth::user()->last_name }}}</small></div>   
                </div>
                <br>
                <br>     
                <div class="row">

                    <!-- First Panel -->
                    <div class="col-sm-4">
                        <div class="hero-widget well well-sm">
                            <div class="icon">
                                <i data-icon="a"></i>
                            </div>
                            <div class="text">
                                <var>{{{ count($tandaList) }}}</var>
                                <label class="text-muted">
                                    @if (count($tandaList) == 1)
                                        Carousel
                                    @else
                                        Total Carousels
                                    @endif
                                </label>
                            </div>
                            <br>
                            <div class="row">
                                <button class="btn btn-default btn-md" data-toggle="modal" data-target="#currentTandaModal"><i class="glyphicon glyphicon-search"></i> View All Carousels</button>
                            </div>
                        </div>
                    </div>

                    <!-- Second Panel -->
                    <div class="col-sm-5">
                        <div class="hero-widget well well-sm">
                            <div class="icon">
                                <i data-icon="d"></i>
                            </div>
                            <div class="text">
                                <var>{{{ count($user->tandas )}}}</var>
                                <label class="text-muted">Your Active Carousels</label>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    <button class="btn btn-default btn-md" data-toggle="modal" data-target="#viewYourCarousels"><i class="glyphicon glyphicon-search"></i> View Your Carousels</button>
                                </div>
                                <div class="col-sm-2" style="margin-left: 37%">
                                    <button class="btn btn-default btn-md" data-toggle="modal" data-target="#createTandaModal"><i class="glyphicon glyphicon-pencil"></i> Create A Carousel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Third Panel -->
                    <div class="col-sm-3">
                        <div class="hero-widget well well-sm">
                            <div class="icon">
                                <img src="http://png.findicons.com/files/icons/99/office/128/calendar.png" alt="calendar,date,schedule">
                            </div>
                            <div class="text">
                                <var>$100</var>
                                <label class="text-muted">Payment Due</label>
                            </div>
                            <div class="row">
                                <a href="javascript:;" class="btn btn-default btn-md" data-toggle="modal" data-target="#payModal"><i class="glyphicon glyphicon-search"></i> Make Payment</a>
                                <div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">                          
                                <div class="container">
                                  <div class="row">
                                      <div class="col-xs-12 col-md-9">
                                          <div class="panel panel-default">
                                              <div class="panel-heading">
                                                  <h3 class="panel-title">
                                                      Payment Details
                                                  </h3>
                                                  <div class="checkbox pull-right">
                                                      <label>
                                                          <input type="checkbox" />
                                                          Remember
                                                      </label>
                                                  </div>
                                              </div>
                                              <div class="panel-body">
                                                  <form role="form">
                                                  <div class="form-group">
                                                      <label for="cardNumber">
                                                          CARD NUMBER</label>
                                                      <div class="input-group">
                                                          <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                                              required autofocus />
                                                          <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-xs-6 col-md-4">
                                                          <div class="form-group">
                                                              <label for="expityMonth">
                                                                  EXPIRY DATE</label>
                                                             
                                                                  <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                                        
                                                                  <input type="text" class="form-control" id="expityYear" placeholder="YY" required />
                                                          </div>
                                                      </div>
                                                      <div class="col-xs-5 col-md-5 pull-right">
                                                          <div class="form-group">
                                                              <label for="cvCode">
                                                                  CV CODE</label>
                                                              <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                                                          </div>
                                                      </div>
                                                  </div>
                                                  </form>
                                              </div>
                                          </div>
          
                                          <br/>
                                          <div class="col-xs-6 col-md-12">
                                          <center><a href="http://www.jquery2dotnet.com" class="btn btn-success btn-lg btn-block" role="button">Pay</a></center>
                                          </div>
                                      </div>
                                  </div>
                              </div>
    
                              </div>
                            </div>
                         </div>
                        </div>
                </div>
          </div>
            
        </div>
      </div>         
      </div>
    </div>
    
    <!-- Create Carousel Modal -->
    <div class="modal fade bs-example-modal-lg" id="createTandaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="col-xs-12 col-sm-6 col-md-offset-3 well well-lg">
                    <legend>Create a new Carousel</legend>
                    {{ Form::open(array('action' => 'TandaController@store', 'class' => 'form')) }}
                    <br>
                    <div class="col-xs-12 col-md-12">
                        {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Carousel Title', 'required' => 'required')) }}
                        <br>               
                        <center><label>{{ Form::select('user_num', array('5' => '5', '10' => '10')) }} Carousel members</label></center>
                        <br>              
                        {{ Form::text('payout', null, array('class' => 'form-control', 'placeholder' => 'User Payout', 'required' => 'required')) }}
                        <br>
                        <div class="col-xs-12 col-md-6 col-md-offset-3 ">
                            {{ Form::submit('Create Carousel',  array('class' => 'btn btn-md btn-primary btn-block')) }}
                            {{ Form::close() }}                          
                        </div>
                    </div>
                    <br>
                </div>    
            </div>
        </div>
    </div>
    <!-- End Create Carousel Modal -->
    
    <!-- View All Carousels Modal -->
    <div class="modal fade" id="currentTandaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Ongoing Carousels</h4>
                </div>
                <div class="modal-body">
                    @foreach ($tandaList as $tanda)
                        <div class="row user-row">
                            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-11">
                                @if ($tanda->begun == true)
                                    <? $color = 'green';
                                    $dateText = "Began at: {$tanda->began_at}";?>
                                @else
                                    <? $color = 'black';
                                    $dateText = "Created at: {$tanda->created_at}";?>
                                @endif
                                <strong style="color: {{{ $color }}}">{{{ $tanda->title }}}</strong>
                                <span class="text-muted">Number of Users: {{{ count($tanda->users) }}} / {{{ $tanda->user_num }}} | {{{ $dateText }}}</span>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".tanda{{{ $tanda->id }}}">
                                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                            </div>
                        </div>
                        <div class="row col-sm-8 user-infos tanda{{{ $tanda->id }}}">
                            <div class="row">
                                <div class="col-sm-3"><small>PAY PER USER</small><br><b>${{{ $tanda->pay_per_user }}}</b></div>
                                <div class="col-sm-2"><small>PAYOUT</small><br><b>${{{ $tanda->payout }}}</b></div>
                                <? $isIn = false; ?>
                                @foreach ($tanda->users as $user)
                                    @if ($user->id == Auth::user()->id)
                                        <? $isIn = true;
                                        break; ?>
                                    @endif
                                @endforeach
                                @if ($isIn == false)
                                    <div class="col-sm-4">
                                        {{ Form::open(array('action' => array('TandaController@update', $tanda->id), 'method' => 'PUT')) }}
                                            {{ Form::submit('Join', array('class' => 'btn btn-default btn-md')) }}
                                        {{ Form::close() }}
                                    </div>
                                @endif
                            </div>
                            <br>
                            <p style="margin: 0px">Users Associated:</p>
                            <br>
                            <ul class="thumbnails">
                                <div class="caption">
                                    @foreach ($tanda->users as $user)
                                        <div class="row user-row">
                                            <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                                                <img class="img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50" alt="User Pic">
                                            </div>
                                            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                                                <strong>{{{ $user->email }}}</strong>
                                                <span class="text-muted">Trust Rating: {{{ $user->trust_rate }}}</span>
                                            </div>
                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".{{{ $user->id }}}">
                                                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                                            </div>
                                        </div>
                                        <div class="row user-infos {{{ $user->id }}}">
                                            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">User Information</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                                                <img class="img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" alt="User Pic">
                                                            </div>
                                                            <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                                                <strong>{{{ $user->first_name }}}</strong>
                                                                <br>
                                                                <dl>
                                                                    <dt>Registered Since:</dt>
                                                                        <dd>{{{ $user->created_at }}}</dd>
                                                                    <dt>Carousels:</dt>
                                                                        <dd>{{{ count($user->tandas )}}}</dd>
                                                                    <dt>Trust Rating:</dt>
                                                                        <dd>{{{ $user->trust_rate }}}</dd>
                                                                </dl>
                                                            </div>
                                                            <div class="col-md-9 col-lg-9 hidden-xs hidden-sm">
                                                                <strong>{{{ $user->first_name }}}</strong>
                                                                <table class="table table-user-information">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Registered Since:</td>
                                                                            <td>{{{ $user->created_at }}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Carousels:</td>
                                                                            <td>{{{ count($user->tandas) }}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Trust Rating:</td>
                                                                            <td>{{{ $user->trust_rate }}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                        <div class="row"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End View All Carousels Modal -->

    <!-- View Your Carousels Modal -->
    <div class="modal fade" id="viewYourCarousels" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Ongoing Carousels</h4>
                </div>
                <div class="modal-body">
                    @foreach ($user->tandas as $tanda)
                        <div class="row user-row">
                            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-11">
                                <strong>{{{ $tanda->title }}}</strong>
                                <span class="text-muted">Number of Users: {{{ count($tanda->users) }}} / {{{ $tanda->user_num }}} | Created: {{{ $tanda->created_at }}}</span>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".tanda{{{ $tanda->id }}}">
                                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                            </div>
                        </div>
                        <div class="row col-sm-8 user-infos tanda{{{ $tanda->id }}}">
                            <div class="row">
                                <div class="col-sm-6"><small>PAY PER USER</small><br><b>${{{ $tanda->pay_per_user }}}</b></div>
                                <div class="col-sm-6"><small>PAYOUT</small><br><b>${{{ $tanda->payout }}}</b></div>
                            </div>
                            <p style="margin: 0px">Users Associated:</p>
                            <ul class="thumbnails">
                                <div class="caption">
                                    @foreach ($tanda->users as $user)
                                        <div class="row user-row">
                                            <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                                                <img class="img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50" alt="User Pic">
                                            </div>
                                            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                                                <strong>{{{ $user->email }}}</strong>
                                                <span class="text-muted">Trust Rating: {{{ $user->trust_rate }}}</span>
                                            </div>
                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".{{{ $user->id }}}">
                                                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                                            </div>
                                        </div>
                                        <div class="row user-infos {{{ $user->id }}}">
                                            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">User Information</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                                                <img class="img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" alt="User Pic">
                                                            </div>
                                                            <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                                                <strong>{{{ $user->first_name }}}</strong>
                                                                <br>
                                                                <dl>
                                                                    <dt>Registered Since:</dt>
                                                                        <dd>{{{ $user->created_at }}}</dd>
                                                                    <dt>Carousels:</dt>
                                                                        <dd>{{{ count($user->tandas )}}}</dd>
                                                                    <dt>Trust Rating:</dt>
                                                                        <dd>{{{ $user->trust_rate }}}</dd>
                                                                </dl>
                                                            </div>
                                                            <div class="col-md-9 col-lg-9 hidden-xs hidden-sm">
                                                                <strong>{{{ $user->first_name }}}</strong>
                                                                <table class="table table-user-information">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Registered Since:</td>
                                                                            <td>{{{ $user->created_at }}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Carousels:</td>
                                                                            <td>{{{ count($user->tandas) }}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Trust Rating:</td>
                                                                            <td>{{{ $user->trust_rate }}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                        <div class="row"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End View Your Carousels Modal -->

@stop


@section('bottomscript')

<script type="text/javascript">
    $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    
});

</script>

@stop

