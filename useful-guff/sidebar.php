<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">


	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24018806-24']);
  _gaq.push(['_setDomainNAme', 'fredbradley.co.uk']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>

<?php
function activeclass($file) {
	if (strpos($_SERVER['SCRIPT_NAME'], $file) !== false) {
		return "active";
	}
}


?>

 <!-- Static navbar -->
<div class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Useful Guff from Fred!</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="<?php echo activeclass('timestamp-grabber'); ?>"><a class="fa fa-clock-o" href="http://fred.im/timestamp-grabber"> Timestamp Grabber</a></li>
              <li class="<?php echo activeclass('modal-generator'); ?>"><a class="fa fa-code" href="http://fred.im/modal-generator"> Modal Generator</a></li>
			  <li class="<?php echo activeclass('tfl-stylesheet'); ?>"><a class="fa fa-github-alt" href="/emap/useful-guff/tfl-stylesheet.php"> TFL Stylesheet</a></li>
			  <li class="<?php echo activeclass('custom-twitter-timeline'); ?>"><a class="fa fa-github-alt" href="/emap/useful-guff/custom-twitter-timeline.php"> Twitter Timeline</a></li>
			  <li class="<?php echo activeclass('flickr-eventsone'); ?>"><a class="fa fa-flickr" href="/emap/useful-guff/flickr-eventsone.php"> Flickr on EventsOne</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
