<?php require("includes/site_admin_session.php"); ?>
<?php require("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<?php
	
	

		if(isset($_GET['id']))
		{
			$reciever = trim(mysql_prep($_GET['id']));
		}
		else
		{
			redirect_to("admin_panel.php");
			//echo 'no id';
		}
	
if(isset($_POST['post']))
	{
		
		
		//$reciever = trim(mysql_prep($_GET['id']));
		//echo $reciever;
		$message = trim(mysql_prep($_POST['msg']));
		date_default_timezone_set('Asia/Kolkata');
		$time = date("Y-m-d h:i a");

	

		if((!empty($message)) && isset($message))
		{
		$query = "INSERT INTO  messages (id, reciever, message, time)
				  VALUES ('', $reciever, '{$message}', '{$time}')" ; 
				
		$result = mysql_query($query, $connection);
		echo mysql_error();
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
		
		

	
	redirect_to("admin_panel.php");
													


	}
	
?>	



 <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed text-white" style="background-color:">
        <li class="logo" style="background-color:;"><a id="logo-container"  href="http://allinism.in/" class="brand-logo" >
            <img id="front-page-logo" style="width:100px;height:100px;" class="responsive-img" src="img/allin.png"></a></li>
		
						<li class="bold"><a href="admin_panel.php?sort=notices" class="list-group-item <?php if($sel_genre =='ism'){ echo "active" ;} ?>">Notices</a></li>

						<li class="bold"><a href="admin_panel.php?sort=udaan" class="list-group-item <?php if($sel_genre =='affairs'){ echo "active" ;} ?>">Udaan Session</a></li>

						<li class="bold"><a href="admin_panel.php?sort=news" class="list-group-item <?php if($sel_genre =='fantasy'){ echo "active" ;} ?>">Newsfeed</a></li>

						<li class="bold"><a href="admin_panel.php?sort=bazzar" class="list-group-item <?php if($sel_genre =='comedy'){ echo "active" ;} ?>">ISM Bazzaar</a></li>

						<li class="bold"><a href="admin_panel.php?sort=second" class="list-group-item <?php if($sel_genre =='second'){ echo "active" ;} ?>">Second Hand Stuff</a></li>

						<li class="bold"><a href="admin_panel.php?sort=buyer" class="list-group-item <?php if($sel_genre =='second'){ echo "active" ;} ?>">Buyers</a></li>

						<li class="bold"><a href="admin_panel.php?sort=blog" class="list-group-item <?php if($sel_genre =='second'){ echo "active" ;} ?>">Review Blogs</a></li>

						<li class="bold"><a href="admin_panel.php?sort=moment" class="list-group-item <?php if($sel_genre =='moment'){ echo "active" ;} ?>">Review Batch15 Moments</a></li>

						<li class="bold"><a href="admin_panel.php?sort=book" class="list-group-item <?php if($sel_genre =='book'){ echo "active" ;} ?>">Book</a></li>

						<li class="bold"><a href="admin_panel.php?sort=trend" class="list-group-item <?php if($sel_genre =='comedy'){ echo "active" ;} ?>">Add a Trend</a></li>

						<li class="bold"><a href="add_news.php" class="list-group-item <?php if($sel_genre =='bulletin'){ echo "active" ;} ?>">Add new Bulletin</a></li>

						<li class="bold"><a href="admin_panel.php?sort=answer" class="list-group-item <?php if($sel_genre =='answer'){ echo "active" ;} ?>">Answer SCG Questions</a></li>

						<li class="bold"><a href="admin_panel.php?sort=add_blog" class="list-group-item <?php if($sel_genre =='answer'){ echo "active" ;} ?>">Add a blog</a></li>

						<li class="bold"><a href="admin_panel.php?sort=createadmin" class="list-group-item <?php if($sel_genre =='createadmin'){ echo "active" ;} ?>">Create Blog Admin</a></li>

						<li class="bold"><a href="admin_panel.php?sort=users" class="list-group-item <?php if($sel_genre =='createadmin'){ echo "active" ;} ?>">Users Registered</a></li>

						<li class="bold"><a href="admin_panel.php?sort=feedback" class="list-group-item <?php if($sel_genre =='feedback'){ echo "active" ;} ?>">View Feedback</a></li>

						<li class="bold"><a href="admin_panel.php?sort=notify" class="list-group-item <?php if($sel_genre =='notify'){ echo "active" ;} ?>">Send Notification</a></li>
						
						<li class="bold"><a href="admin_panel.php?sort=poll" class="list-group-item <?php if($sel_genre =='poll'){ echo "active" ;} ?>">Add New Poll</a></li>

						

						<li class="bold"><a href="admin_panel.php?sort=all" class="list-group-item <?php if(!isset($sel_genre)){ echo "active" ;} ?>">All</a></li>
		<br /><br /><br />
		<br /><br /><br />
        
      
      
	  
      </ul>  
	  
    </header>
	
	  <main><div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
		<h6 class="header center-on-small-only right-align"><a style="text-decoration:none;color:white" href="http://allinism.in/">Home</a></h6>
        <h1 class="header center-on-small-only">Admin Panel</h1>
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
 
  <div class="row">
	<div class="section col s12 m9 l10">
									<?php ?>
									<h4 class="red-text text-lighten-2">Message</h4><br />
									<div class="row">
										<form class="col s12" action="admin_message.php?id=<?php echo $reciever; ?>" method="post">
										  <div class="row">
											<div class="input-field col s12">
											  <textarea  name="msg" class="materialize-textarea" ></textarea>
											  <label for="textarea1">Message:</label>
											</div>
										  </div>
										  <div class="modal-footer">
												<button class="btn btn-default" name="post">Send</button>
										  </div>
										  
     
										</form>
								  </div>

    </div>
  
   

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