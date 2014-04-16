@extends('layouts.master')



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

        #panel-title:hover{
            color: #000;
        }

        a:hover.accordion-title {
            color: #7A9A95;
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
        <div class="col-lg-8 col-lg-offset-2 panel-group" id="accordion">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-title" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
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
        <div class="panel-group" id="accordion">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-title" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
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
        <div class="panel-group" id="accordion">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
<<<<<<< HEAD
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            How much does it cost?
=======
                        <a class="accordion-title" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            Question 3
>>>>>>> master
                        </a>
                    </h4>
                </div>

            <div id="collapse3" class="panel-collapse collapse out">
                <div class="panel-body">
                    <p>Money Carousel is free for users.</p>
                </div>
            </div>  
        </div>

<br>
<br>
        <div class="panel-group" id="accordion">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">
<<<<<<< HEAD
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            Do I have to report payouts on my taxes?
=======
                        <a class="accordion-title" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            Question 4
>>>>>>> master
                        </a>
                    </h4>
                </div>
               
            <div id="collapse4" class="panel-collapse collapse out">
                <div class="panel-body">

                    <p>No. It’s your money and likely comes from income that’s already being taxed. </p>
                </div>
            </div>  
        </div>
        

                </div>
            </div>  
        </div>

    </section>
<br>
<br>
<br>

@stop
