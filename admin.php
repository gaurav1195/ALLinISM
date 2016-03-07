<?php require("includes/site_admin_session.php"); ?>

<?php require("includes/connection.php"); ?>







<?php

	

		confirm_site_admin_logged_in();

		$user = $_SESSION['site_admin_name'];

		echo $user;

	

		date_default_timezone_set('Asia/Kolkata');

		$time = date("Y-m-d h:i a");

?>

<?php 

			

			if(isset($_GET['sort']))

			{

				$sort = $_GET['sort'];

			}

			else

			{

				$sort = 'notices';

			}

			

			if(isset($_POST['trend_submit']))

			{

				$trend = mysql_prep($_POST['trend']);

				$about_trend= mysql_prep($_POST['about_trend']);

				if(isset($trend) && !empty($trend) && isset($trend) && !empty($about_trend) && isset($about_trend))

				{

					$query = "INSERT INTO trend (id, trend, about, sub_by)

											VALUES ('', '{$trend}', '{$about_trend}', '{$user}')";

					$result = mysql_query($query, $connection);

					confirm_query($result);

					echo mysql_error();

					$sub = 1;

				} 

			}

			else

			{

				$sub =0;

				

			}

			if(isset($_POST['add_blog']))

			{

					echo 'hello';

					$title =  trim(mysql_prep($_POST['title']));

					$genre =  trim(mysql_prep($_POST['genre']));

					$url =  trim(mysql_prep($_POST['url']));

					$content =  trim(mysql_prep($_POST['content']));

					$blogger =  trim(mysql_prep($_POST['blogger']));

					$query = "INSERT INTO articles (id, title, genre, iframe, visible, time, article_by, content)

											VALUES ('', '{$title}', '{$genre}', '{$url}', '1', '{$time}', '{$blogger}', '{$content}')";

					$result = mysql_query($query, $connection);

					confirm_query($result);

					echo mysql_error();



			}

			

?>



<?php include("includes/header.php"); ?>
<?php
	
	
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

<?php
if(isset($_POST['post']))
	{
		
		
		$message = trim(mysql_prep($_POST['question']));
		date_default_timezone_set('Asia/Kolkata');
		$time = date("Y-m-d h:i a");

	

		if((!empty($message)) && isset($message))
		{
		$query = "INSERT INTO  ask (id, name, question, time)
				  VALUES ('', '{$username}', '{$message}', '$time')
				 
				" ; 
				
		$result = mysql_query($query, $connection);
		}
		if(mysql_affected_rows() == 1)
		{
			//success
		
			$massage = "Question was successfully posted.";
			
		}else{
		$massage = "Sending failed";
		
		$massage .= "<br />" . mysql_error();
		echo mysql_error();
		}
		
		

	
	redirect_to("discuss.php?genre=ask");
													


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
  <!--  Outer row  -->
  <div class="row">
	<div class="section col s12 m9 l10">
	<?php 
	if($sort =='blog')

									{

									$article_set = get_blogs();

									while($article = mysql_fetch_array($article_set))

									{	

										

										//$content = mysql_prep($article['content']);

										//echo "<div class=\"container\" style=\"width:800px\">";

										echo "<div class = \"panel panel-default\">";

										echo '';

										echo "<div class=\"panel-body\" ><h2><div style=\"color:darkblue\">" . $article['title'] . '</div>';

										echo "</h2>";

										echo "<div class=\"blog-post-meta\" style=\"color:grey;\">" . $article['time'] . ' BY-<a href="view_profile.php?name=' . $article['article_by'] . '">' . $article['article_by'] . "</a>";

										echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reviewed by:-<a href="view_profile.php?name=' . $article['review_by'] . '">' . $article['review_by'] . "</a>";

										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre-" . $article['genre'] . "</div>";

										echo "&nbsp;&nbsp;";

										//echo "<small>" . $article['date'] . "</small>";

										echo "<br><br>";

										if(!empty($article['image_name']))

										{

											echo '<img class="featuredImg img-thumbnail" src="img/article/' . $article['image_name'] . '" width=80%><br /><br /><br />';

										}

										//echo $content;

										echo '<div style="font-family:comic sans ms; font-size:17px;margin-left:30px;margin-right:30px;">';

										echo substr((nl2br($article['content'])), 0, 1000);

										echo '....<a href="view_blog.php?id=' . $article['id'] . '">Read More</a>';

										echo '</div><br /><br />';

										echo '<a class="btn small btn-danger pull-right" href="edit_blog.php?id='. $article['id'] .  '" >Edit</a>';

										echo "</p><br />";

										

										echo "<br /><hr>";

										

										echo "<br><br></div></div>";

										

										

										

										

									}

								

								}

								elseif($sort =='moment')

									{

									

										

									$article_set = get_moments();

									while($article = mysql_fetch_array($article_set))

									{	

										

										//$content = mysql_prep($article['content']);

										//echo "<div class=\"container\" style=\"width:800px\">";

										echo "<div class = \"panel panel-default\">";

										echo '';

										echo "<div class=\"panel-body\" ><h2><div style=\"color:darkblue\">" . $article['title'] . '</div>';

										echo "</h2>";

										echo "<div class=\"blog-post-meta\" style=\"color:grey;\">" . $article['time'] . ' Username-<a href="view_profile.php?name=' . $article['article_by'] . '">' . $article['article_by'] . "</a>";

										//echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reviewed by:-<a href="view_profile.php?name=' . $article['review_by'] . '">' . $article['review_by'] . "</a>";

										echo "</div>";

										echo "&nbsp;&nbsp;";

										//echo "<small>" . $article['date'] . "</small>";

										echo "<br><br>";

										

										//echo $content;

										echo '<div style="font-family:comic sans ms; font-size:17px;margin-left:30px;margin-right:30px;">';

										echo (nl2br($article['content']));

										echo '';

										echo '</div><br /><br />';

										echo '<a class="btn small btn-danger pull-right" href="edit_moment.php?id='. $article['id'] .  '" >Edit</a>';

										echo "</p><br />";

										

										echo "<br /><hr>";

										

										echo "<br><br></div></div>";

										

										

										

										

									}
									

								

								}
								elseif($sort =='poll')

								{
									
									echo '<form class="col s12" action="launch_poll.php" method="post" >';
										  echo '<div class="row">';
											echo '<div class="input-field col s12">';
											  echo '<textarea  name="question" class="materialize-textarea" ></textarea>';
											  echo '<label for="textarea1">Question:</label>';
											echo '</div>';
											echo '<div class="input-field col s12">';
											  echo '<textarea  name="a" class="materialize-textarea" ></textarea>';
											  echo '<label for="textarea1">A: </label>';
											echo '</div>';
											echo '<div class="input-field col s12">';
											  echo '<textarea  name="b" class="materialize-textarea" ></textarea>';
											  echo '<label for="textarea1">B: </label>';
											echo '</div>';
											echo '<div class="input-field col s12">';
											  echo '<textarea  name="c" class="materialize-textarea" ></textarea>';
											  echo '<label for="textarea1">C: </label>';
											echo '</div>';
											echo '<div class="input-field col s12">';
											  echo '<textarea  name="d" class="materialize-textarea" ></textarea>';
											  echo '<label for="textarea1">D: </label>';
											echo '</div>';
										  echo '</div>';
										  echo '<div class="modal-footer">';
													echo '<button class="btn btn-default" name="post">Post</button>';
												echo '</div>';
										  
									echo '</form>';
									
									$article_set = get_poll_questions();
									
									echo '<h4 class="red-text text-lighten-2">Previous Polls</h4><br /><br />'; 
									
									while($article = mysql_fetch_array($article_set))

									{	

										echo '<h5 class="red-text text-lighten-2">' . $article['question'] . '</h5>';
										echo '<div class="teal-text">' . $article['a'] . '</div><br />';
										echo '<div class="teal-text">' . $article['b'] . '</div><br />';
										echo '<div class="teal-text">' . $article['c'] . '</div><br />';
										echo '<div class="teal-text">' . $article['d'] . '</div><br />';

									}
									
									
									
								}

								elseif($sort == 'createadmin')

								{

									echo "<div class = \"panel panel-default\">";

									

									echo "<div class=\"panel-body\" ><div style=\"color:darkblue\">Create Blog Admin</div>";

									echo '<form class="form-horizontal" action="admin_panel.php?sort=createadmin" method="post">';

											 echo '<div class="form-group">';

											 echo '<label for="exampleInputName2">Username</label>';

											 echo '<input class="form-control" name="blog_name">';

										

											echo '</div>';

											 echo '<div class="form-group">';

											 echo '<label for="exampleInputName2">Password</label>';

											 echo '<input class="form-control" name="blog_password" type="password">';

										

											echo '</div>';

											echo '<button type="Submit" value="create_admin" class="btn btn-default pull-right" name="create_admin">Create Admin</button>';

										echo '</form>';

									echo '</div></div>';

									 

									if(isset($_POST['create_admin']))

									{

									

										$b_name = mysql_prep($_POST['blog_name']);

										$b_pass = mysql_prep($_POST['blog_password']);

										$hashed_pass = sha1($b_pass);

										$query = "INSERT INTO blog_admins (id, username, password)

																							VALUES ('', '{$b_name}', '{$hashed_pass}') ";

																		$result = mysql_query($query, $connection);

									

																	confirm_query($result);

										echo mysql_error();

									}

								}

								elseif($sort == 'notices')

								{

									$notice_set = get_notices_all();

									

									while($notice = mysql_fetch_array($notice_set))

									{

										

											//$content = mysql_prep($article['content']);

										//echo "<div class=\"container\" style=\"width:800px\">";

										echo "<div class = \"panel panel-default\">";

										echo '';

										echo "<div class=\"panel-body\" ><h2><div style=\"color:darkblue\">" . $notice['event_name'] . '</div>';

										echo "</h2>";

										//echo "<div class=\"blog-post-meta\" style=\"color:grey;\">" . $notice['event_time'] . ' BY-<a href="view_profile.php?name=' . $article['article_by'] . '">' . $article['article_by'] . "</a>";

										//echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reviewed by:-<a href="view_profile.php?name=' . $article['review_by'] . '">' . $article['review_by'] . "</a>";

										//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre-" . $arti['genre'] . "</div>";

										//echo "&nbsp;&nbsp;";

										//echo "<small>" . $article['date'] . "</small>";

										echo "<br><br>";

										if(!empty($notice['image']))

										{

											echo '<img class="featuredImg img-thumbnail" src="img/events/' . $notice['image'] . '" width=80%><br /><br /><br />';

										}

										//echo $content;

										echo '<div style="font-family:comic sans ms; font-size:17px;margin-left:30px;margin-right:30px;">';

										echo substr((nl2br($notice['description'])), 0, 1000);

										//echo '....<a href="read_blog.php?id=' . $article['id'] . '">Read More</a>';

										echo '<br /><br />Event Date: ' . $notice['event_date'] . '<br />Timing: ' . $notice['event_time'] . '<br />Deadline: ' . $notice['event_deadline']; 

										echo '</div><br /><br />';

										//echo '<br /><a href="like.php?article_id=' . $article['id'] . '"' . 'class="btn btn-default latenav pull-right"' .  'style="margin-left:20px;display:inline-block">' . 'Like&nbsp;&nbsp;<span class="badge">' . $article['likes'] . "</span></a>";

										//echo '<a href="potha.php?article_id=' . $article['id'] . '"' . 'class="btn btn-default latenav pull-right"' .  'style="margin-left:20px;display:inline-block">' . 'Potha&nbsp;&nbsp;<span class="badge">' . $article['pothas'] . "</span></a>";

										//echo '<br /><p class="bg-info">';

										//if(isset($_GET['liked']))

										//{

										///	echo "You Have already liked";

										//}

										echo "</p><br />";

										

											echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";



											echo "<a class=\"btn btn-danger pull-right\"";

											echo 'href="';

											echo 'delete_notice.php?id=' . $notice['id'] . '"' .  ">Delete</a>";



											echo "<a class=\"btn btn-primary pull-right\"";

											echo 'href="';

											echo 'edit_notice.php?id=' . $notice['id'] . '"' .  ">Edit</a>";

											echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

										

										echo "<br /><hr>";

										

										echo "<br><br></div></div>";

									}

								}

								

								elseif($sort=='trend')

								{	

									echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

									echo '<b>Add a Trend</b>';

									echo '</div><br /><br />';

									echo '<form class="form-horizontal" action="admin_panel.php?sort=trend" method="post">';

									echo '<div class="form-group">';

									echo '<label for="Article-Name" class="col-lg-2 control-label" >Trend</label>';

									echo '<div class="col-lg-8">';

									echo '<input type="text" name="trend" class="form-control" placeholder="Topic that is Trending" value="" >';



									echo '</div>';

									echo '</div>';

									echo '<div class="form-group">';

									echo '<label for="Article" class="col-lg-2 control-label" >About</label>';

									echo '<div class="col-lg-8">';

									echo '<textarea class="form-control" name="about_trend" placeholder="About the trending Topic" rows="8"></textarea>';



									echo '</div>';

									echo '</div>';

									echo '<div class="modal-footer">';

							

									echo '<button class="btn btn-warning"  type="Submit" value="trend_submit" name="trend_submit">Submit</button>';

									echo '</div>';

									echo '</form>';

									echo '</div></div>';

									

									/*echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

									echo '<b>Delete or Edit a Trend</b>';

									echo '</div><br /><br />';

									$trends = get_trends();

									while($trend = mysql_fetch_array($trends))

									{

									echo '<form class="form-horizontal" action="admin_panel.php?sort=trend" method="post">';

									echo '<div class="form-group">';

									echo '<label for="Article-Name" class="col-lg-2 control-label" >Trend</label>';

									echo '<div class="col-lg-8">';

									echo '<input type="text" name="edit_trend" class="form-control" placeholder="Topic that is Trending" value="' . $trend['trend'] . '" >';

									echo '</div></div>';

									echo '<div class="form-group">';

									echo '<label for="Article" class="col-lg-2 control-label" >About</label>';

									echo '<div class="col-lg-8">';

									

									echo '<textarea class="form-control" name="edit_about_trend" placeholder="About the trending Topic" rows="8">' . $trend['about'] . '</textarea>';

									echo '</div></div><div class="form-group">';

									echo '<label for="Article" class="col-lg-2 control-label" >Visible</label>';

									echo '<div class="col-lg-8">';

									echo '<select name="position" class="form-control">';

									echo '<option value="1">1</option>';

									echo '<option value="2">2</option>';

									echo '<option value="3">3</option>';

									echo '<option value="0">None</option>';

										

									echo '</select>';

									echo '</div></div>';

									echo '';

									}

									

									echo '<div class="modal-footer">';

							

									echo '<button class="btn btn-warning"  type="Submit" value="trend_edit" name="trend_edit">Submit</button>';

									//echo '<button class="btn btn-warning" href="delete_trend.php?id=' . $trend['id'] . '">Delete</button>';

									echo '</div>';

									echo '</form>';

									echo '</div></div>';*/

								}

								elseif($sort=='answer')

								{

									

									$question_details = get_admin_questions();

									while($question = mysql_fetch_array($question_details))

									{

									

										echo '<div class="panel panel-default">';

										echo '<div class="panel-body">';

											echo $question['question'];

											echo '<hr/>';

											echo '<a href="answer_scg.php?id=' . $question['id'] . '" class="btn btn-default btn-xs pull-right">Answer</a>';

											echo '<a href="delete_scg.php?id=' . $question['id'] . '" class="btn btn-danger btn-xs pull-right">Delete</a>';

										echo '</div></div>';

									}

									

								}

								elseif($sort=='notify')

								{

									echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

									echo '<b>Send Notifications on Mobile</b>';

									echo '</div><br /><br />';

									echo '<form class="form-horizontal" action="notification_send.php" method="post">';

									echo '<div class="form-group">';

									echo '<label for="Article-Name" class="col-lg-2 control-label" >Notification</label>';

									echo '<div class="col-lg-8">';

									echo '<input type="text" name="not" class="form-control" placeholder="This will be the heading of the notification" >';



									echo '</div>';

									echo '</div>';

									echo '<div class="form-group">';

									echo '<label for="Article" class="col-lg-2 control-label" >Content</label>';

									echo '<div class="col-lg-8">';

									echo '<textarea class="form-control" name="content" placeholder="" rows="4"></textarea>';



									echo '</div>';

									echo '</div>';

									echo '<div class="modal-footer">';

							

									echo '<button class="btn btn-warning"  type="Submit" value="trend_submit" name="not_submit">Submit</button>';

									echo '</div>';

									echo '</form>';

									

									echo '<br /><br /><br />';

									echo '<p class="bg-info info" style="margin-left:20px"';

									echo '<ul>';

										echo '<li>To add a link use &lt;a href="link"&gt;Link&lt;/a&gt; </li>';

										echo '<li>Blogs - http://allinism.in/allinism/mob_blog.php </li>';

										echo '<li>BUZZar - http://allinism.in/allinism/mob_bazzar.php </li>';

										echo '<li>Check the link in your browser before uploading</li>';

									echo '<ul>';

									echo '</p>';

									

									echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

									echo '<b>Previous Notifications on Mobile</b>';

									echo '</div><br /><br />';

									$nots = get_notifications();

									echo '';



									echo '<ul style="margin-left:50px;"><h2>';

									while($not = mysql_fetch_array($nots)){

										echo '<li>' . $not['note'] . '<a href="delete_not.php?id=' . $not['id'] . '" class="btn btn-danger btn-xs" style="margin-left:100px;">Delete</a></li>';

									}

									echo '</ul></h2>';

									

									echo '</div></div>';

									

									

									

									

								}

								

								elseif($sort=='second')

								{

								

									echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo '<div style="text-align:center;font-size:50px;font-family:comic sans ms;">';

									echo 'Second Hand Stuff';

									echo '</div><br /><br /><br /><br />';

						

							

							

								$product_set = get_products();

								while($product = mysql_fetch_array($product_set))

								{

									

									echo '<div class="col-lg-9">';

									echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo "<b>Name of the Product:</b> " . $product['product_name'] ."<br />";

									echo "<b>Category:</b> " . $product['category'] ."<br />";

									echo '';

									echo "<b>Description:</b> " . $product['description'] ."<br />";

									echo "<b>Bill Available:</b> " . $product['bill'] ."<br />";

									echo "<b>Price:</b> " . $product['price'] ."<br />";

									echo "<b>Mobile No. of Seller:</b> " . $product['mobile'] ."<br />";

									if(!empty($product['pic_name'])){

									echo '<img src="img/bazzar/' . $product['pic_name'] . '" class="img-thumbnail" width=200 height=200>';}

									echo '<br /><br /><br /><div class="modal-footer">';

										echo '<a href="delete_sec.php?id=' . $product['id'] . '" class="btn btn-default">Delete</a>';

										echo '<a href="edit_sec.php?id=' . $product['id'] . '" class="btn btn-default">Edit</a>';

									echo '</div>';

									

									

									echo '</div></div></div>';

								}

								

							

							

									echo '<br /><br /><br />';

										

									echo '</div>';

									echo '</div>';

									

						

									echo '<br /><br />';

			

								}

								

								elseif($sort=='book')

								{

								

									echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo '<div style="text-align:center;font-size:50px;font-family:comic sans ms;">';

									echo 'Books';

									echo '</div><br /><br /><br /><br />';

						

							

							

								$product_set = get_books();

								while($product = mysql_fetch_array($product_set))

								{

									

									echo '<div class="col-lg-9">';

									echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo "<b>Name of the Product:</b> " . $product['book_name'] ."<br />";

									echo "<b>Category:</b> " . $product['genre'] ."<br />";

									echo "<b>Writer:</b> " . $product['writer'] ."<br />";

									echo '';

									echo "<b>Description:</b> " . $product['description'] ."<br />";

									echo "<b>Bill Available:</b> " . $product['bill'] ."<br />";

									echo "<b>Price:</b> " . $product['price'] ."<br />";

									echo "<b>Mobile No. of Seller:</b> " . $product['mobile'] ."<br />";

									if(!empty($product['image'])){

									echo '<img src="img/product/' . $product['image'] . '" class="img-thumbnail" width=200 height=200>';}

									echo '<br /><br /><br /><div class="modal-footer">';

										echo '<a href="delete_book.php?id=' . $product['id'] . '" class="btn btn-default">Delete</a>';

										echo '<a href="edit_book.php?id=' . $product['id'] . '" class="btn btn-default">Edit</a>';

									echo '</div>';

									

									

									echo '</div></div></div>';

								}

								

							

							

									echo '<br /><br /><br />';

										

									echo '</div>';

									echo '</div>';

									

						

									echo '<br /><br />';

			

								}

								

								

								elseif($sort=='bulletin')

								{

									echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

									echo '<form class="form-horizontal" action="admin_panel.php?sort=bulletin" method="post">';

										 echo '<div class="form-group">';

											 echo '<label for="exampleInputName2">Headline</label>';

											 echo '<input class="form-control" name="headline of the notice">';

										

										echo '</div>';

										echo '<div class="form-group">';

											 echo '<label for="exampleInputName2">Add Image of the Notice</label>';

											 echo '<input class="form-control" type="file" name="photo">';

										

										echo '</div>';

										

									echo '</form>';

									echo '</div></div></div>';

								}

								elseif($sort == 'users')

								{

									echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

									$user_set = get_users();

									echo '<table class="table">';

										echo '<tr>'; 

											echo '<td>Sr No. </td>';

											echo '<td>Name </td>';

											echo '<td>Email </td>';

										echo '</tr>'; 

										$c=1;

										while($user = mysql_fetch_array($user_set))

										{

											echo '<tr>';

												echo '<td>' . $c . '</td>';

												echo '<td>' . $user['name'] . '</td>';

												echo '<td>' . $user['email'] . '</td>';

												$c++;

											echo '</tr>';

										}

									echo '</table>';

									echo '</div></div></div>';

								}

								elseif($sort == 'buyer')

								{

									echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

									$feedback_set = get_buyer_list();

									echo '<table class="table">';

										echo '<tr>'; 

											//echo '<td>Name </td>';

											echo '<td>Name </td>';

											echo '<td>Item </td>';

											echo '<td>Mobile NO </td>';

											echo '<td>Email </td>';

											echo '<td>Date </td>';

											echo '<td>Room </td>';

											echo '<td>Hostel </td>';

										echo '</tr>'; 

										$c=1;

										while($feed = mysql_fetch_array($feedback_set))

										{

											echo '<tr>';

												//echo '<td>' . $feed['name'] . '</td>';

												echo '<td>' . $feed['buyer'] . '</td>';

												echo '<td>' . $feed['product'] . '</td>';

												echo '<td>' . $feed['mobile'] . '</td>';

												echo '<td>' . $feed['email'] . '</td>';

												echo '<td>' . $feed['time'] . '</td>';

												echo '<td>' . $feed['room'] . '</td>';

												echo '<td>' . $feed['hostel'] . '</td>';

												$c++;

											echo '</tr>';

										}

									echo '</table>';

									echo '</div></div></div>';

								}

								elseif($sort == 'feedback')

								{

									echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

									$feedback_set = get_feedback();

									echo '<table class="table">';

										echo '<tr>'; 

											echo '<td>Sr No. </td>';

											echo '<td>Name </td>';

											echo '<td>Feedback </td>';

										echo '</tr>'; 

										$c=1;

										while($feed = mysql_fetch_array($feedback_set))

										{

											echo '<tr>';

												echo '<td>' . $c . '</td>';

												echo '<td>' . $feed['name'] . '</td>';

												echo '<td>' . $feed['feedback'] . '</td>';

												$c++;

											echo '</tr>';

										}

									echo '</table>';

									echo '</div></div></div>';

								}

								elseif($sort == 'add_blog')

								{

									echo '<div class="panel panel-default">';

										echo '<div class="panel-body">';

											echo '<div class="modal-header">';

												echo 'Add a blog';

											echo '</div>';

											

											echo '<form class="form-horizontal" action="admin_panel.php?sort=add_blog" method="post">';

												

													echo '<div class="form-group">';

														echo '<label for="Article-Name" class="col-lg-2 control-label" >Title</label>';

														echo '<div class="col-lg-8">';

															echo '<input type="text" name="title" class="form-control" placeholder=""  >';

		

														echo '</div>';

													echo '</div>';

												

												echo '<div class="form-group">';

														echo '<label for="Article-Name" class="col-lg-2 control-label" >URL</label>';

														echo '<div class="col-lg-8">';

															echo '<input type="text" name="url" class="form-control" placeholder=""  >';

		

														echo '</div>';

												echo '</div>';

												

												echo '<div class="form-group">';

														echo '<label for="Article-Name" class="col-lg-2 control-label" >Few lines about the blog</label>';

														echo '<div class="col-lg-8">';

															echo '<textarea type="text" name="content" class="form-control" rows="4" placeholder="starting few lines"  ></textarea>';

		

														echo '</div>';

												echo '</div>';

												

												echo '<div class="form-group">';

														echo '<label for="Article-Name" class="col-lg-2 control-label" >Written By-</label>';

														echo '<div class="col-lg-8">';

															echo '<input type="text" name="blogger" class="form-control" placeholder="The person who wrote this"  >';

		

														echo '</div>';

												echo '</div>';

												

												

												echo '<div class="form-group">';

														echo '<label for="Article-Name" class="col-lg-2 control-label" >Genre</label>';

														echo '<div class="col-lg-8">';

															echo '<select class="form-control" name="genre">';

																echo '<option value="ism">Poems</option>';

																echo '<option value="complex">Travelogues</option>';

																echo '<option value="fantasy">Writings</option>';

															echo '</select>';



		

														echo '</div>';

													echo '</div>';

												

													

												echo '<button type="submit" name="add_blog" class="btn btn-primary pull-right">Add</button>';

										

											echo '</form>';

										echo '</div>';

									echo '</div>';

								}

								elseif($sort=='bazzar')

								{		

									echo '<div class="panel panel-default">';

									echo '<div class="panel-body">';

									echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

									echo 'Add a Product Category</div>';

									echo '<form class="" action="admin_panel.php?sort=bazzar" method="post">';

									echo '<button class="btn btn-danger btn-block" name="add_product">Add a new Product Category</button>';

									echo '</form>';

									if(isset($_POST['add_product']))

									{

										echo '<form class="" action="admin_panel.php?sort=bazzar" method="post">';

											 echo '<div class="form-group">';

											 echo '<label for="exampleInputName2">Name of the Product</label>';

											 echo '<input class="form-control" name="name_pro">';

										

											echo '</div>';

											echo '<button type="sumit" name="send_product">Submit</button>';

										echo '</form>';

									}

									if(isset($_POST['send_product']))

									{

										$pro = trim(mysql_prep($_POST['name_pro']));

										if(isset($_POST['name_pro']) && !empty($_POST['name_pro']))

										{

											$query = "INSERT INTO item (product_name) VALUES ('{$pro}') ";

											$result = mysql_query($query, $connection);

			

											confirm_query($result);

											redirect_to("admin_panel.php?sort=bazzar");

										}



									}

									echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

									echo 'Add a Brand</div>';

									echo '<form class="form-inline" action = "admin_panel.php?sort=bazzar" method="post">';

									  echo '<div class="form-group">';

										echo '<label for="exampleInputName2">Choose then category in which you want to add the brand</label>';

										echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

										echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

										$items = get_items();

										echo '<select name="prod" class="form-control">';

										while($item = mysql_fetch_array($items))

										{

											echo '<option value="' . $item['product_name'] . '">' . $item['product_name'] . '</option>';

										}

										

											

										echo '</select>';

									echo '</div>';

									  

									  echo '<button type="submit" class="btn btn-default" name="select" >Select</button>';

									echo '</form>';

									if(isset($_POST['select']))

									{

										 $category =  trim(mysql_prep($_POST['prod']));

										 echo '<form class="form-horizontal" action = "admin_panel.php?sort=bazzar&cat=' . $_POST['prod'] . '" method="post" enctype="multipart/form-data">';

										echo '<div class="form-group">';

										echo '<label for="exampleInputName2" class="col-lg-2 control-label" >Name of the Brand</label>';

										echo '<div class="col-lg-5">';

										echo '<input class="form-control " name="brand">';

										echo '</div></div>';

										echo '<div class="form-group">';

										echo '<label for="exampleInputName2" class="col-lg-2 control-label" >Price</label>';

											echo '<div class="col-lg-5">';

										echo '<input class="form-control" name="price">';

										echo '</div></div>';

										echo '<div class="form-group">';

										echo '<label for="exampleInputName2" class="col-lg-2 control-label" >Quantity</label>';

										echo '<div class="col-lg-5">';

										echo '<input class="form-control" name="quantity">';

										echo '</div></div>';

										echo '<div class="form-group">';

										echo '<label for="exampleInputName2" class="col-lg-2 control-label" >Availability</label>';

										echo '<div class="col-lg-5">';

										echo '<input class="" type="radio" name="avail" value="1">Yes</input>';

										echo '<input class="" type="radio" name="avail" value="0">NO</input>';

										echo '</div></div>';

										echo '<div class="form-group">';

										echo '<label for="exampleInputName2" class="col-lg-2 control-label" >Availability</label>';

										echo '<div class="col-lg-5">';

										echo '<input type="file" name="photo" class="form-control">';

										echo '</div></div>';

									

										   echo '<button type="submit" class="btn btn-default" name="send_brand" >Add the Brand</button>';

										echo '</form>';

										}

									

									if(isset($_POST['send_brand']))

									{

										$category = $_GET['cat'];

										$brand =  trim(mysql_prep($_POST['brand']));

										$price =  trim(mysql_prep($_POST['price']));

										$quantity =  trim(mysql_prep($_POST['quantity']));

										$avail =  trim(mysql_prep($_POST['avail']));

										$target= 'C:\xampp1\htdocs\boot\img\bazzar\\' ;

										$target = $target . basename( $_FILES['photo']['name']);

										$target = trim(mysql_prep($target));

										$pic=($_FILES['photo']['name']);

										

										if(isset($_POST['brand']) && !empty($_POST['brand']) && isset($_POST['price']) && !empty($_POST['price']) && isset($_POST['quantity']) && !empty($_POST['quantity']))

										{

											$query = "INSERT INTO brand (category, brand, price, quantity, avail, pic)

																	VALUES ('{$category}', '{$brand}', '{$price}', '{$quantity}', '{$avail}', '{$pic}') ";

												$result = mysql_query($query, $connection);

			

											confirm_query($result);

											move_uploaded_file($_FILES['photo']['tmp_name'], $target);

											redirect_to("admin_panel.php?sort=bazzar");

											

										}

		



									}

									

									

									

									echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

									echo 'Edit a Brand</div>';

									echo '<form class="form-inline" action = "admin_panel.php?sort=bazzar" method="post">';

									  echo '<div class="form-group">';

										echo '<label for="exampleInputName2">Choose the product in which you want to Edit the brand</label>';

										echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

										echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

										$items = get_items();

										echo '<select name="prod" class="form-control">';

										while($item = mysql_fetch_array($items))

										{

											echo '<option value="' . $item['product_name'] . '">' . $item['product_name'] . '</option>';

										}

										

											

										echo '</select>';

									echo '</div>';

									  

									  echo '<button type="submit" class="btn btn-default" name="edit_product" >Select</button>';

									echo '</form>';

									if(isset($_POST['edit_product']))

									{

										$category =  trim(mysql_prep($_POST['prod']));

										echo '<div class="modal-header" style="font-size:22px;color:brown;font-family:comic sans ms">';

										echo 'Edit a Brand</div>';

										echo '<form class="form-inline" action = "admin_panel.php?sort=bazzar&cat=' . $category . '" method="post">';

									  echo '<div class="form-group">';

										echo '<label for="exampleInputName2">Choose the brand you want to Edit </label>';

										echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

										echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

										$items = get_brands_for_product($category);

										echo '<select name="prod" class="form-control">';

										while($item = mysql_fetch_array($items))

										{

											echo '<option value="' . $item['brand'] . '">' . $item['brand'] . '</option>';

										}

										

											

										echo '</select>';

									echo '</div>';

									  

									  echo '<button type="submit" class="btn btn-default" name="edit_brand" >Select</button>';

									echo '</form>';

										}

									

									if(isset($_POST['edit_brand']))

									{	

										$category = $_GET['cat'];

										$cat_brand = $_POST['prod'];

										$brand_details = get_details_of_brand($category, $cat_brand);

										//echo $category;

										//echo $cat_brand;

								

										 while($brand = mysql_fetch_array($brand_details))

										 {

										 echo '<form class="form-horizontal" action = "edit_brand.php?cat=' . $category . '&brand=' . $cat_brand . '" method="post" enctype="multipart/form-data">';

										echo '<div class="form-group">';

										echo '<label for="exampleInputName2" class="col-lg-2 control-label">Name of the Brand</label>';

										echo '<div class="col-lg-5">';

										echo '<input class="form-control " name="edit_brand"  value = "' . $brand['brand'] . '">';

										echo '</div></div>';

										echo '<div class="form-group">';

										echo '<label for="exampleInputName2" class="col-lg-2 control-label" >Price</label>';

											echo '<div class="col-lg-5">';

										echo '<input class="form-control" name="edit_price"  value = "' . $brand['price'] . '">';

										echo '</div></div>';

										echo '<div class="form-group">';

										echo '<label for="exampleInputName2" class="col-lg-2 control-label" >Quantity</label>';

										echo '<div class="col-lg-5">';

										echo '<input class="form-control" name="edit_quantity"  value = "' . $brand['quantity'] . '">';

										echo '</div></div>';

										echo '<div class="form-group">';

										echo '<label for="exampleInputName2" class="col-lg-2 control-label" >Availability</label>';

										echo '<div class="col-lg-5">';

										echo '<input class="" type="radio" name="edit_avail" value="1">Yes</input>';

										echo '<input class="" type="radio" name="edit_avail" value="0">NO</input>';

										echo '</div></div>';

										echo '<div class="form-group">';

										echo '<label for="exampleInputName2" class="col-lg-2 control-label" >Photo</label>';

										echo '<div class="col-lg-5">';

										echo '<input type="file" name="photo" class="form-control" value = "' . $brand['pic'] . '">';

										echo '</div></div>';

									

										   echo '<button type="submit" class="btn btn-default" name="send_edited_brand" >Edit the Brand</button>';

										echo '</form>';

										}

									}

		
								}
     ?>
	 
	 
	 
	 <?php
		if(!isset($_GET['genre'])){
			echo '<div class="row">';
			  echo '<div class="col s12 m9 l12">';
				echo '<div class="card-panel teal">';
				  echo '<span class="white-text">Keeping in mind the defamation from certain issues, when discussed in public,
				  bring to our college; we would thereby urge and encourage the students to henceforth
				  bring up all of their queries/views/discussions on this forum.';
				  echo '</span>';
				echo '</div>';
			  echo '</div>';
			echo '</div>';
			
			echo '<div class="row">';
			  echo '<div class="col s12 m9 l12">';
				echo '<div class="card-panel teal">';
				  echo '<span class="white-text">Questions pertaining to the SCG may be asked on the ask SCG tab, 
				  While discussions may be carried on "the Shoutbox tab" anonymously, keeping the identity of the
				  person confidential so that you may express yourself freely.';
				  echo '</span>';
				echo '</div>';
			  echo '</div>';
			echo '</div>';
			
			
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