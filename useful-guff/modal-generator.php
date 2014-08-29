<?php $number = $_GET['number']; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<head>
	<title>Fred's Bootstrap 3 Modal Helper</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

	<style>
		#the-form .row {
			margin:10px 0 10px 0;
		}
	</style>

		<?php require_once('sidebar.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Modal Popups (Judges)</h1>
			<?php if (!isset($_GET['number']) || $_GET['number'] < 1) { ?>
			<h2 class="lead">This script will help you easily populate the code for modal popups on Bootstrap 3. It was developed with Judges pages in mind, but I guess you could use it for anything. </h2>
			<h2 class="lead">To start, just choose the number of elements you wish to build.</h2>

			<div class="row">
				<div class="col-md-6">
					<form method="get" class="form-inline" role="form">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="number" class="form-control" name="number" id="number" placeholder="Number of Elements">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<button type="submit" class="btn btn-warning">Generate</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<?php
	if ($_POST) {
		echo "<div class=\"row\">";
		echo "<div class=\"col-xs-12\">";
		echo "<textarea class=\"form-control\" style=\"height:600px\">";
		$i=0; // MUST BE ZERO!
		$number = $_POST['number'];
		while($i < $number) {
	?>

	<!-- ONE JUDGE: <?php echo $_POST['id'][$i]; ?> -->
	<div class="col-md-3 col-xs-6"> 
		<a href="#<?php echo $_POST['id'][$i]; ?>" data-toggle="modal">
			<img class="img-responsive" src="http://placehold.it/260x260&text=IMAGE:<?php echo $_POST['id'][$i]; ?>.jpg">
			<h3><?php echo $_POST['name'][$i]; ?></h3>
			<h4><?php echo $_POST['company'][$i]; ?></h4>
		</a>
	</div>
    <div id="<?php echo $_POST['id'][$i]; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    	<div class="modal-dialog">
        	<div class="modal-content">
        	    <div class="modal-header">
        	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
					<h3><?php echo $_POST['name'][$i]; ?></h3>
				</div>
				<div class="modal-body">
            		<div class="row">
						<div class="col-md-3 pull-right">
							<img class="img-responsive" alt="<?php echo $_POST['name'][$i]; ?>" src="http://placehold.it/260x260&text=IMAGE:<?php echo $_POST['id'][$i]; ?>.jpg" />
							<p><?php echo $_POST['jobtitle'][$i];?>, <span class="company"><?php echo $_POST['company'][$i]; ?></span></p>
						</div>
						<div class="col-md-9">
							<p><?php echo $_POST['biography'][$i]; ?></p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
                	<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END JUDGE: <?php echo $_POST['id'][$i]; ?> -->

	<?php 
		$i++;
		} //END While 
	echo "</textarea>";
	echo "</div>";
	echo "</div>";
    
	} // END IF ?>
	<?php if (isset($_GET['number']) && $_GET['number'] > 0 && !$_POST) : ?>
	<div class="row">
		<form class="col-xs-12" id="the-form" method="POST">
		<?php while($i < $number) { $i++; ?>
			<div class="row" id="form_couple_<?php echo $i; ?>">
				<div class="col-sm-3" id="new">
					<input class="form-control" id="name_<?php echo $i; ?>" name="name[]" type="text" placeholder="Judge's Name" />
				</div>
				<div class="col-sm-3"><input class="form-control" id="jobtitle_<?php echo $i; ?>" name="jobtitle[]" type="text" placeholder="Job Title" /></div>
				<div class="col-sm-3"><input class="form-control" id="company_<?php echo $i; ?>" name="company[]" type="text" placeholder="Company" /></div>
				<div class="col-sm-3">
					<input class="form-control" id="id_<?php echo $i; ?>" name="id[]" type="text" placeholder="The ID (unique, nospaces)" />
				</div>
			</div><div class="row">
				<div class="col-sm-12">
					<textarea class="form-control" id="biography_<?php echo $i; ?>" name="biography[]" placeholder="The biography. (Accepts basic HTML)"></textarea>
				</div>
			</div>
			<hr />
		<?php } ?>
			<div class="row">
			<div class="col-xs-12">
			<input type="submit" class="btn btn-warning" />
			</div></div>
			<input type="hidden" name="number" value="<?php echo $_GET['number']; ?>" />
		</form>
	</div><!-- .row -->
	<?php endif; ?>
</div><!-- .container -->


<?php require_once('footer.php'); ?>