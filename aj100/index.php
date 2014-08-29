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
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	
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
</nav><!-- navbar-emap -->



<!-- Header -->
<div id="header" class="container">
	<div class="row">
		<div id="logo" class="col-md-6 col-sm-12">
			<a href="http://www.aj100awards.com/home">
				<img src="<?php echo $path; ?>images/aj100-logo-white.png" alt="AJ100 Logo" class="img-responsive text-center">
			</a>
		</div>
		<div id="venue" class="col-md-3 col-sm-6">[[ef_banner]]</div>
		<div id="countdown" class="col-md-3 col-sm-6 hidden-xs pull-right">
			<div class="days">
				<span time="1393027140" class="kkcount-down"></span>
			</div>
		</div>
	</div>
</div><!-- #header -->

<!-- Container: #Navigation -->
<div class="container visible-xs" id="toggle-button">
	<div class="row">
		<div class="col-xs-12">
			<button type="button" class="btn btn-lg btn-aj100" data-toggle="offcanvas">Toggle Navigational Menu</button>
		</div>
	</div>
</div>
<!-- Container #pagecontent - Page Content -->
<div class="container" id="pagecontent">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="navigation" role="navigation">
			<ul class="nav nav-pills nav-stacked list-group">
				<li><a href="#">Home</a></li>
				<li><a href="#">AJ100 2014 Survey</a></li>
				<li><a href="#">The 2013 AJ100</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">2013 Winners</a></li>
				<li><a href="#">2013 Shortlist</a></li>
				<li><a href="#">Sponsors</a></li>
				<li><a href="#">Venue</a></li>
				<li><a href="#">Register to book a table</a></li>
				<li><a href="#">Architects' Journal</a></li>
				<li><a href="#">Subscribe to AJ</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Contact Us</a></li>				
			</ul>
		</div><!--/span-->

        <div class="col-xs-12 col-sm-9 col-md-7">
        	<div class="row">
        		<div class="col-md-12">
        			<h2>Welcome to my Example</h2>
        			<p>Here is an example of where some text would go. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        		</div>
        		<div class="col-md-12">
        			<h2>Here is how winners photos can be displayed</h2>
        			<div class="row">
        				<div class="col-sm-6">
        					<div class="thumbnail">
        						<img src="http://placehold.it/500&text=Winner" class="img-responsive" />
        						<div class="caption">I won</div>
        					</div>
        				</div>
        				<div class="col-sm-6">
        					<div class="thumbnail">
        						<img src="http://placehold.it/500&text=Winner" class="img-responsive" />
        						<div class="caption">You won!</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div><!--/span-->
		<div class="col-sm-2 clearfix" id="sponsors">
			<div class="row">
				<div class="col-xs-4 col-sm-12">
					<img src="http://placehold.it/100&text=Sponsor" class="img-responsive" />
				</div>
				<div class="col-xs-4 col-sm-12">
					<img src="http://placehold.it/100&text=Sponsor" class="img-responsive" />
				</div>
				<div class="col-xs-4 col-sm-12">
					<img src="http://placehold.it/100&text=Sponsor" class="img-responsive" />
				</div>
			</div>
		</div>
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
		$(".kkcount-down").fadeIn(3500);
	</script>