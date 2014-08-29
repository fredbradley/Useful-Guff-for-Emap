<?php 
date_default_timezone_set("Europe/London");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fred's Timestamp Grabber</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'dd/mm/yy'});
  });
  </script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<style>
	.col-md-4 .content {
		margin:10px;
		padding: 10px;
		background: black;
		border-radius: 15px;
		min-height: 215px;
	}
	#submit {
		float: right;
	}
	.input-group {
		margin-bottom: 10px;
	}
  
	span.kkc-godz,
	span.kkc-min,
	span.kkc-sec {
		display: none;
	}
	.days {
		display:none;
		margin:auto;
		text-align:center;
	}
	.content {
		color: #fff;
	}
	footer img, footer div {
		text-align: center;
	}
<?php if (empty($_POST['time'])) { ?>
	#the_code {display: none;}
	#the_result .content {background: #ccc;}
	<?php } else { ?>
	#how {display: none;} 
<?php } ?>

</style>
<?php require_once('useful-guff/sidebar.php'); ?>

<div class="container">
	<div class="row">
		<div id="how" class="col-md-4">
		        <div class="content">
		                <h2>How it works</h2>
		                <ol>
		                        <li>Choose day you want to count down to...</li>
		                        <li>Choose the time of that day that you wish to count down to...</li>
		                        <li>Click "Submit" to get see the result, and retrieve the UNIX timestamp needed</li>
		                </ol>
		        </div>
		</div>
		<div id="the_form" class="col-md-4">
			<div class="content">
				<h2>Choose The Date</h2>
				<form method="post">
					<div class="input-group input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						<input type="text" name="time" class="form-control" id="datepicker" placeholder="dd/mm/yyyy">
					</div>
					<div class="input-group">
						<select name="hour">
							<option value="23" selected="selected">11</option>
							<?php $i = 0;while($i < 24) { ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php $i++; } ?>
						</select>
						<select name="minute">
							<option value="59" selected="selected">59pm</option>
							<?php $i = 0;while($i < 60) { ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php $i++; } ?>
						</select>
					</div>
					<div class="input-group">
						<input class="btn btn-success" id="submit" type="submit" />
					</div>
				</form>
			</div>
		</div>
		<div id="the_result" class="col-md-4">
			<div class="content">
				<h2>The Result</h2>
				<?php if ($_POST) {
					if (!empty($_POST['time'])) {
						$time = explode('/', $_POST['time']);
						$month = $time[1];
						$day = $time[0];
						$year = $time[2];
						if (!empty($_POST['hour']) && !empty($_POST['minute'])) {
							$timestamp = mktime($_POST['hour'], $_POST['minute'], 59, $month, $day, $year);
						} else {
							$timestamp = mktime(23,59,59, $month, $day, $year);
						}
					?>
				<div class="days btn btn-success">
					<span id="thetime" time="<?php echo $timestamp; ?>" class="kkcount-down"></span>
					<span id="left">remaining!</span>
				</div>
				<?php } else { ?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>No No No!</strong> You need to select a date for this to work. Come on, a bit of give &amp; take here please!<br /><br />Go on, try again!
				</div>
				<?php }} ?>
			</div>
		</div>
		<div id="the_code" class="col-md-4">
			<div class="content">
				<h2>The Timestamp</h2>
				<form>
					<div class="input-group input-group">
				 		<span class="input-group-addon"><i class="glyphicon glyphicon-floppy-open"></i></span>
				 		<input type="text" value="<?php echo $timestamp; ?>" class="form-control">
				 	</div>
				</form>
			</div>
		</div>
	</div>
</div> <!-- .container -->
<footer class="container">
	<div class="row">
		<div class="col-sm-8">
			<p><strong>Please Note:</strong> this function is developed for a London timezone.</p>
		</div>
	</div>
</footer>
	<script type="text/javascript">
		// Third Up: kkcountdown (sourced by Wayne Philips) 
	
	/**
 * Plugin kkcountdown counts down to specific dates in the future.
 *
 * @example
 * $(".come-class").kkcountdown();
 *
 * @type jQuery
 *
 * @name kkcountdown
 * @author Krzysztof Furtak http://krzysztof-furtak.pl/
 * @version 1.3
 * 
 * Documentation: http://krzysztof-furtak.pl/2010/05/kk-countdown-jquery-plugin/
 * 
 */
(function(e){e.fn.kkcountdown=function(d){function f(b){var c=new Date,c=Math.floor(c.getTime()/1E3),a=b.attr("time")-c;0>=a?(b.html(d.textAfterCount),d.callback&&d.callback()):86400>=a?setTimeout(function(){h(!0,b,a);f(b)},1E3):setTimeout(function(){h(!1,b,a);f(b)},1E3)}function h(b,c,a){var e=g(a%60),a=Math.floor(a/60),f=g(a%60),a=Math.floor(a/60),i=g(a%24),a=Math.floor(a/24);b&&!1!=d.oneDayClass&&c.addClass(d.oneDayClass);if(0!=a||d.displayZeroDays)1==a?(c.find(".kkc-dni").html(a),c.find(".kkc-dni-text").html(d.dayText)):
(c.find(".kkc-dni").html(a),c.find(".kkc-dni-text").html(d.daysText));c.find(".kkc-godz").html(i);c.find(".kkc-min").html(f);c.find(".kkc-sec").html(e)}function g(b){s="";10>b&&(b="0"+b);return b}d=e.extend({dayText:"day ",daysText:"days ",hoursText:":",minutesText:":",secondsText:"",textAfterCount:"---",oneDayClass:!1,displayDays:!0,displayZeroDays:!0,addClass:!1,callback:!1},d);this.each(function(){var b=e(this),c=e(document.createElement("span")).addClass("kkcountdown-box"),a=e(document.createElement("span")).addClass("kkc-dni"),
g=e(document.createElement("span")).addClass("kkc-godz"),h=e(document.createElement("span")).addClass("kkc-min"),i=e(document.createElement("span")).addClass("kkc-sec"),m=e(document.createElement("span")).addClass("kkc-dni-text"),j=e(document.createElement("span")).addClass("kkc-godz-text"),k=e(document.createElement("span")).addClass("kkc-min-text"),l=e(document.createElement("span")).addClass("kkc-sec-text");!1!=d.addClass&&c.addClass(d.addClass);j.html(d.hoursText);k.html(d.minutesText);l.html(d.secondsText);
c.append(a).append(m).append(g).append(j).append(h).append(k).append(i).append(l);b.append(c);f(b)})}})(jQuery);
</script>
	<script type="text/javascript">
		$(".kkcount-down").kkcountdown({
			dayText : ' day ',
			daysText : ' days ',
			hoursText : '',
			minutesText : '',
			secondsText : '',
			displayZeroDays : true,
			oneDayClass : 'one-day'
		});
	$(".days").fadeIn(4000);
	</script>
<?php require_once('useful-guff/footer.php'); ?>