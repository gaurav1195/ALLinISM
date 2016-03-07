<?php require("includes/session.php"); ?>

<?php require("includes/connection.php"); ?>

<?php //require("includes/new_functions.php"); ?>

<div class="late">

<?php require("includes/header.php"); ?>

<?php

	confirm_logged_in();

	$username = $_SESSION['name'];

	$user_id = $_SESSION['user_id'];

?>



<?php

	if(isset($_POST['submit']))

	{

		if(isset($_POST['headline'])){

		$headline = mysql_prep($_POST['headline']);}

		

		if(isset($_POST['description'])){

		$description = mysql_prep($_POST['description']);}

	

		//if(isset($_POST['event_date'])){

		//$event_date = mysql_prep($_POST['event_date']);}

		

		//if(isset($_POST['event_time'])){

		//$event_time = mysql_prep($_POST['event_time']);}

		

		//if(isset($_POST['event_date'])){

		//$a = mysql_prep($_POST['event_date']);}

		

		//if(isset($_POST['event_deadline'])){

		//$event_deadline = mysql_prep($_POST['event_deadline']);}

		

		

		if(isset($_FILES['photo']['name'])){

		$target= '../allinism/img/newsfeed/' ;

		$target = $target . basename( $_FILES['photo']['name']);

		$target = trim(mysql_prep($target));

		$pic=($_FILES['photo']['name']);

		}

		echo $target;

		

	date_default_timezone_set('Asia/Kolkata');

	$time = date("Y-m-d h:i a");

	

	

	

	

	//$visible = mysql_prep($_POST['visible']);



		if(isset($_POST['headline'])  && isset($_POST['description'])  && !empty($_POST['headline']) &&  !empty($_POST['description']) )

		{



			// strinngs need quotes ' ' around them

			$query = "INSERT INTO  news (id, sub_by, headline, date, description, pic)

						  VALUES ('', '{$username}', '{$headline}', '{$time}', '{$description}', '{$pic}')";

						 

			

			$result = mysql_query($query, $connection);

			confirm_query($result);

	

			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {

				echo "The file has been uploaded, and your information has been added to the directory";

			} else {

				

				echo "Sorry, there was a problem uploading your file.";

				echo mysql_error();

			}

			//redirect_to("thanks.php?add=1");

			

				

		}

		else

		{

			$error = "We couldn't submit the details of your event. You might Have missed few entries.";

		}

}

?>

		<br /><br /><br />

		<div style="text-align:center;font-size:80px;font-family:comic sans ms;">

			Fill In the Details

		</div>

		<br /><br /><br /><br>

		<div class="container">

		

			<div class="row">

				

				<div class="col-lg-2">

				

					

				</div>

				

				<div class="col-lg-8">

				

					<div class="panel panel-default">

					

						<div class="panel-body login">

							

							

							

							<form class="form-horizontal" action="add_news.php" method="post" enctype="multipart/form-data"> 

								<div class="modal-header">

									<h3>Add a News to the timeline</h3>

								</div>

								

								<p class = "bg-success">

									

										<?php if(isset($massage))

											{

												echo $massage;

											}

											

										?>

								</p>

								<p class = "bg-danger">

									

										<?php if(isset($error))

											{

												echo $error;

											}

											

										?>

								</p>

						

							<div class="modal-body">

						

								<div class="form-group"><!-- One form grpup for one block or query-->

							

									<label for="Article-Name" class="col-lg-2 control-label" >Headline</label>

									<div class="col-lg-10">

									

										<input type="text" name="headline" class="form-control" placeholder="Headline">

										

									</div>

								</div>

							

							

					<!--

								<div class="form-group">

							

									<label for="genre" class="col-lg-2 control-label" >Genre</label>

									<div class="col-lg-10">

									

										<select name="genre" class="form-control">

									

										<option value="ism">ISM Matter</option>

										<option value="complex">Complex</option>

										<option value="fantasy">Fantasy</option>

										<option value="affairs">Current Affairs</option>

										<option value="comedy">Comedy</option>

										

										

										

									</select>

										

									</div>

								</div>

								-->

							

							<div class="form-group">

							

							

								<label for="File" class="col-lg-2 control-label" >Add Image</label>

								<div class="col-lg-10">

								

									<input type="file" name="photo" class="form-control" rows="8">

								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->

								</div>

							</div>

							

							<div class="form-group">



									<label for="Article" class="col-lg-2 control-label" >Description</label>

								<div class="col-lg-10">

									<div>

										<textarea class="form-control" name="description" rows="8" placeholder="Details of your event"></textarea>

									</div>

								</div>

							</div>

								

							

						

								

							

						

							

						</div>



						<div class="modal-footer">

							

							<button class="btn btn-default btn-primary" name="submit">Submit</button>

						</div>

					

					</form>

							

						</div>

						

					</div>

					

				</div>

				

				

				

			</div>

			

		</div>

		

		

		

		

		<br><br><br>

<?php require("includes/footer.php");?>

</div>

	