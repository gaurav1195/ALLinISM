<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>
<?php include("includes/session.php"); ?>
<?php
	confirm_logged_in();
	$username = $_SESSION['name'];
	$user_id = $_SESSION['user_id'];
	//echo $user_id;
?>
<?php

?>

<?php
	
	if(isset($_SESSION['name'])){
	$username = $_SESSION['name'];
	$user_id = $_SESSION['user_id'];
	$email = $_SESSION['email'];
	}
	if(isset($_GET['genre']))
	{
		$sel_genre = trim(mysql_prep($_GET['genre']));
	}
	else
	{
		$sel_genre = 'current';
	}
?>

<?php
if(isset($_POST['submit']))
	{
		if(isset($_POST['vote']))
		{
			$vote = mysql_prep($_POST['vote']);
		}
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip = $_SERVER['HTTP(LIENT_IP'];
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
				$query = "INSERT INTO poll (id, ip, vote, user_id)
						VALUES('', '$ip', $vote, '{$user_id}')";
				$result = mysql_query($query, $connection);
			
				
			
				$massage = "You have successfully voted";
			}
		
		}
		else
		{
			$error = "Please Choose an option.";
		}

	}
?>

 <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed text-white" style="background-color:">
        <li class="logo" style="background-color:;"><a id="logo-container"  href="http://allinism.in/" class="brand-logo" >
            <img id="front-page-logo" style="width:100px;height:100px;" class="responsive-img" src="img/allin.png"></a></li>
		
		
        <li class="bold"><a href="poll.php?genre=current" class="list-group-item <?php if($sel_genre == 'current'){ echo "active" ;}  ?>">Current Poll</a></li>
        <li class="bold"><a href="poll.php?genre=previous" class="list-group-item <?php if($sel_genre == 'ask'){ echo "active" ;}  ?>">Previous Polls</a></li>
        
        
		<br /><br /><br />
		<br /><br /><br />
        
      
      
	  
      </ul>  
	  
    </header>
	
	  <main><div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
		<h6 class="header center-on-small-only right-align"><a style="text-decoration:none;color:white" href="http://allinism.in/">Home</a></h6>
        <h1 class="header center-on-small-only">ISM Janta Poll</h1>
		<?php
			if(!isset($_GET['genre'])){
        echo '<h4 class ="light red-text text-lighten-4 center-on-small-only">Janta knows it all !</h4>';}
			?>
			<br />
		
      </div>
     
    </div>
  </div>
</div>

<br /><br /><br />
<div class="container">
  <!--  Outer row  -->
  <div class="row">
	<div class="section col s12 m9 l10">
							
										<p class="bg-info">
							<?php
								if(isset($massage))
								{
									echo $massage;
								}
								//echo $user_id;
							?>
							</p>
							<p class="red-text">
							<?php
								if(isset($error))
								{
									echo $error;
								}
							
							?>
							</p>
		<?php
		if($sel_genre == 'current')
		{
				$poll_q = get_current_question();
				$poll = mysql_fetch_array($poll_q);
				if(mysql_num_rows($poll_q) == 0)
				echo '<h5 class="red-text text-lighten-2">Np Current Polls running</h5>';
				else
				{
						echo '<h4 class ="light red-text text-lighten-1 center-on-small-only">' . $poll['question'] . '</h4>';

						echo '<form action="poll.php" method="post">';
											
											
							echo '<p>';
							  echo '<input name="vote" type="radio" id="test1" value="1" />';
							  echo '<label for="test1">' . $poll['a'] . '</label>';
							echo '</p>';
							echo '<p>';
							  echo '<input name="vote" type="radio" id="test2" value="2" />';
							  echo '<label for="test2">' . $poll['b'] . '</label>';
							echo '</p>';
							echo '<p>';
							  echo '<input name="vote" name="group1" type="radio" id="test3" value="3"  />';
							  echo '<label for="test3">' . $poll['c'] . '</label>';
							echo '</p>';
							  echo '<p>';
								echo '<input name="vote" type="radio" id="test4" value="4" />';
								echo '<label for="test4">' . $poll['d'] . '</label>';
							echo '</p>';
											
							echo '<button class="btn right" name="submit">Submit</button><br>';
													

							echo '<br>';
						echo '</form>';
				}
		}
		if($sel_genre == 'previous')
		{
			echo '<h4 class="red-text text-lighten-2">Previous Poll Questions</h4><br /><br />';
			$polls = get_poll_questions();
			$poll = mysql_fetch_array($polls);
			while($poll = mysql_fetch_array($polls))
			{
				$poll_id = $poll['id'];
				$poll_id++;
				$poll_result = get_poll_result_by_id($poll_id);
				$result = mysql_fetch_array($poll_result);
				echo '<div class="card">';
					
					echo '<div class="card-content">';
					  echo '<span class="card-title activator grey-text text-darken-4">' . $poll['question'] . '</i></span>';
					  echo '<p>A: ' . $poll['a'] . '<br/>';
					  echo 'B: ' . $poll['b'] . '<br/>';
					  echo 'C: ' . $poll['c'] . '<br/>'; 
					  echo 'D: ' . $poll['d'] . '<br/></p>';
					echo '</div>';
					echo '<div class="card-reveal">';
					  echo '<span class="card-title grey-text text-darken-4">Results</i></span>';
					 echo '<p>' . $poll['a'] . ' : ' . $result['a'] . '<br/>';
					 echo '<p>' . $poll['b'] . ' : ' . $result['b'] . '<br/>';
					 echo '<p>' . $poll['c'] . ' : ' . $result['c'] . '<br/>';
					 echo '<p>' . $poll['d'] . ' : ' . $result['d'] . '<br/></p>';
					 
					echo '</div>';
				echo '</div>';
				//echo '<h5>' . $poll['question'] . '</h5>';
			}
			
			
		}
	
	?>
    </div>
    <!-- Table of contents -->
   

   </div>
</div>
  <br /><br /><br />
  <br /><br /><br />
  <br /><br /><br />

    </main>    <footer class="page-footer">
      <div class="container" style="opacity:0;background-color:white">
        <div class="row" style="opacity:0;background-color:white">
          <div class="col l4 s12" style="opacity:0;background-color:#000000">
            <br /><br />
            <br /><br />
            <br /><br />
            <br /><br />
            <br /><br />

          </div>
          <div class="col l4 s12">
            
          </div>
          <div class="col l4 s12" style="overflow: hidden;">
            
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2014-2015 ALLinISM, All rights reserved.
        <a class="grey-text text-lighten-4 right" href="http://allinism.in/">Go Home</a>
        </div>
      </div>
    </footer>
	


<?php include("includes/footer.php"); ?>