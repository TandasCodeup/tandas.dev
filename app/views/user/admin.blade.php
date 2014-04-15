@extends('layouts.master')

@section('topscript')

	<style type="text/css">

		body {
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
			background-image:url("http://autoimagesize.com/wp-content/uploads/2014/01/rainbow-aurora-background-wallpaper-colour-images-rainbow-background.jpg")
		}

		.name {
		    position:absolute;
		    padding-left:200px;
		    font-size:30px;
		    color: black;
		}

		.hero-widget {
			text-align: center; 
			margin-top: 50px;
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

		/*Carousel Modal*/


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
	                <div class="name">
	                	<small>Admin Dashboard</small>
	                </div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="hero-widget well well-sm">
							<div class="icon">
								<i data-icon="a"></i>
							</div>
							<div class="text">
								<var>{{{count($tandaList)}}}</var>
								<label class="text-muted">Total Carousels</label>
							</div>
							<br>
							<button class="btn btn-default btn-lg" data-toggle="modal" data-target="#tandaModal"><i class="glyphicon glyphicon-search"></i> View Carousels</button>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="hero-widget well well-sm">
							<div class="icon">
								<i data-icon="d"></i>
							</div>
							<div class="text">
								<var>{{{ count($userList) }}}</var>
								<label class="text-muted">Total Users</label>
							</div>
							<br>
							<button class="btn btn-default btn-lg" data-toggle="modal" data-target="#userModal"><i class="glyphicon glyphicon-search"></i> View Users</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="tandaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
								<strong>{{{ $tanda->title }}}</strong>
								<span class="text-muted">Number of Users: {{{ count($tanda->users) }}} / {{{ $tanda->user_num }}} | Created: {{{ $tanda->created_at }}}</span>
							</div>
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".{{{ $tanda->id }}}">
								<i class="glyphicon glyphicon-chevron-down text-muted"></i>
							</div>
						</div>
						<div class="row col-sm-8 user-infos {{{ $tanda->id }}}">
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
												<span class="text-muted">User Level: 
													@if ($user->user_role == 1)
														Administrator
													@elseif ($user->user_role == 2)
														Standard
													@endif
												</span>
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
																<strong>{{{ $user->email }}}</strong>
																<br>
																<dl>
																	<dt>User Level:</dt>
																	@if ($user->user_role == 1)
																		<dd>Administrator</dd>
																	@elseif ($user->user_role == 2)
																		<dd>Standard</dd>
																	@endif
																	<dt>Registered Since:</dt>
																		<dd>{{{ $user->created_at }}}</dd>
																	<dt>Carousels:</dt>
																		<dd>{{{ count($user->tandas )}}}</dd>
																	<dt>Trust Rating:</dt>
																		<dd>{{{ $user->trust_rate }}}</dd>
																</dl>
															</div>
															<div class="col-md-9 col-lg-9 hidden-xs hidden-sm">
																<strong>{{{ $user->email }}}</strong>
																<table class="table table-user-information">
																	<tbody>
																		<tr>
																			<td>User Level:</td>
																			@if ($user->user_role == 1)
																				<td>Administrator</td>
																			@elseif ($user->user_role == 2)
																				<td>Standard</td>
																			@endif
																		</tr>
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
													<div class="panel-footer">
														<span class="pull-right">
															<button class="btn btn-sm btn-warning" type="button" data-toggle="tooltip" data-original-title="Edit this user"><i class="glyphicon glyphicon-edit"></i></button>
															<button class="btn btn-sm btn-danger" type="button" data-toggle="tooltip" data-original-title="Remove this user"><i class="glyphicon glyphicon-remove"></i></button>
														</span>
													</div>
												</div>
											</div>
										</div>
									@endforeach
								</div>
							</ul>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">All Users</h4>
				</div>
				<div class="modal-body">
					@foreach ($userList as $user)
						<div class="row user-row">
							<div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
								<img class="img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50" alt="User Pic">
							</div>
							<div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
								<strong>{{{ $user->email }}}</strong>
								<span class="text-muted">User Level: 
									@if ($user->user_role == 1)
										Administrator
									@elseif ($user->user_role == 2)
										Standard
									@endif
								</span>
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
												<strong>{{{ $user->email }}}</strong>
												<br>
												<dl>
													<dt>User Level:</dt>
													@if ($user->user_role == 1)
														<dd>Administrator</dd>
													@elseif ($user->user_role == 2)
														<dd>Standard</dd>
													@endif
													<dt>Registered Since:</dt>
														<dd>{{{ $user->created_at }}}</dd>
													<dt>Carousels:</dt>
														<dd>{{{ count($user->tandas )}}}</dd>
													<dt>Trust Rating:</dt>
														<dd>{{{ $user->trust_rate }}}</dd>
												</dl>
											</div>
											<div class="col-md-9 col-lg-9 hidden-xs hidden-sm">
												<strong>{{{ $user->email }}}</strong>
												<table class="table table-user-information">
													<tbody>
														<tr>
															<td>User Level:</td>
															@if ($user->user_role == 1)
																<td>Administrator</td>
															@elseif ($user->user_role == 2)
																<td>Standard</td>
															@endif
														</tr>
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
									<div class="panel-footer">
										<span class="pull-right">
											<button class="btn btn-sm btn-warning" type="button" data-toggle="tooltip" data-original-title="Edit this user"><i class="glyphicon glyphicon-edit"></i></button>
											<button class="btn btn-sm btn-danger" type="button" data-toggle="tooltip" data-original-title="Remove this user"><i class="glyphicon glyphicon-remove"></i></button>
										</span>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<div class="modal-footer" style="text-align: center">
				</div>
			</div>
		</div>
	</div>
@stop

@section('bottomscript')

	<script type="text/javascript">

		$(document).ready(function() {
			var panels = $('.user-infos');
			var panelsButton = $('.dropdown-user');
			panels.hide();

			panelsButton.click(function() {
				var dataFor = $(this).attr('data-for');
				var idFor = $(dataFor);

				var currentButton = $(this);
				idFor.slideToggle(400, function() {
					if(idFor.is(':visible')) {
						currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
					} else {
						currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
					}
				});
			});

			$('[data-toggle="tooltip"]').tooltip();
		});

	</script>

@stop