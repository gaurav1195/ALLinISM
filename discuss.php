<?php include("includes/session.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php //include("includes/new_functions.php"); ?>
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
		
        <li class="bold"><a href="discuss.php?genre=ask" class="list-group-item <?php if($sel_genre == 'ask'){ echo "active" ;}  ?>">Ask SCG or ISS</a></li>
        <li class="bold"><a href="discuss.php?genre=shout" class="list-group-item <?php if($sel_genre == 'shout'){ echo "active" ;}  ?>">Shoutbox</a></li>
        
		<br /><br /><br />
		<br /><br /><br />
        
      
      
	  
      </ul>  
	  
    </header>
	
	  <main><div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
		<h6 class="header center-on-small-only right-align"><a style="text-decoration:none;color:white" href="http://allinism.in/">Home</a></h6>
        <h1 class="header center-on-small-only">Discussion Forum</h1>
		<?php
			if(!isset($_GET['genre'])){
        echo '<h4 class ="light red-text text-lighten-4 center-on-small-only">Kyon Jana FB ,Quora 
Discuss yahi kar lo na .
No seriously guys lets not wash our dirty Lenin (pun intended) in public.</h4>';}
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
		if($sel_genre == 'ask'){
										
									echo '<div class="row">';
									echo '<h4 class="col s12 light header">Post Your question here, try to be as short as possible.</h4>';
									echo '</div>';
									echo '<div class="row">';
										echo '<form class="col s12" action="discuss.php?genre=ask" method="post" >';
										  echo '<div class="row">';
											echo '<div class="input-field col s12">';
											  echo '<textarea  name="question" class="materialize-textarea" ></textarea>';
											  echo '<label for="textarea1">Question:</label>';
											echo '</div>';
										  echo '</div>';
										  echo '<div class="modal-footer">';
													echo '<button class="btn btn-default" name="post">Post</button>';
												echo '</div>';
										  
										echo '</form>';
									  echo '</div>';
												/*echo '<form class="form-horizontal"  action="discuss.php?genre=ask" method="post" placeholder="Post Your question here, try to be as short as possible.">';
										
											echo '<div class="modal-header">';
												echo '<b>Post Your Question</b>';
											echo '</div><br /><br />';
											echo '<div class="form-group">';
											echo '<label for="Article" class="col-lg-2 control-label" >Question: </label>';
												echo '<div class="col-lg-10">';
											
												echo '<textarea class="form-control" name="question" rows="4" placeholder="Post Your question here, try to be as short as possible."></textarea>';
											
												echo '</div>';
											echo '</div>';
												echo '<div class="modal-footer">';
													echo '<button class="btn btn-default" name="post">Post</button>';
												echo '</div>';
										
										
									echo '</form>';*/
									echo '<br /><br /><br />';
									echo '<h4 class="col s12 light header">Previous Questions</h4><br /><br />';
									$question_set = get_questions();
									while($question = mysql_fetch_array($question_set))
									{
													echo '<br /><div class="row">';
													  echo '<div class="col s12 m9 l12">';
														echo '<div class="card-panel teal">';
														  echo '<span class="white-text">Question: ';
														  echo '</span>';
														  echo '<span class="white-text"> ' . $question['question'];
														  echo '</span><br />';
														  if($question['answer'] == 0)
															echo '<a class="btn right" href="#">Not Answered yet</a><br /><br />';
															elseif($question['answer'] == 1)
															echo '<a class="btn white-text teal" style="float:right;" href="view_answers.php?id=' . $question['id'] . '">View Answer</a><br /><br />';
														echo '</div>';
													  echo '</div>';
													echo '</div>';
										

											
								
										
									}

								}
								
								
								
							
		
		if($sel_genre == 'shout'){
										
									echo '<div class="row">';
									echo '<h5 class="col s12 light header">ISM Matters, What should be done and what not. Post Your concern here, try to be as short as possible.</h5>';
									echo '</div>';
									echo '<div class="row">';
										echo '<form class="col s12" action="discuss.php?genre=shout" method="post" >';
										  echo '<div class="row">';
											echo '<div class="input-field col s12">';
											  echo '<textarea  name="shout" class="materialize-textarea" ></textarea>';
											  echo '<label for="textarea1">Your Concern: </label>';
											echo '</div>';
										  echo '</div>';
										  echo '<div class="modal-footer">';
													echo '<button class="btn btn-default" name="send">Post</button>';
												echo '</div>';
										  
										echo '</form>';
									  echo '</div>';
											
									echo '<br /><br /><br />';
									echo '<h4 class="col s12 light header">Previous Discussions: </h4><br /><br />';
									$topic_set = get_topics();
									while($topic = mysql_fetch_array($topic_set))
									{
													echo '<br /><div class="row">';
													  echo '<div class="col s12 m9 l12">';
														echo '<div class="card-panel teal">';
														  echo '<span class="white-text">Question: ';
														  echo '</span>';
														  echo '<span class="white-text"> ' . $topic['shout'];
														  echo '<br /><div style="color:white;font-size:8px">Posted On: ' . $topic['time'] . '</div>';
														  echo '</span><br />';
														  $comments = get_comments_by_id($topic['id']);
															$c = mysql_num_rows($comments);
															echo '<a class="btn right white-text" href="comments.php?id=' . $topic['id'] . '">Comments&nbsp;' . $c . '</a>';

														echo '<br /><br /></div>';
													  echo '</div>';
													echo '</div>';
										

											
								
										
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