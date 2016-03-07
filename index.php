<?php require_once("includes/session.php"); ?>
<?php 	include("includes/header.php"); ?>
<div style="background-color:#e7e7e8">
<?php include("includes/connection.php"); ?>
<?php require_once("includes/new_functions.php");
	//redirect_to("soon.php");
?>


<?php
	
	//confirm_logged_in();
	if(isset($_SESSION['name']))
	
	{
		//echo $username;
		$username = $_SESSION['name'];
		$user_id = $_SESSION['user_id'];
		$email = $_SESSION['email'];
		
		date_default_timezone_set('Asia/Kolkata');
		$time=time();
	
		/*$time_check=$time-600;
		$query="SELECT * FROM users_online WHERE session_id = $user_id LIMIT 1";
		$result=mysql_query($query);
		$count = mysql_num_rows($result);
			if($count == 0)
		
			{
			$sql1 = "INSERT INTO users_online (session_id, username, time) VALUES( '$user_id', '{$username}', '$time')";
			$result1=mysql_query($sql1);
			
			}

			else {
			$sql2 = "UPDATE users_online SET time='$time' WHERE session_id = '$user_id'";
			$result2=mysql_query($sql2);
			
			}

			$sql3="SELECT * FROM users_online";
			$result3=mysql_query($sql3);

			$count_user_online=mysql_num_rows($result3);

			

			// if over 10 minute, delete session
			$sql4="DELETE FROM users_online WHERE time<$time_check";
			$result4=mysql_query($sql4);


		
		*/
	}
	
	$query = "SELECT hits_main
			FROM hits
			WHERE id = 1
			LIMIT 1";
	$result = mysql_query($query);
	confirm_query($query);
	while($hits = mysql_fetch_array($result))
	{
		$total_hits = $hits['hits_main'];
		$total_hits++;
	}
	
	$query = "UPDATE hits SET
				hits_main = '{$total_hits}'
				WHERE id = 1";
	mysql_query($query);
	
?>
<?php
	//confirm_logged_in();
	if(isset($_POST['submit_feedback']))
	{
		$feedback = trim(mysql_prep($_POST['feedback']));
		if(isset($_POST['name']))
		{
			$feed_name = trim(mysql_prep($_POST['name']));
		}
		else
		{
			$feed_name = $username;
		}
		if(!empty($_POST['feedback']))
		{
			$query = "INSERT INTO feedback (id, name, feedback)
							VALUES ('', '{$feed_name}', '{$feedback}') ";
			$result = mysql_query($query);
			confirm_query($result);
			echo mysql_error();
		}
	}
	
?>
	
	
<nav>
    <div class="nav-wrapper teal" >
		<div class="col s12 l12 m12">
		  <a href="http://allinism.in/" class="brand-logo" ><img style="margin-left:50px;" src="img/allin.png" width="100" height="100%"></a>
		  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

		  <ul id="nav-mobile" class="right hide-on-med-and-down">
			<!--<li><a href="academics.php">Academics</a></li>-->
			<li><a href="#notice" class="modal-trigger" data-target="modal">Bulletin</a></li>
			<li><a href="contacts.php">Imp-Contacts</a></li>
			<li><a href="clubs.php">Clubs and Societies</a></li>
			<!--<li><a class="dropdown-button" href="#!" style="position: relative;z-index: 40;" data-activates="dropdown1">Societies and Clubs</a></li>
			<ul id="dropdown1" class="dropdown-content" style="position: relative;z-index: 40;">
			  <li> <a href="cses.php" style="padding-top:0px;">CSE Society</a></li>
								<li> <a href="cyber_labs.php" style="padding-top:0px;" >Cyber Labs</a></li>
								<li> <a href="adc.php" style="padding-top:0px;">ADC</a></li>
								<li> <a href="music.php" style="padding-top:0px;">Music Club</a></li>
								<li> <a href="toast.php" style="padding-top:0px;">Toastmasters</a></li>
								<li> <a href="astro.php" style="padding-top:0px;">Astronomy Club</a></li>
								<li> <a href="android.php" style="padding-top:0px;">Android Club</a></li>
								<li> <a href="google.php" style="padding-top:0px;">Google Students Club</a></li>
								<li> <a href="#contact" style="padding-top:0px;">LIT-C</a></li>
								<li> <a href="#contact" style="padding-top:0px;">PhotoFreaks</a></li>
								<li> <a href="#contact" style="padding-top:0px;">Mailer Daemon</a></li>
			</ul>-->
		
						
						
						
						<li><a href="#login" class="modal-trigger" data-target="modal"><?php if(isset($_SESSION['name'])) { echo "<b>" . $_SESSION['name'] . "</b><span class=\"mdi-image-brightness-1\" style=\"color:green\"></span>";} else { echo "Login" ;} ?></a></li>
						<li>
						<?php if(!isset($_SESSION['name']))
							{
								
									echo '<a href="signup.php" >SignUp</a>'; 

							}
						?></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
		  </ul>
		   <ul id="mobile-demo" class="side-nav">
			<!--<li><a href="academia.php">Academics</a></li>-->
			<li><a href="#notice" class="modal-trigger" data-target="modal">Bulletin</a></li>
			<li><a href="bakar.php" >Bakar</a></li>
			<li><a href="contacts.php">Imp-Contacts</a></li>
			<li><a href="clubs.php">Clubs and Societies</a></li>
			<!--<li><a class="dropdown-button" href="#!" style="position: relative;z-index: 40;" data-activates="dropdown1">Societies and Clubs</a></li>
			<ul id="dropdown1" class="dropdown-content" style="position: relative;z-index: 40;">
			  <li> <a href="cses.php" style="padding-top:0px;">CSE Society</a></li>
								<li> <a href="cyber_labs.php" style="padding-top:0px;" >Cyber Labs</a></li>
								<li> <a href="adc.php" style="padding-top:0px;">ADC</a></li>
								<li> <a href="music.php" style="padding-top:0px;">Music Club</a></li>
								<li> <a href="toast.php" style="padding-top:0px;">Toastmasters</a></li>
								<li> <a href="astro.php" style="padding-top:0px;">Astronomy Club</a></li>
								<li> <a href="android.php" style="padding-top:0px;">Android Club</a></li>
								<li> <a href="google.php" style="padding-top:0px;">Google Students Club</a></li>
								<li> <a href="#contact" style="padding-top:0px;">LIT-C</a></li>
								<li> <a href="#contact" style="padding-top:0px;">PhotoFreaks</a></li>
								<li> <a href="#contact" style="padding-top:0px;">Mailer Daemon</a></li>
			</ul>-->
		
						
						
						
						<li><a href="#login" class="modal-trigger" data-target="modal"><?php if(isset($_SESSION['name'])) { echo "<b>" . $_SESSION['name'] . "</b><span class=\"mdi-image-brightness-1\" style=\"color:green\"></span>";} else { echo "Login" ;} ?></a></li>
						<li>
						<?php if(!isset($_SESSION['name']))
							{
								
									echo '<a href="signup.php" >SignUp</a>'; 

							}
						?></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
		  </ul>
		 </div>
    </div>
  </nav>
  <!--
  <div class="slider" >
    <ul class="slides" style="height:600px">
      <li>
        <img src="img/app.png" width="100%" height="100%">
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="img/app.png">
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/app.png"> 
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/app.png"> 
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  -->
  <div class="materialboxed">
	<img class="responsive-image" width="100%" src="img/heroes.png">
   </div>
  <br /><br /><br />
  <div class="container">
	<div class="row">
	
        <div class="col s12 m5">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title ">ISM Calender</span>
			  <div class="divider"></div><br />
					<iframe src="https://www.google.com/calendar/embed?src=allinism2015%40gmail.com&ctz=Asia/Calcutta" style="background-color:white;border-radius:10px;opacity:.9;padding:1px;" width="100%" height="270" frameborder="0" scrolling="no"></iframe>
					
			</div>
		  </div>
		</div>
	
  
        <div class="col s12 m4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text" style="max-height:370px;overflow: auto;">
              <span class="card-title">Newsfeed</span>
			  <div class="divider"></div><br />
								<?php
									$news_set = get_notices();	
									$c=1;
									while($news = mysql_fetch_array($news_set))
									{
										
										echo '<b><a class="modal-trigger" style="color:white" href="#news' . $c . '" data-target="modal" >' . $news['event_name'] . ':</b></a>';
										//echo '<b><a href="#" data-toggle="modal" data-id="' . $news['id'] . '" style="color:#4D4D4D" class="edit-record">' . $news['headline'] . ':</b></a>';
										////echo substr((nl2br($news['description'])), 0, 50) . '.....<a href="#newsnewsid=' . $news['id'] . '" data-toggle="modal">Read More</a>';
										echo '<div style="color:#bcaaa4">' . substr((nl2br($news['description'])), 0, 50) . '.....</div>';
										$c++;
									}
									
								?>				
					<br /><div class="divider"></div>
					<div class="card-action" style="padding-bottom:0px;">
						<a href="newsfeed.php">View All</a>
						<a href='add_notice.php'>Organising Event?</a>
					</div>
			</div>
		  </div>
		</div>
	
  
	
        <div class="col s12 m3">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text" style="max-height:370px;overflow: auto;">
              <span class="card-title">Trending in ISM</span>
			  <div class="divider"></div><br />
								<?php
									$trends = get_trends();
									while($trend = mysql_fetch_array($trends))
									{
										echo '<b><div style=color:;><i class="mdi-action-trending-up"></i> ' . $trend['trend'] . ':</b></div>';
										echo '<div style="color:#bcaaa4"">' . $trend['about'] . '</div>';
									}
																	
								?>
			</div>
		  </div>
		</div>
		
		
	</div>
  </div>
  
  <div class="container">
        <div class="section">

          <div class="row">
            <div class="col s12 m8 offset-m2">
              <br>
             <!-- <img id="responsive-img" src="img/allin.png">-->
            </div>
          </div>

          <div class="row">
            <h3 class="col s12 light center header">ALLinISM Making Lives Comfortable</h3>
          </div>
			<br /><br />
          <!--   Promo Section   -->
          <div class="row">
            <div class="col s12 m4">
              <div class="center promo">
                <a href="new_blog.php" style="text-decoration:none"><i class="mdi-editor-border-color"></i>
                <p class="promo-caption">Blogger's Hub</p></a>
              </div>
            </div>
			
			<div class="col s12 m4">
              <div class="center promo">
                <a href="poll.php" style="text-decoration:none"><i class="mdi-editor-insert-chart"></i>
                <p class="promo-caption">Janta Poll</p></a>
              </div>
            </div>
			
            <!--<div class="col s12 m4">
              <div class="center promo">
               <a href="bazzar.php" style="text-decoration:none"> <i class="mdi-action-add-shopping-cart"></i>
                <p class="promo-caption">ISM BUZZar</p></a>
              </div>
            </div>-->

            <div class="col s12 m4">
              <div class="center promo">
                <a href="clock.php" style="text-decoration:none"><i class="mdi-action-schedule"></i>
                <p class="promo-caption">Campus Clock</p></a>
              </div>
            </div>
          </div>
		  
		  
		  <br /><br />
		  <div class="row">
			
			
           <!-- <div class="col s12 m4 offset-m2">
              <div class="center promo">
                <a href="discuss.php" style="text-decoration:none"><i class="mdi-action-question-answer"></i>
                <p class="promo-caption">Discussion Forum</p></a>
              </div>
            </div>-->

            

           <!-- <div class="col s12 m4">
              <div class="center promo">
                <a href="about.php" style="text-decoration:none"> <i class="mdi-social-group"></i>
               <p class="promo-caption">Our Team</p></a>
              </div>
            </div>
		-->
          </div>

        </div>
		<!--
        <div class="divider"></div>
        <div class="section">
          <div class="row center">
            <h3 class="light header">Materialize Showcase</h3>
            <p class="col s8 offset-s2 caption">Checkout what people are creating with Materialize. Get inspired by these beautiful sites and you can even submit your own website to be showcased here.</p>
            <a href="http://materializecss.com/showcase.html" class="btn-large waves-effect waves-light">Explore our Showcase</a>
          </div>
        </div>
		-->
    </div>
<br /><br /><br />
  <br /><br /><br />
  <br /><br /><br />

    <footer class="teal" style="padding-left:20px;padding-top:50px;">
			
      <div class="container">
        <div class="row">
          <div class="col l3 s12">
            <h5 class="white-text">What is ALLinISM?</h5>
            <p class="grey-text text-lighten-4 l2">
			Ever felt the need for an amalgam that covers all aspects of college life?
			Tired of endless searching for e-books and papers before the exams?
			Longed for a place where you can do all the bakar you want?
			Missed out on an event, just because you were not aware of it?
			Wished for these ALL in ISM?
			Aye ,they now are ALLinISM.
            

          </div>
          <div class="col l4 s12 offset-l1">
            <h5 class="white-text">Recent Activities</h5>
          </div>
          <div class="col l4 s12" style="overflow: hidden;">
            <h5 class="white-text">Connect</h5>
						<div class="fb-like" data-href="https://www.facebook.com/allinismdhn?ref=aymt_homepage_panel" data-width="100" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

		</div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
			<div class="row center">
            <p class="light header white-text"> © 2014-2015 ALLinISM, All rights reserved.</p>
            
          </div>
		
        
        </div>
      </div>
    </footer>
	
<!-- Modals------------------------------ ------------------------->
	
   <div id="news1" class="modal ">
    <div class="modal-content">
		<?php
			$notice_set = get_notices();
			$x=1;
								while($news = mysql_fetch_array($notice_set))
									{
										if($x==1){
										
									
						                echo '<h4>' . $news['event_name'] . '</h4>';

										echo '<img class="img-responsive" height=400 width=100% src="img/events//' . $news['image'] . '"><br /><br />';
										//echo '<div style="color:gray"><b></b></div> ' . nl2br($news['headline']) . '<br /><br />';
										echo "<div style=\"color:brown\"><b>About the Event:</b></div> " . nl2br($news['description']) . "<br />";
										echo '<div style="color:brown"><b>Date:</b></div> ' . $news['event_date'] . '<br />';
										echo '<div style="color:brown"><b>Time:</b></div> ' . $news['event_time'] . '<br />';
									
										}
										$x++;
									}
		
		
		?>
      
    </div><div class="divider"></div>
    <div class="modal-footer">
      <a href="add_notice.php" class="modal-action modal-close btn waves-effect waves-light btn-small " style="margin-left:20px;">Organising an Event?</a>
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
  
  <div id="news1" class="modal ">
    <div class="modal-content">
		<?php
			$notice_set = get_notices();
			$x=1;
								while($news = mysql_fetch_array($notice_set))
									{
										if($x==1){
										
									
						                echo '<h4>' . $news['event_name'] . '</h4>';

										echo '<img class="img-responsive" height=400 width=100% src="img/events//' . $news['image'] . '"><br /><br />';
										//echo '<div style="color:gray"><b></b></div> ' . nl2br($news['headline']) . '<br /><br />';
										echo "<div style=\"color:brown\"><b>About the Event:</b></div> " . nl2br($news['description']) . "<br />";
										echo '<div style="color:brown"><b>Date:</b></div> ' . $news['event_date'] . '<br />';
										echo '<div style="color:brown"><b>Time:</b></div> ' . $news['event_time'] . '<br />';
									
										}
										$x++;
									}
		
		
		?>
      
    </div><hr>
    <div class="modal-footer">
      <a href="add_notice.php" class="modal-action modal-close btn waves-effect waves-light btn-small " style="margin-left:20px;">Organising an Event?</a>
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
  <div id="news2" class="modal ">
    <div class="modal-content">
		<?php
			$notice_set = get_notices();
			$news = mysql_fetch_array($notice_set);
			
			$x=1;
								while($news = mysql_fetch_array($notice_set))
									{
										if($x==1){
										
									
						                echo '<h4>' . $news['event_name'] . '</h4>';

										echo '<img class="img-responsive" height=400 width=100% src="img/events//' . $news['image'] . '"><br /><br />';
										//echo '<div style="color:gray"><b></b></div> ' . nl2br($news['headline']) . '<br /><br />';
										echo "<div style=\"color:brown\"><b>About the Event:</b></div> " . nl2br($news['description']) . "<br />";
										echo '<div style="color:brown"><b>Date:</b></div> ' . $news['event_date'] . '<br />';
										echo '<div style="color:brown"><b>Time:</b></div> ' . $news['event_time'] . '<br />';
									
										}
										$x++;
									}
		
		
		?>
      
    </div><hr>
    <div class="modal-footer">
      <a href="add_notice.php" class="modal-action modal-close btn waves-effect waves-light btn-small " style="margin-left:20px;">Organising an Event?</a>
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
  <div id="news3" class="modal ">
    <div class="modal-content">
		<?php
			$notice_set = get_notices();
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);

			$x=1;
								while($news = mysql_fetch_array($notice_set))
									{
										if($x==1){
										
									
						                echo '<h4>' . $news['event_name'] . '</h4>';

										echo '<img class="img-responsive" height=400 width=100% src="img/events//' . $news['image'] . '"><br /><br />';
										//echo '<div style="color:gray"><b></b></div> ' . nl2br($news['headline']) . '<br /><br />';
										echo "<div style=\"color:brown\"><b>About the Event:</b></div> " . nl2br($news['description']) . "<br />";
										echo '<div style="color:brown"><b>Date:</b></div> ' . $news['event_date'] . '<br />';
										echo '<div style="color:brown"><b>Time:</b></div> ' . $news['event_time'] . '<br />';
									
										}
										$x++;
									}
		
		
		?>
      
    </div><hr>
    <div class="modal-footer">
      <a href="add_notice.php" class="modal-action modal-close btn waves-effect waves-light btn-small " style="margin-left:20px;">Organising an Event?</a>
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
  <div id="news4" class="modal ">
    <div class="modal-content">
		<?php
			$notice_set = get_notices();
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$x=1;
								while($news = mysql_fetch_array($notice_set))
									{
										if($x==1){
										
									
						                echo '<h4>' . $news['event_name'] . '</h4>';

										echo '<img class="img-responsive" height=400 width=100% src="img/events//' . $news['image'] . '"><br /><br />';
										//echo '<div style="color:gray"><b></b></div> ' . nl2br($news['headline']) . '<br /><br />';
										echo "<div style=\"color:brown\"><b>About the Event:</b></div> " . nl2br($news['description']) . "<br />";
										echo '<div style="color:brown"><b>Date:</b></div> ' . $news['event_date'] . '<br />';
										echo '<div style="color:brown"><b>Time:</b></div> ' . $news['event_time'] . '<br />';
									
										}
										$x++;
									}
		
		
		?>
      
    </div><hr>
    <div class="modal-footer">
      <a href="add_notice.php" class="modal-action modal-close btn waves-effect waves-light btn-small " style="margin-left:20px;">Organising an Event?</a>
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
  <div id="news5" class="modal ">
    <div class="modal-content">
		<?php
			$notice_set = get_notices();
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$x=1;
								while($news = mysql_fetch_array($notice_set))
									{
										if($x==1){
										
									
						                echo '<h4>' . $news['event_name'] . '</h4>';

										echo '<img class="img-responsive" height=400 width=100% src="img/events//' . $news['image'] . '"><br /><br />';
										//echo '<div style="color:gray"><b></b></div> ' . nl2br($news['headline']) . '<br /><br />';
										echo "<div style=\"color:brown\"><b>About the Event:</b></div> " . nl2br($news['description']) . "<br />";
										echo '<div style="color:brown"><b>Date:</b></div> ' . $news['event_date'] . '<br />';
										echo '<div style="color:brown"><b>Time:</b></div> ' . $news['event_time'] . '<br />';
									
										}
										$x++;
									}
		
		
		?>
      
    </div><hr>
    <div class="modal-footer">
      <a href="add_notice.php" class="modal-action modal-close btn waves-effect waves-light btn-small " style="margin-left:20px;">Organising an Event?</a>
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
  <div id="news6" class="modal ">
    <div class="modal-content">
		<?php
			$notice_set = get_notices();
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$x=1;
								while($news = mysql_fetch_array($notice_set))
									{
										if($x==1){
										
									
						                echo '<h4>' . $news['event_name'] . '</h4>';

										echo '<img class="img-responsive" height=400 width=100% src="img/events//' . $news['image'] . '"><br /><br />';
										//echo '<div style="color:gray"><b></b></div> ' . nl2br($news['headline']) . '<br /><br />';
										echo "<div style=\"color:brown\"><b>About the Event:</b></div> " . nl2br($news['description']) . "<br />";
										echo '<div style="color:brown"><b>Date:</b></div> ' . $news['event_date'] . '<br />';
										echo '<div style="color:brown"><b>Time:</b></div> ' . $news['event_time'] . '<br />';
									
										}
										$x++;
									}
		
		
		?>
      
    </div><hr>
    <div class="modal-footer">
      <a href="add_notice.php" class="modal-action modal-close btn waves-effect waves-light btn-small " style="margin-left:20px;">Organising an Event?</a>
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
  <div id="news7" class="modal ">
    <div class="modal-content">
		<?php
			$notice_set = get_notices();
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$x=1;
								while($news = mysql_fetch_array($notice_set))
									{
										if($x==1){
										
									
						                echo '<h4>' . $news['event_name'] . '</h4>';

										echo '<img class="img-responsive" height=400 width=100% src="img/events//' . $news['image'] . '"><br /><br />';
										//echo '<div style="color:gray"><b></b></div> ' . nl2br($news['headline']) . '<br /><br />';
										echo "<div style=\"color:brown\"><b>About the Event:</b></div> " . nl2br($news['description']) . "<br />";
										echo '<div style="color:brown"><b>Date:</b></div> ' . $news['event_date'] . '<br />';
										echo '<div style="color:brown"><b>Time:</b></div> ' . $news['event_time'] . '<br />';
									
										}
										$x++;
									}
		
		
		?>
      
    </div><hr>
    <div class="modal-footer">
      <a href="add_notice.php" class="modal-action modal-close btn waves-effect waves-light btn-small " style="margin-left:20px;">Organising an Event?</a>
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
  <div id="news8" class="modal ">
    <div class="modal-content">
		<?php
			$notice_set = get_notices();
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$x=1;
								while($news = mysql_fetch_array($notice_set))
									{
										if($x==1){
										
									
						                echo '<h4>' . $news['event_name'] . '</h4>';

										echo '<img class="img-responsive" height=400 width=100% src="img/events//' . $news['image'] . '"><br /><br />';
										//echo '<div style="color:gray"><b></b></div> ' . nl2br($news['headline']) . '<br /><br />';
										echo "<div style=\"color:brown\"><b>About the Event:</b></div> " . nl2br($news['description']) . "<br />";
										echo '<div style="color:brown"><b>Date:</b></div> ' . $news['event_date'] . '<br />';
										echo '<div style="color:brown"><b>Time:</b></div> ' . $news['event_time'] . '<br />';
									
										}
										$x++;
									}
		
		
		?>
      
    </div><hr>
    <div class="modal-footer">
      <a href="add_notice.php" class="modal-action modal-close btn waves-effect waves-light btn-small " style="margin-left:20px;">Organising an Event?</a>
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
  <div id="news9" class="modal ">
    <div class="modal-content">
		<?php
			$notice_set = get_notices();
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$x=1;
								while($news = mysql_fetch_array($notice_set))
									{
										if($x==1){
										
									
						                echo '<h4>' . $news['event_name'] . '</h4>';

										echo '<img class="img-responsive" height=400 width=100% src="img/events//' . $news['image'] . '"><br /><br />';
										//echo '<div style="color:gray"><b></b></div> ' . nl2br($news['headline']) . '<br /><br />';
										echo "<div style=\"color:brown\"><b>About the Event:</b></div> " . nl2br($news['description']) . "<br />";
										echo '<div style="color:brown"><b>Date:</b></div> ' . $news['event_date'] . '<br />';
										echo '<div style="color:brown"><b>Time:</b></div> ' . $news['event_time'] . '<br />';
									
										}
										$x++;
									}
		
		
		?>
      
    </div><hr>
    <div class="modal-footer">
      <a href="add_notice.php" class="modal-action modal-close btn waves-effect waves-light btn-small " style="margin-left:20px;">Organising an Event?</a>
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
  <div id="news10" class="modal ">
    <div class="modal-content">
		<?php
			$notice_set = get_notices();
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$news = mysql_fetch_array($notice_set);
			$x=1;
								while($news = mysql_fetch_array($notice_set))
									{
										if($x==1){
										
									
						                echo '<h4>' . $news['event_name'] . '</h4>';

										echo '<img class="img-responsive" height=400 width=100% src="img/events//' . $news['image'] . '"><br /><br />';
										//echo '<div style="color:gray"><b></b></div> ' . nl2br($news['headline']) . '<br /><br />';
										echo "<div style=\"color:brown\"><b>About the Event:</b></div> " . nl2br($news['description']) . "<br />";
										echo '<div style="color:brown"><b>Date:</b></div> ' . $news['event_date'] . '<br />';
										echo '<div style="color:brown"><b>Time:</b></div> ' . $news['event_time'] . '<br />';
									
										}
										$x++;
									}
		
		
		?>
      
    </div><hr>
    <div class="modal-footer">
      <a href="add_notice.php" class="modal-action modal-close btn waves-effect waves-light btn-small " style="margin-left:20px;">Organising an Event?</a>
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
  

  
<!----------------------------------------------------------------->
<!------------- BULLETIN MODAL-------------------------------------->

  <div id="notice" class="modal ">
    <div class="modal-content">

<?php
									echo '<h4 class="red-text text-lighten-2">Bulletin</h4><hr /><br />';
									$notice_set = get_news();
									$count =0;
									while($notice = mysql_fetch_array($notice_set))
									{
										
										$count++;
										echo '<div style="color:black;font-size:15px;font-family:comic sans ms"><b><a href="img/newsfeed/' . $notice['pic'] . '" target="_blank" style="color:grey"> ' . $notice['headline'] . '</a><b/></div></br >';
										//echo '<div style="color:grey"> ' . nl2br($notice['description']) . '</div>';
										//echo "<div style=\"color:grey\"> " . $notice['date'] . "<br /></div>";
										//echo '<br /><br />';
										//echo '<img class="" height=600 width=100% src="img/newsfeed//' . $notice['pic'] . '"><br /><br />';

										//echo '<div style="color:brown"><b>Time:</b></div> ' . $notice['event_time'] . '<br />';
										//echo '<div style="color:brown"><b>Event Deadline:</b></div> ' . $notice['event_deadline'] . '<br />';
									
									}
								
									
							?>
	</div><hr>
    <div class="modal-footer">
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
	<!---------------------------- Login PopUp-------------------------------------->
   
	<div id="login" class="modal ">
		<div class="modal-content">
					<?php
						if(!isset($_SESSION['name']))
						{	
							echo '<div class="panel panel-default login">';
							echo "<form class=\"form-horizontal\" action=\"login.php\" method=\"post\">";
							echo  "<br /><div class=\"modal-header \">";
									echo "<p>Login</p>";
								echo "</div><br />";
								echo '<div class="panel panel-body login">';

						
								
									echo "<div class=\"form-group \">";
									
										echo "<label for=\"Name\" class=\"col-lg-2 control-label\" ></label>";
										echo "<div class=\"col-lg-10\">";
										
											echo "<input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Email\">";
											
										echo "</div>";
									echo "</div>";
									
									
									echo "<div class=\"form-group\">";     
									
									echo "<label for=\"Password\" class=\"col-lg-2 control-label\" ></label>";
									echo "<div class=\"col-lg-10\">";
										
										echo "<input type=\"password\"  name=\"password\" class=\"form-control\" placeholder=\"Password\">";
											
										echo "</div>";
									echo "</div>"; 
									
									echo 'Havent Registered yet? <a href="signup.php" class="" style="margin-left:0px;text-decoration:none;">Register</a>';
									
								
								
								
								echo "<div class=\"modal-footer login\">";
									echo "<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>";
									echo "<button class=\"btn btn-primary latest\" type=\"Submit\" value=\"submit\" name=\"submit\">Login</button>";
								echo "</div>";
							
							echo "</form>";
							echo '</div></div>';
						}
						else
						{
							echo "<div class=\"panel panel-default login\">";
							echo "<div class=\"panel-body\">";
							echo "<div class=\"page-header\">";
							echo "Logged in as <b>" . $username . "</b><br /></div>";
							$query = "SELECT * FROM users WHERE email = '{$email}' AND name = '{$username}' LIMIT 1";
								$user_set = mysql_query($query);
							//$user_set = get_user_details($username);
							while($user_detail = mysql_fetch_array($user_set))
							{
								
								echo '<div><br /><hr />';
								echo "<a class=\"btn right\" href=\"logout.php\">Logout</a>" ;

								echo '<a href="profile.php?genre=profile" class="btn right" style="margin-right:30px;">View Profile</a>';
								echo '<a href="profile.php?genre=msg" class="btn right" style="margin-right:30px;">Messages</a>';
								echo "</div>";
								echo '<br /><br /><hr />';
								
							}
							
							echo "</div>";
						}
					
					?>
					
				</div>
				
			</div>
		
	

<!------------------------------------------------------------------->
<?php include("includes/footer.php"); ?>
</div>