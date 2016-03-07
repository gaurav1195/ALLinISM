<?php include("includes/session.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php //include("includes/new_functions.php"); ?>
<?php
	confirm_logged_in();
	$username = $_SESSION['name'];
	$user_id = $_SESSION['user_id'];
	$email = $_SESSION['email'];
	
	if(isset($_POST['edit']))
	{
		
		
		$name = trim(mysql_prep($_POST['name']));
		$hostel = trim(mysql_prep($_POST['hostel']));
		$mobile = trim(mysql_prep($_POST['mobile']));
		$year = trim(mysql_prep($_POST['year']));
		$branch = trim(mysql_prep($_POST['branch']));
		date_default_timezone_set('Asia/Kolkata');
		$time = date("Y-m-d h:i a");

	

		$query = "UPDATE  users SET 
				  name = '{$name}',
				  branch = '{$branch}',
				  hostel = '{$hostel}',
				  mobile = '{$mobile}',
				  year = '{$year}' 

				 WHERE id = {$user_id} ";
				 
		$result = mysql_query($query, $connection);
		echo mysql_error();
		if(mysql_affected_rows() == 1)
		{
			//success
		
			$massage = "Successfully Edited.";
			
			
		}else{
		$massage = "Sending failed";
		
		$massage .= "<br />" . mysql_error();
		echo mysql_error();
		}
	
		

	
	redirect_to("profile.php?genre=profile");
													
	}


?>
 <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed text-white" style="background-color:">
        <li class="logo" style="background-color:;"><a id="logo-container"  href="http://allinism.in/" class="brand-logo" >
            <img id="front-page-logo" style="width:100px;height:100px;" class="responsive-img" src="img/allin.png"></a></li>
		
        <li class="bold" style=""><a href="profile.php?genre=profile" class="list-group-item <?php if($sel_genre =='profile'){ echo "active" ;} ?>">Profile</a></li>
        <li class="bold"><a href="profile.php?genre=msg" class="list-group-item <?php if($sel_genre =='msg'){ echo "active" ;} ?>">Messages</a></li>
        <li class="bold"><a href="profile.php?genre=notify" class="list-group-item <?php if($sel_genre =='notify'){ echo "active" ;} ?>">Notifications</a></li>
        <li class="bold"><a href="profile.php?genre=batch" class="list-group-item <?php if($sel_genre =='batch'){ echo "active" ;} ?>"></a></li>
        
		<br /><br /><br />
		<br /><br /><br />
		
        
      
      
	  
      </ul>  
	  
    </header>
	
	  <main><div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
		<h6 class="header center-on-small-only right-align"><a style="text-decoration:none;color:white" href="http://allinism.in/">Home</a></h6>
        <h1 class="header center-on-small-only"><?php echo $username; ?></h1>
		<?php
			if(!isset($_GET['genre'])){
        echo '<h4 class ="light red-text text-lighten-4 center-on-small-only"></h4>';}
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
	<?php 
		if(isset($_GET['genre']))
		{
			$sel_genre = $_GET['genre'];
			
			if($sel_genre == 'profile'){
				$profile_set = get_user_by_id($user_id);
				$profile = mysql_fetch_array($profile_set);
				echo '<h4 class="red-text text-lighten-2">Basic Info</h4><br /><br />';
				echo '<div class="red-text text-lighten-3">Name: </div><div class="teal-text">' . $profile['name'] . '</div><br />';
				echo '<div class="red-text text-lighten-3">Email: </div><div class="teal-text">' . $email . '</div><br />';
				if(!empty($profile['mobile']))
				echo '<div class="red-text text-lighten-3">Mobile: </div><div class="teal-text">' . $profile['mobile'] . '</div><br />';
				if(!empty($profile['branch']))
				echo '<div class="red-text text-lighten-3">Branch: </div><div class="teal-text">' . $profile['branch'] . '</div><br />';
				if(!empty($profile['year']))
				echo '<div class="red-text text-lighten-3">Year: </div><div class="teal-text">' . $profile['year'] . '</div><br />';
				if(!empty($profile['hostel']))
				echo '<div class="red-text text-lighten-3">Hostel: </div><div class="teal-text">' . $profile['hostel'] . '</div><br />';
				echo '<br /><br /><br />';
				echo '<a href="profile.php?genre=edit_profile" class="btn right">Edit Profile</a>'; 
			//	echo 'Email: ' . $email . '<br />';
			//	echo 'Name: ' . $username; . '<br />';
				
			}
			if($sel_genre == 'edit_profile')
			{
				$profile_set = get_user_by_id($user_id);
				$profile = mysql_fetch_array($profile_set);
				echo '<h4 class="red-text text-lighten-2">Edit Profile</h4><br /><br />';
						
				   echo '<form class="col s12" action="profile.php?genre=edit_profile" method="post" >';
					  echo '<div class="input-field col s12">';
						  echo '<input placeholder="Name" id="first_name" name="name" type="text" value="' . $profile['name'] . '" class="">';
						  echo '<label for="first_name">Name</label>';
					   echo '</div>';
					   
					   echo '<div class="input-field col s12">';
						  echo '<input placeholder="Branch" id="branch" name="branch" type="text" value="' . $profile['branch'] . '" class="">';
						  echo '<label for="branch">Branch</label>';
					   echo '</div>';
					   
					   echo '<div class="input-field col s12">';
						  echo '<input placeholder="Hostel" id="hostel" name="hostel" type="text" value="' . $profile['hostel'] . '" class="">';
						  echo '<label for="hostel">Hostel</label>';
					   echo '</div>';
					   
					   echo '<div class="input-field col s12">';
						  echo '<input placeholder="Mobile No" id="mobile" name="mobile" type="text" value="' . $profile['mobile'] . '" class="">';
						  echo '<label for="mobile">Mobile No.</label>';
					   echo '</div>';
					  
					  echo '<div class="input-field col s12">';
						echo '<select name="year">';
						  echo '<option value="I Year">I Year</option>';
						  echo '<option value="II Year">II Year</option>';
						  echo '<option value="III Year">III year</option>';
						  echo '<option value="Final Year">Final year</option>';
						  echo '<option value="Super Final Year">SuperFinal year</option>';
						echo '</select>';
						echo '<label>Year</label>';
					  echo '</div>';
				
					  

						
						
						
						
					echo '</div>';
					echo '<div class="modal-footer">';
						echo '<button class="btn btn-default" name="edit">Edit Profile</button>';
					echo '</div>';
				echo '</form>';
				
			}
			if($sel_genre == 'msg')
			{		
					
					echo '<h4 class="red-text text-lighten-2">Messages</h4><br /><br />';
					$msg_set = get_msg_by_id($user_id);
					if(mysql_num_rows($msg_set) == 0)
					{
						echo '<h5 class="teal-text">No Messages yet</h5>';
					}
					while($msg = mysql_fetch_array($msg_set))
					{
						 echo '<div class="card blue-grey darken-1">';
							echo '<div class="card-content white-text">';
								//echo '<span class="card-title">' . $article['title'] . '</span><div class="right white-text text-darken-3" >By: ' . $article['article_by'] . '</div>';
								echo '<p>' . $msg['message'] . '</p>';
								echo '<div class="grey-text text-lighten-3" style="font-size:9px;">' . $msg['time'] . '</div>';
								
							echo '</div>';
						echo '</div>';
					}
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