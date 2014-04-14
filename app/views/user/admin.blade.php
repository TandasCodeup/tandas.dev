@extends('layouts.master')

@section('topscript')

	<style type="text/css">

	body {
	    padding-top: 150px;
	}

	/*Big Buttons CSS*/

	.pic {
		margin-top:50px; 
		width:120px;
		margin-left:50px;
		margin-bottom:-60px;
	}

	.panel {
		/*background-image:url("http://autoimagesize.com/wp-content/uploads/2014/01/rainbow-aurora-background-wallpaper-colour-images-rainbow-background.jpg"); */
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
	<section class="intro">
		<div class="intro-body">
			
		</div>
	</section>
@stop()