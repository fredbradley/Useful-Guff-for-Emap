<?php
$path = "";
?>
<!-- 
	EMAP AWARDS TEMPLATE
	Template: <TEMPLATE NAME>
	Author: Fred Bradley <fred.bradley@emap.com>
	Created: 28/11/2013
	Last Modified: 28/11/2013
	Copyright: EMAP <http://www.emap.com>
-->
	<!-- Include Files needed for Events Force -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

		<link rel="stylesheet" href="../../frontend/layouts/global/ef.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../../frontend/layouts/global/reset2.css" type="text/css" media="screen" />
		<script type="text/javascript" src="../../system/jquery/editCSS.js?path=<?php echo $path; ?>"></script>

	<!-- Meta Data -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Load Stylesheets -->
		<!-- Bootstrap is local, in a css folder in the template structure -->
		<!-- You should not edit this CSS file. For details of how Bootstrap works visit: <http://www.getbootstrap.com> -->
		<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/bootstrap.min.css?ver=3.0.2">
		<!-- Font Awesome is being served via CDN -->
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css?ver=4.0.3">
		<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/bootstrap-lightbox.css?ver=0.6.1">
		<!-- ALL Other Local (to this template) styles go in this 'style.css' file -->
		<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/style.css" media="screen" />
    <!-- END: Stylesheets -->
	
	<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="<?php echo $path; ?>favicon.gif">
    
	<!-- HTML5 and CSS fix for IE6-8  -->
    <!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>ie.css" />
		<![endif]-->     
<!-- INCLUDE EVENTFORCE HEADER -->
[[ef_header]]

<!-- Top Navigation: .navbar-emap -->
<nav class="navbar navbar-default navbar-emap" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="top-navbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>


<!-- Header -->
<div id="header" class="container">
	<div class="row">
		<div id="logo" class="col-md-6 col-sm-12">
			<a href="http://www.aj100awards.com/home">
				<img src="<?php echo $path; ?>images/aj100-logo-white.png" alt="AJ100 Logo" class="img-responsive text-center">
			</a>
		</div>
		<div id="venue" class="col-md-3 col-sm-6">[[ef_banner]]</div>
		<div id="countdown" class="col-md-3 col-sm-6 pull-right">
			<div class="days">
				<span time="1393027140" class="kkcount-down"></span>
			</div>
		</div>
	</div>
</div><!-- #header -->

<!-- Container: #Navigation -->
<div id="navigation" class="container">
	<div id="mainnav" class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target="#main-nav-collapse"><i class="icon-plus"></i> Toggle Menu</a>
				<div class="nav-collapse collapse" id="main-nav-collapse">
					<ul class="nav">
						<li class="tab-one"><a href="http://www.nationalrecyclingawards.com/home">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Enter<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="https://www.emapawards.com/emap/425/register">Enter now</a></li>
								<li><a href="http://www.nationalrecyclingawards.com/why_enter">Why enter?</a></li>
								<li><a href="http://www.nationalrecyclingawards.com/how_to_enter">How to enter?</a></li>
								<li><a href="http://www.nationalrecyclingawards.com/categories">Categories</a></li>
								<li><a href="http://www.nationalrecyclingawards.com/faqs">FAQ's</a></li>
								<li><a href="https://www.emapawards.com/emap/425/amend">My account</a></li>
							</ul>
						</li>			 
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Judges<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="http://www.nationalrecyclingawards.com/judges-2014">Judges</a>
								<li><a href="https://www.emapawards.com/emap/frontend/reg/homepage.csp?eventID=419&page=awardsJudgeLogin.csp"><i class="icon-user"></i> Judges login</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tables<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="http://www.nationalrecyclingawards.com/why_attend">Why attend?</a></li>
								<li><a href="http://www.nationalrecyclingawards.com/who_attends">Who attends</a></li>
								<li><a href="http://www.nationalrecyclingawards.com/book_table_2014">Book your table</a></li>
								<li><a href="http://www.nationalrecyclingawards.com/venue_details">Venue details</a></li>
							</ul>
						</li>	
						<li><a href="http://www.nationalrecyclingawards.com/sponsors">Sponsors</a></li>		 
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Awards<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="http://www.nationalrecyclingawards.com/winners_2013">2013 winners</a></li>
								<li><a href="http://www.flickr.com/photos/98495535@N08/" target="_blank">2013 awards images</a></li>
							</ul>  
						</li>	
						<li><a href="http://www.nationalrecyclingawards.com/table_booking">Subscribe</a></li>	
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="http://www.nationalrecyclingawards.com/contact_us">Get in touch</a></li>
							</ul>                
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
</div>

<!-- Container #pagecontent - Page Content -->
<div class="container" id="pagecontent">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
			<div class="list-group">
				<a href="#" class="list-group-item active">Link</a>
				<a href="#" class="list-group-item">Link</a>
				<a href="#" class="list-group-item">Link</a>
				<a href="#" class="list-group-item">Link</a>
				<a href="#" class="list-group-item">Link</a>
				<a href="#" class="list-group-item">Link</a>
				<a href="#" class="list-group-item">Link</a>
				<a href="#" class="list-group-item">Link</a>
				<a href="#" class="list-group-item">Link</a>
				<a href="#" class="list-group-item">Link</a>
			</div>
		</div><!--/span-->

        <div class="col-xs-12 col-sm-9">
          <p class="pull-left visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
          </div>
        </div><!--/span-->

      </div><!--/row-->

	<div class="row">
		<div class="col-md-10">
			[[ef_main_progress]]
			[[ef_main_header]]
			<div class="row-fluid">
				[[ef_main_content]]
				[[ef_main_buttons]]
			</div>
		</div> 
		<!-- Sponsors Column -->
		<div id="sponsors" class="col-md-12">
			[[ef_right]]
		</div>
		<!-- END: Sponsor Column -->
		<div class="clearfix"></div>
	</div><!-- .row -->
</div><!-- .container #pagecontent -->

<!-- Container #footer -->
<footer class="container" id="footer">
	<div class="row-fluid footer footer-top">
		[[ef_footer]]
		<div class="copyright pull-right">
			<div class="col-md-12">Copyright EMAP. All Right Reserved</div>
		</div>
	</div>
</footer><!-- .container #footer -->


	<!-- Load javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- You should not edit this Javascript file. For details of how Bootstrap works visit: <http://www.getbootstrap.com> -->
	<script type="text/javascript" src="<?php echo $path; ?>js/bootstrap.min.js?ver=3.0.2"></script>
	<script type="text/javascript" src="<?php echo $path; ?>js/emapsites.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('[data-toggle=offcanvas]').click(function() {
				$('.row-offcanvas').toggleClass('active');
			});
		});
		$(".kkcount-down").kkcountdown({
			dayText : '',
			daysText : '',
			hoursText : '',
			minutesText : '',
			secondsText : '',
			displayZeroDays : true,
			oneDayClass : 'one-day'
		});
	</script>
