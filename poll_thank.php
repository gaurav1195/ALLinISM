<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>
<?php include("includes/session.php"); ?>
<?php
	confirm_logged_in();
	$username = $_SESSION['name'];
	$user_id = $_SESSION['user_id'];
	
?>
<?php

?>

<?php
	
	if(isset($_SESSION['name'])){
	$username = $_SESSION['name'];
	$user_id = $_SESSION['user_id'];
	$email = $_SESSION['email'];
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
		
		
		$query = "INSERT INTO poll (id, ip, vote)
					VALUES('', '$ip', $vote)";
		$result = mysql_query($query, $connection);
		
			if(mysql_affected_rows() == 1)
			{
			//success
		
			$massage = "You have successfully voted. Thanks for voting.";
			redirect_to("poll_thank.php");
		
			$massage .= "<br />" . mysql_error();
			
			
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
						<img src="img/lallu.png" class="img-responsive" width="100%">
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