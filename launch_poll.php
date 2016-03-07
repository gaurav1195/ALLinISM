<?php include("includes/site_admin_session.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php require_once("includes/new_functions.php"); ?>
<?php
	confirm_site_admin_logged_in();
	$username = $_SESSION['site_admin_name'];
	//$user_id = $_SESSION['user_id'];
	
?>
<?php
	
		
	
if(isset($_POST['post']))
	{
		
		
		$question = trim(mysql_prep($_POST['question']));
		$a = trim(mysql_prep($_POST['a']));
		$b = trim(mysql_prep($_POST['b']));
		$c = trim(mysql_prep($_POST['c']));
		$d = trim(mysql_prep($_POST['d']));
		date_default_timezone_set('Asia/Kolkata');
		$time = date("Y-m-d h:i a");

	

		if((!empty($question)) && isset($question) && (!empty($a)) && isset($a) && (!empty($b)) && isset($b) && (!empty($c)) && isset($c) && (!empty($d)) && isset($d))
		{
		$query = "INSERT INTO  poll_questions (id, question, a, b, c, d)
				  VALUES ('', '{$question}', '{$a}', '{$b}', '{$c}', '{$d}')
				 
				" ; 
				
		$result = mysql_query($query, $connection);
		}
		if(mysql_affected_rows() == 1)
		{
			//success
		
			$massage = "Successfully Posted";
			//redirect_to("poll.php?genre=current");
			$result_set = get_poll_results();
								$a = 0;
								$b = 0;
								$c = 0;
								$d = 0;
								while($result = mysql_fetch_array($result_set))
								{
									if($result['vote'] == 1)
									{
										$a++;
									}
									elseif($result['vote'] == 2)
									{
										$b++;
									}
									elseif($result['vote'] == 3)
									{
										$c++;
									}elseif($result['vote'] == 4)
									{
										$d++;
									}
								}
								$total_votes = $a + $b + $c +$d;
								$per_a = ($a/$total_votes)*100;
								$per_b = ($b/$total_votes)*100;
								$per_c = ($c/$total_votes)*100;
								$per_d = ($d/$total_votes)*100;
			
			$polls = get_current_question();
			$get_poll_id = mysql_fetch_array($polls);
			$poll_id = $get_poll_id['id'];
			$poll_id--;
			
			$query = "INSERT INTO  previous_polls (id, date, a, b, c, d, poll_id)
				  VALUES ('', '{$time}', '{$per_a}', '{$per_b}', '{$per_c}', '{$per_d}', '{$poll_id}')
				 
				" ; 
				
		$result = mysql_query($query, $connection);
			
		$query = "TRUNCATE poll";
		$result = mysql_query($query);
		mysql_error();
		
			
		}else{
		$massage = "Sending failed";
		//redirect_to("admin_panel.php?genre=poll");
		$massage .= "<br />" . mysql_error();
		echo $massage;
		echo mysql_error();
		}
		
		redirect_to("poll.php");
		

	
	
													


	}
?>