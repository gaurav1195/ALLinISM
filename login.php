<?php require_once("includes/session.php") ;?>
<?php require_once("includes/connection.php") ;?>
<?php require_once("includes/new_functions.php") ; ?>
<?php //include_once("includes/form_functions.php") ; ?>


<?php
	
	if(logged_in())
	{
		redirect_to("index.php");
	}
	if(isset($_GET['target']))
	$target = $_GET['target'];
	

?>
<?php

	
	
		
		

	//[] add value at the last of the array
	
	/*$required_fields = array('username', 'password');
	$errors = array_merge($errors, check_required_fields($required_fields, $_POST));
	
	$fields_with_lengths = array('username' => 30, 'password' =>30);
	$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));*/
	
	if(isset($_POST['email']) && isset($_POST['password']))
	{
		//$username = trim(mysql_prep($_POST['username']));
		$email = trim(mysql_prep($_POST['email']));
		$password = trim(mysql_prep($_POST['password']));
		$hashed_password = sha1($password);
		
		
	
	
	
		$query = "SELECT id, name, email";
		$query .= " FROM users";
		$query .= " WHERE email = '{$email}'";
		$query .= " AND password = '{$hashed_password}'";
		$query .= " LIMIT 1";		
		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);
		
		if(mysql_num_rows($result_set) == 1)
		{
			$found_user = mysql_fetch_array($result_set);
			$_SESSION['user_id'] = $found_user['id'];
			$_SESSION['name'] = $found_user['name'];
			$_SESSION['email'] = $found_user['email'];
			echo $found_user['email'];
			echo $_SESSION['email'];
			$massage = "successfully logged in";
			$x=1;
			if($target == 1)
			{
			redirect_to("blog.php");
			}
			else
			{
			redirect_to("index.php");
			}
		}
		else
		{
			$error = "Username or password incorrect";
		}
	
	
	}
	
?>
<?php include("includes/header.php") ;?>
<br /><br />

<div class="container">
		
			<div class="row">
				
				<div class="col-lg-3">
				</div>
				
				<div class="col-lg-6">
					<?php
						echo '<p class="bg-info">';
						if(isset($_GET['activate']))
						{
							echo "User account was successfully activated You can now login.";
						}
						echo '</p>';
						echo '<p class="bg-danger">';
						if(isset($error))
						{
							echo "Password or Username Incorrect.";
						}
						echo '</p>';
					?>
					<div class="panel panel-default login">
					<div class="panel-body">
					<form class="form-horizontal" action="login.php" method="post">
						<div class="modal-header">
							<p>Login</p>
						</div>
						
						<div class="modal-body">
						
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Name" class="col-lg-2 control-label" >Email</label>
								<div class="col-lg-10">
								
									<input type="text" name="email" class="form-control" placeholder="Email you entered while signing up.">
									
								</div>
							</div>
							
							
							<div class="form-group">      <!-- One form grpup for one block or query-->
							
								<label for="Password" class="col-lg-2 control-label" >Password</label>
								<div class="col-lg-10">
								
									<input type="password"  name="password" class="form-control" placeholder="Password">
									
								</div>
							</div> 
							
							
						
						</div>
						
						<div class="modal-footer">
						
							<button class="btn btn-primary btn-block" type="Submit" value="submit" name="submit">Login</button>
						</div>
					
					</form>
					</div>
					</div>
					
				</div>
				
				
				
			</div>
			
		</div>
		<br /><br /><br /><br /><br /><br /><br /><br /><br />
			
<?php
require("includes/footer.php") ;
?>

