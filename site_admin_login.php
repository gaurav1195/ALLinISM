<?php require_once("includes/site_admin_session.php") ;?>
<?php require_once("includes/connection.php") ;?>
<?php require_once("includes/new_functions.php") ; ?>

<?php //include_once("includes/form_functions.php") ; ?>
<?php



	

	

		
	if(isset($_POST['submit']) )

	{

		$username = trim(mysql_prep($_POST['site_admin_name']));

		$password = trim(mysql_prep($_POST['password']));

		//$hashed_password = sha1($password);

		//$superuser = $username;

		//global $superuser;

	

	

		$query = "SELECT id, admin, password";

		$query .= " FROM site_admins";

		$query .= " WHERE admin = '{$username}'";

		$query .= " AND password = '{$password}'";

		$query .= " LIMIT 1";		

		$result_set = mysql_query($query, $connection);

		confirm_query($result_set);

		

		if(mysql_num_rows($result_set) == 1)

		{

			$found_user = mysql_fetch_array($result_set);

			$_SESSION['site_admin_id'] = $found_user['id'];

			$_SESSION['site_admin_name'] = $found_user['admin'];

			$massage = "successfully loggeg in";

			$x=1;

			redirect_to("admin_panel.php?public=0");

		}

		else

		{

			$massage = "Username incorrect";

		}

	

	

	}

	

?>

<?php include("includes/header.php") ;?>





<div class="container">

		

			<div class="row">

				

				<div class="col-lg-2">

				

					

						

						

					

				</div>

				

				<div class="col-lg-8">

				

					<form class="form-horizontal" action="site_admin_login.php" method="post">

						<div class="modal-header">

							<p>Login</p>

						</div>

						<?php

							echo "<br /><p class=\"bg-danger\">";

							if(isset($massage))

							{

								echo $massage;

							}

							echo "</p>";

						?>

						

						<div class="modal-body">

						

							<div class="form-group"><!-- One form grpup for one block or query-->

							

								<label for="Name" class="col-lg-2 control-label" >Admin Name</label>

								<div class="col-lg-10">

								

									<input type="text" name="site_admin_name" class="form-control" placeholder="Admin name">

									

								</div>

							</div>

							<div class="form-group"><!-- One form grpup for one block or query-->

							

								<label for="Name" class="col-lg-2 control-label" >Password</label>

								<div class="col-lg-10">

								

									<input type="text" name="password" class="form-control" placeholder="Password">

									

								</div>

							</div>

							

							



							

							

						

						</div>

						

						<div class="modal-footer">

						

							<button class="btn btn-primary" type="Submit" value="submit" name="submit">Login</button>

						</div>

					

					</form>

					

				</div>

				

				

				

			</div>

			

		</div>

			

<?php

require("includes/footer.php") ;

?>



