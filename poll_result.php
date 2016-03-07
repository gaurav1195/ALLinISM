<?php require("includes/connection.php"); ?>
<?php require("includes/new_functions.php"); ?>
<div class="poll">
<?php require("includes/header.php"); ?>
		
<?php
if(isset($_POST['submit']))
	{
		if(isset($_POST['vote']))
		{
			$vote = mysql_prep($_POST['vote']);
		}
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else
		{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		
		
		
		date_default_timezone_set('Asia/Kolkata');
		
		if((!empty($vote)))
		{
			$query = "SELECT id, user_id";
			$query .= " FROM poll";
			$query .= " WHERE user_id = '{$user_id}'";
			//$query .= " AND password = '{$hashed_password}'";
			$query .= " LIMIT 1";		
			$result_set = mysql_query($query, $connection);
			confirm_query($result_set);
			
			if(mysql_num_rows($result_set) == 1)
			{
					
					$error = "You have alredy voted";
			
			}
			else
			{
				$query = "INSERT INTO poll (id, ip, vote)
						VALUES('', '$ip', $vote)";
				$result = mysql_query($query, $connection);
			
				
			
				$massage = "You have successfully voted";
			}
		
		
		}
	}
?>

		<br /><br /><br /><br>
		<div style="text-align:center;font-size:100px;font-family:comic sans ms;">
			 Janta Poll Result
		</div><br /><br />
		<div class="container">
		
			<div class="row">
				
				<div class="col-lg-2">
				</div>
				
				<div class="col-lg-8">
				
					<div class="panel panel-default">
					
						<div class="panel-body">
							
						
							
						
							<center>
							<h3>Thanks ISM Janta for voting. 
							</h3>
							<br /><br />
							</center>
							<br>
							
							
							<?php
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
								
								echo "A:  &nbsp;&nbsp;&nbsp;&nbsp;" . ($a/$total_votes)*100 . "%<br />";
								echo "B:  &nbsp;&nbsp;&nbsp;&nbsp;" . ($b/$total_votes)*100 . "%<br />";
								echo "C:  &nbsp;&nbsp;&nbsp;&nbsp;" . ($c/$total_votes)*100 . "%<br />";
								echo "D:  &nbsp;&nbsp;&nbsp;&nbsp;" . ($d/$total_votes)*100 . "%<br />";
								echo "<br /><br />Total Votes: " . $total_votes;
							?>
							
								
								<br /><br />
							</p>
						</div>
						
					</div>
					
				</div>
				
				
				
			</div>
			
		</div>
		
		
		
		<br><br><br>
		
<?php
	include("includes/footer.php");
?>