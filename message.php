<?php include("includes/session.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>
<?php
	confirm_logged_in();
	$username = $_SESSION['name'];
	$user_id = $_SESSION['user_id'];
	
?>
<?php
	
		
	
if(isset($_POST['send']))
	{
		
		
		$shout = trim(mysql_prep($_POST['shout']));
		date_default_timezone_set('Asia/Kolkata');
		$time = date("Y-m-d h:i a");

	

		if((!empty($shout)) && isset($shout))
		{
		$query = "INSERT INTO  shout (id, name, shout, time)
				  VALUES ('', '{$username}', '{$shout}', '$time')
				 
				" ; 
				
		$result = mysql_query($query, $connection);
		}
		if(mysql_affected_rows() == 1)
		{
			//success
		
			$massage = "Message successfully Sent";
			
		}else{
		$massage = "Sending failed";
		
		$massage .= "<br />" . mysql_error();
		echo $massage;
		echo mysql_error();
		}
		
		

	
	redirect_to("discuss.php?genre=shout");
													


	}
?>