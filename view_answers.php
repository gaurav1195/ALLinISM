<?php require_once("includes/connection.php") ;?>
<?php require_once("includes/new_functions.php") ; ?>
<?php require_once("includes/session.php") ; ?>
<?php
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}
	else
		redirect_to("discuss.php?genre=ask");

?>
<?php
	confirm_logged_in();
	$username = $_SESSION['name'];
	if(!isset($_GET['id']))
	{
		//redirect_to("discuss.php?genre=shout");
		echo 'erreo';
	}
	$que_id = $_GET['id'];

	if(isset($_POST['submit']))
	{
		$comment = trim(mysql_prep($_POST['comment']));
		if(!empty($_POST['comment']) && (isset($_POST['comment'])))
		{
			$comment = trim(mysql_prep($_POST['comment']));
			date_default_timezone_set('Asia/Kolkata');
			$time = date("Y-m-d h:i a");

			$query = "INSERT INTO  comments (id, shout_id, name, comment , time)
				  VALUES ('', $que_id, '{$username}','{$comment}', '{$time}')
				 
				" ; 
			$result = mysql_query($query);
			confirm_query($result);
			echo mysql_error();
			
			redirect_to('comments.php?id=' . $que_id );
			
		}
		else
		{
			$message = "Plaease fill in the comment form";
			echo $message;
		}
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


<?php require_once("includes/header.php") ; ?>


					<?php
									echo '<div class="container">';
									echo '<div class="row">';
									$questions = get_question_by_id($id);
									$question = mysql_fetch_array($questions);
									echo '<h5 class="col s12 light header">' . $question['question'] . '</h5>';
								    echo '<br /><div style="color:grey;margin-left:20px;font-size:8px">Posted On: ' . $question['time'] . '</div>';

									echo '</div>';
									
						
									/*	
									echo '<br /><br /><hr><form class="form-horizontal" method="post" action="comments.php?id=' . $topic['id'] . '">';
										echo '<div class="form-class">';
											echo '<lable for="comment"></lable>';
											echo '<textarea name="comment" rows="3" placeholder="write your expert comment here" class="form-control"></textarea>';
											echo '<br /><button name="submit" class="btn btn-xs btn-danger pull-right">Comment</button>'; 
										echo '</div>';
									echo '</form>';*/
									$answers = get_answer_by_id($id);
									$answer = mysql_fetch_array($answers);
													echo '<br /><div class="row">';
													  echo '<div class="col s12 m9 l12">';
														echo '<div class="teal-text">';
														  
														  echo '<span class=""> ' . $answer['answer'];
														  echo '</span><br />';

														echo '</div>';
													  echo '</div>';
													echo '</div>';
										
									
								echo '</div>';
						
						
						
					
					?>
				</div>
			</div>	
		</div>
	</div>
</div>
<br /><br /><br /><br />
<br /><br /><br /><br />

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
	



<?php require_once("includes/footer.php") ; ?>
