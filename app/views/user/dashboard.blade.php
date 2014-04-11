<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Your Tandas</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header"> 
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                <span data-icon="a" class="light"> User Dashboard</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                        <a href="#">Help</a>
                    </li>
                    <li class="">
                        <a href="#Join">My Account</a>
                    </li>
                    <li class="">
                        <a href="#contact">Dashboard</a>
                    </li>
                     @if (Auth::check())
                     <li>
                        <h4><a href="{{{ action('HomeController@logout') }}}"><span class="label label-warning" >Logout&nbsp;{{ Auth::user()->email }}</span></a></h4>
                    </li>
                    @endif
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
      </div>
        <!-- /.container -->
    </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>{{{ Auth::user()->first_name }}}</h1>
          </div>
         </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">{{{count($tandas)}}}</p>
                    <p class="announcement-text">Total Carousels</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                    Ongoing Carousels
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-check fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">12</p>
                    <p class="announcement-text">Days until your turn</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Calendar
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">9</p>
                    <p class="announcement-text">Days to your next payment</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Fix Issues
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">{{{$user->trust_rate}}}</p>
                    <p class="announcement-text">Trust Rating</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-8">
                      Improve your rating
                    </div>
                    <div class="col-xs-4 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-clock-o"></i> Your Carousels</h3>
              </div>
              <div class="panel-body">
                <div class="list-group">
                  @if (count($user->tandas) == 0)
                    No Current Carousels
                  @else
                    @foreach ($user->tandas as $tanda)
                      <a href="#" class="list-group-item">
                        <span class="badge">just now</span>
                        {{{$tanda->title}}}
                      </a>
                    @endforeach
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money"></i> Recent Activity</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Carousel Name <i class="fa fa-sort"></i></th>
                        <th>Activity Date <i class="fa fa-sort"></i></th>
                        <th>Amount (USD) <i class="fa fa-sort"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($records as $record)
                        <tr>
                          <td> {{{$tandas[($record->tanda_id) - 1]->title}}} </td>
                          <td> {{{$record->created_at}}} </td>
                          <td> ${{{$record->amount}}} </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="text-right">
                  <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
         
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="/assets/js/morris/chart-data-morris.js"></script>
    <script src="/assets/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="/assets/js/tablesorter/tables.js"></script>






  </body>
</html>
