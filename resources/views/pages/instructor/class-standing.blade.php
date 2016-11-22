@extends('master.instructor-page-master')

@section('title')
<title>Class Standing</title>
@stop

@section('css')
    
@stop

@section('content')
	
<style>
	
	.event-list > li {
		background-color: rgb(255, 255, 255);
		box-shadow: 0px 0px 5px rgb(51, 51, 51);
		box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
	}
	.event-list > li > .time {
		display: inline-block;
		width: 100%;
		color: rgb(255, 255, 255);
		background-color: rgb(197, 44, 102);
		text-align: center;
		text-transform: uppercase;
		height: 90px;
	}
	.event-list > li > .time > span {
		display: none;
	}
	.event-list > li > .time > .ranknum {
		display: block;
		font-size: 26pt;
	}
	.event-list > li .time > .rank {
		display: block;
		font-size: 24pt;
		font-weight: 200;
		line-height: 1;
	}
	.event-list > li > .info {
		padding-top: 5px;
		text-align: center;
		height: 90px;
	}
	.event-list > li > .info > .title {
		font-size: 17pt;
		font-weight: 300;
		margin: 0px;
	}
    .event-list > li > .info > ul > li > a {
		display: block;
		width: 100%;
		color: rgb(30, 30, 30);
		text-decoration: none;
	} 

	@media (min-width: 768px) {
		.event-list > li {
			position: relative;
			display: block;
			width: 100%;
			height: 120px;
			padding: 0px;
		}
		.event-list > li > .time{
			width: 50px;
			float: left;
		}
		.event-list > li > .info {
			background-color: rgb(245, 245, 245);
			overflow: hidden;
		}
		.event-list > li > .time{
			width: 120px;
			height: 120px;
			padding: 0px;
			margin: 0px;
		}
		.event-list > li > .info {
			position: relative;
			height: 120px;
			text-align: left;
			padding-right: 40px;
		}	
		.event-list > li > .info > .title, 
		.event-list > li > .info > .desc {
			padding: 0px 10px;
		}
	}
</style>

</head>

<body>
<div class="container-fluid" style="padding-top: 20px;">
	<div class="dropdown" style="padding-bottom: 20px;">
	  <button class="btn btn-info dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="width: 150px;">Classes
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
	    <li><a role="menuitem" tabindex="-1" href="#">ADPROG</a></li>
	    <li><a role="menuitem" tabindex="-1" href="#">COPRO</a></li>
	    <li><a role="menuitem" tabindex="-1" href="#">COMARTS</a></li>
	  </ul>
	</div>

			<div class="col-md-6">
				<ul class="event-list" style="height: 90px;">
					<li style="height: 90px;">
						<div class="time" style="height: 90px;">
							<span class="ranknum">1</span>
							<span class="rank">Rank</span>
						</div>
						<div class="info" style="height: 90px;">
							<h2 class="title" style="margin-top: 25px;">Jose P. Rizal</h2>
							<p class="desc">BSCS</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="event-list" style="height: 90px;">
					<li style="height: 90px;">
						<div class="time" style="height: 90px;">
							<span class="ranknum">1</span>
							<span class="rank">Rank</span>
						</div>
						<div class="info" style="height: 90px;">
							<h2 class="title" style="margin-top: 25px;">Jose P. Rizal</h2>
							<p class="desc">BSCS</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="event-list" style="height: 90px;">
					<li style="height: 90px;">
						<div class="time" style="height: 90px;">
							<span class="ranknum">1</span>
							<span class="rank">Rank</span>
						</div>
						<div class="info" style="height: 90px;">
							<h2 class="title" style="margin-top: 25px;">Jose P. Rizal</h2>
							<p class="desc">BSCS</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="event-list">
					<li>
						<div class="time">
							<span class="ranknum">2</span>
							<span class="rank">Rank</span>
						</div>
						<div class="info">
							<h2 class="title">Jose P. Rizal</h2>
							<p class="desc">BSCS</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="event-list">
					<li>
						<div class="time">
							<span class="ranknum">3</span>
							<span class="rank">Rank</span>
						</div>
						<div class="info">
							<h2 class="title" style="margin-top: 30px;">Jose P. Rizal</h2>
							<p class="desc">BSCS</p>
						</div>
					</li>
				</ul>
			</div>

</div>


@stop

@section('javascript')
    
@stop
    
