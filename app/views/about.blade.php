@extends('layouts.master')

@section('topscript')

	<style type="text/css">

		#accordion p h1{
			color:#000;
            font-family: 'Candal', sans-serif;
		}

		#about{
			padding-top: 120px;
			color:#000;
		}

        .panel-body{
            text-align: justify;
        }

        

	</style>

@stop

@section('content')

  <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Frequently Asked Questions</h1>
            </div>
        </div>
        <br>
        <br>
        <br>

<br>
<br>
<br>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        What if someone drops out of the group or doesn’t pay their share?
                        </a>
                    </h4>
                </div>
            <div id="collapse1" class="panel-collapse collapse out">
                <div class="panel-body">
                	<p>If someone drops out of the group, Money Carousel will join the lending circle and begin covering payments to ensure that no one gets stiffed on payday. However, a member who is late on their payments could delay payouts for the rest of the group. That’s why it’s important to use the Trust Rating System and choose group members with a solid track record.</p>
                </div>
            </div>  
        </div>

<br>
<br>
<br>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        How does the group decide who gets the money when? 
                        </a>
                    </h4>
                </div>
            <div id="collapse2" class="panel-collapse collapse out">
                <div class="panel-body">
                    <p>Payout dates will be decided amongst the group using a simple calendar system. If an emergency comes up and you need the money quickly, you can request to swap payout dates with another member. If it’s REALLY an emergency and no one is willing to swap dates, Money Carousel will step in to front the money, but your next payout will be delayed.</p> 
                </div>
            </div>
        </div>

<br>
<br>
<br>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            Question 3
                        </a>
                    </h4>
                </div>

            <div id="collapse3" class="panel-collapse collapse out">
                <div class="panel-body">
                    <p>Awesome answer here!</p>
                </div>
            </div>  
        </div>

<br>
<br>
<br>

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            Question 4
                        </a>
                    </h4>
                </div>
               
            <div id="collapse4" class="panel-collapse collapse out">
                <div class="panel-body">
                    <p>Awesome answer here!</p>
                </div>
            </div>  
        </div>
    </section>
<br>
<br>
<br>

@stop
