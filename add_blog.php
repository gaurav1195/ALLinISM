<?php include("includes/session.php"); ?>
<?php include("includes/connection.php"); ?>
<?php require_once("includes/new_functions.php"); ?>
<?php include("includes/header.php"); ?>

<?php
	confirm_logged_in();
	$username = $_SESSION['name'];
	$user_id = $_SESSION['user_id'];
	$email = $_SESSION['email'];
?>

<?php
	if(isset($_POST['submit']))
	{
		if(isset($_POST['name'])){
		$article_name = mysql_prep($_POST['name']);}
		
		if(isset($_POST['genre'])){
		$genre = mysql_prep($_POST['genre']);}
	
		if(isset($_POST['article'])){
		$article = mysql_prep($_POST['article']);}
		
		
		if(isset($_FILES['photo']['name'])){
		$target= '../allinism/img/article/' ;
		$target = $target . basename( $_FILES['photo']['name']);
		$target = trim(mysql_prep($target));
		$pic=($_FILES['photo']['name']);
		}
		
		
	date_default_timezone_set('Asia/Kolkata');
	$time = date("Y-m-d h:i a");
	
	
	
	
	//$visible = mysql_prep($_POST['visible']);

		if(isset($_POST['article'])  && isset($_POST['name'])  && isset($_POST['genre']) && !empty($_POST['article']) && !empty($_POST['name']) && !empty($_POST['genre']))
		{
			if(!empty($_FILES['photo']['name']))
			{
				$size=filesize($_FILES['photo']['tmp_name']);
				define ("MAX_SIZE","2000");

				if(getimagesize($_FILES['photo']['tmp_name']))
				{
					if ($size < MAX_SIZE*1024)
					{
						$target= '../allinism/img/article/' ;
						$target = $target . basename( $_FILES['photo']['name']);
						$target = trim(mysql_prep($target));
						$pic=($_FILES['photo']['name']);
						
						$query = "INSERT INTO  articles (id, article_by, title, content, genre, time, visible, image_name)
						  VALUES ('', '{$username}', '{$article_name}', '{$article}', '{$genre}', '$time', '0', '{$pic}')";
						
						$result = mysql_query($query);
						confirm_query($result);
						echo 'helo';
						if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
							echo "The file has been uploaded, and your information has been added to the directory";
							redirect_to("blog.php?add=1");
						} else {
							
							$error = 'Sorry, there was a problem uploading your file.';
							echo mysql_error();
						}
						echo mysql_error();
						//redirect_to("new_blog.php");
					}
					else{
						$error .= 'File Size limit exeeded';
					}
				}
				else
				{
					$error .= 'Only images are allowed';
				}
			}
			else
			{
			echo 'hello';

			// strinngs need quotes ' ' around them
			$query = "INSERT INTO  articles (id, article_by, title, content, genre, time, visible, image_name)
						  VALUES ('', '{$username}', '{$article_name}', '{$article}', '{$genre}', '$time', '0', '{$pic}')";
						 
			
			$result = mysql_query($query, $connection);
			confirm_query($result);
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
			redirect_to("new_blog.php?add=1");
			else{
			echo '';
			redirect_to("new_blog.php?add=1");
			//echo "<p>Subject creation failed</p><br />";
				}
			}
		}
		else
		{
			$error = "We couldn't subumit your article. You might Have missed few entries.";
		}
}
?>
 <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed text-white" style="background-color:">
        <li class="logo" style="background-color:;"><a id="logo-container"  href="http://allinism.in/" class="brand-logo" >
            <img id="front-page-logo" style="width:100px;height:100px;" class="responsive-img" src="img/allin.png"></a></li>
		
        <li class="bold" style=";"><a href="new_blog.php?genre=ism" class="list-group-item <?php if($sel_genre =='ism'){ echo "active" ;} ?>">Poems</a></li>
        <li class="bold"><a href="new_blog.php?genre=complex" class="list-group-item <?php if($sel_genre =='complex'){ echo "active" ;} ?>">Travelogues</a></li>
        <li class="bold"><a href="new_blog.php?genre=fantasy" class="list-group-item <?php if($sel_genre =='fantasy'){ echo "active" ;} ?>">Writings</a></li>
        <li class="bold"><a href="new_blog.php?genre=batch" class="list-group-item <?php if($sel_genre =='batch'){ echo "active" ;} ?>">Batch'15 Moments</a></li>
        
		<br /><br /><br />
		<br /><br /><br />
		<li class="bold"><a href="add_blog.php" class="btn waves-effect waves-light btn-small">Add your Blog</a></li>
        
      
      
	  
      </ul>  
	  
    </header>
	
	  <main><div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
		<h6 class="header center-on-small-only right-align"><a style="text-decoration:none;color:white" href="http://allinism.in/">Home</a></h6>
        <h1 class="header center-on-small-only">Blogger's Hub</h1>
		<?php
			
        echo '<h4 class ="light red-text text-lighten-4 center-on-small-only">For the travelogue writers, the poets, the sports fanatics, the critics, the foodies ,chai-sutta debaters and the people whom I am failing to classify.
For freshers may come and pass-outs may go,
Blogs stay on forever!</h4>'
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
		<h4 class ="light red-text text-lighten-2 center-on-small-only">Add your Blog/Article</h4>
			<form class="col s12" action="add_blog.php" method="post" enctype="multipart/form-data" >
					<div class="row">
						<p class="bg-info">
							<?php
								if(isset($massage))
								{
									echo $massage;
								}
							
							?>
							</p>
							<p class="red-text">
							<?php
								if(isset($error))
								{
									echo $error;
								}
							
							?>
						<div class="input-field col s12">
						  <textarea  name="name" class="materialize-textarea " placeholder="Title of the blog"></textarea>
						  <label for="textarea1">Title</label>
						  
						</div>
						
					  <div class="input-field col s12">
					  
						<select name="genre">
						  <option value="ism">Poems</option>
						  <option value="complex">Travelogues</option>
						  <option value="fantasy">Writings</option>
						</select>
						<label>Genre</label>
					  </div>
				
					  <div class="input-field col s12">
						  <div class="file-field input-field">
							  <input class="file-path " type="text"/>
							  <div class="btn">
								<span>File</span>
								<input type="file"  name="photo"/>
							  </div>
							</div>
					  </div>

						
						<div class="input-field col s12">
							<textarea  name="article" class="materialize-textarea" ></textarea>
							<label for="textarea1">Article</label>
						</div>
						
						
					</div>
					<div class="modal-footer">
						<button class="btn btn-default" name="submit">Post</button>
					</div>
										  
			</form>
	
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