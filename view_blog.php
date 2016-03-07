<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>
<style>
	#loadImg{position:absolute;z-index:999;}
	#loadImg div{display:table-cell;width:950px;height:633px;background:#fff;text-align:center;vertical-align:middle;}
	</style>
<?php
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}
	else
	{
		redirect_to("blog.php");
	}
	$blog = get_blog_by_id($id);


?>
 <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed text-white" style="background-color:">
        <li class="logo" style="background-color:;"><a id="logo-container"  href="http://allinism.in/" class="brand-logo" >
            <img id="front-page-logo" style="width:100px;height:100px;" class="responsive-img" src="img/allin.png"></a></li>
		
        <li class="bold" style=";"><a href="blog.php?genre=ism" class="list-group-item <?php if($sel_genre =='ism'){ echo "active" ;} ?>">Poems</a></li>
        <li class="bold"><a href="blog.php?genre=complex" class="list-group-item <?php if($sel_genre =='complex'){ echo "active" ;} ?>">Travelogues</a></li>
        <li class="bold"><a href="blog.php?genre=fantasy" class="list-group-item <?php if($sel_genre =='fantasy'){ echo "active" ;} ?>">Writings</a></li>
        <li class="bold"><a href="blog.php?genre=batch" class="list-group-item <?php if($sel_genre =='batch'){ echo "active" ;} ?>">Batch'15 Moments</a></li>
        
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
			if(!isset($_GET['genre'])){
        echo '<h4 class ="light red-text text-lighten-4 center-on-small-only">For the travelogue writers, the poets, the sports fanatics, the critics, the foodies ,chai-sutta debaters and the people whom I am failing to classify.
For freshers may come and pass-outs may go,
Blogs stay on forever!</h4>';}
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
	<div class="section col s12 m9 l12">
	
	<?php 
		
	
	 echo '<a href="blog.php?genre=' . $blog['genre'] . '" class="btn right waves-effect waves-light btn-small">Go Back</a><br /><br />';
     if(!empty($blog['iframe']))
		{
			echo '<div class="col l12">';
				echo '<div id="loadImg" style="image-align:center"><div><img src="img/ajax-loader.gif" width="100"/></div></div>';
				//echo '<iframe width="100%" height="900" src="http://astitvam.weebly.com/" frameborder="0" allowfullscreen></iframe>';
				echo '<iframe width="100%" height="900" src="' . $blog['iframe'] . '" frameborder="0" ';
				echo "onload=\"document.getElementById('loadImg').style.display='none';\" allowfullscreen></iframe>";
			

			
			echo '</div>';
		}
		else
		{
									 echo '<div class="card blue-grey darken-1">';
										echo '<div class="card-content white-text">';
											echo '<span class="card-title">' . $blog['title'] . '</span><div class="right white-text text-darken-3" >By: ' . $blog['article_by'] . '</div>';
											echo "<div class=\"blog-post-meta\" style=\"color:brown;\">" . $blog['time'] . '<hr><br />';
										//	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reviewed by:-<a href="view_profile.php?name=' . $article['review_by'] . '">' . $article['review_by'] . "</a>";
												echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>";
											echo '<p>';
												if(!empty($blog['image_name']))
												{
													echo '<img class="featuredImg img-thumbnail" src="img/article/' . $blog['image_name'] . '" width=80%><br /><br /><br />';
												}
											echo  (nl2br($blog['content'])) . '</p>';
											
										echo '</div>';
									echo '</div>';
									
									/*echo "<div class = \"panel panel-default\">";
										echo "<div class=\"panel-body\" ><h2>";
												echo '<a href="blog.php" class="btn btn-xs btn-danger pull-right">Go Back</a>';

											echo "<div style=\"color:darkblue\">" . $blog['title'] . '</div>';
											echo "</h2>";
											echo "<div class=\"blog-post-meta\" style=\"color:grey;\">" . $blog['time'] . ' By- ' . $blog['article_by'] . "</a>";
										//	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reviewed by:-<a href="view_profile.php?name=' . $article['review_by'] . '">' . $article['review_by'] . "</a>";
												echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre-" . $blog['genre'] . "</div>";
												echo "&nbsp;&nbsp;";
										//echo "<small>" . $article['date'] . "</small>";
												echo "<br><br>";
												if(!empty($blog['image_name']))
												{
													echo '<img class="featuredImg img-thumbnail" src="img/article/' . $blog['image_name'] . '" width=80%><br /><br /><br />';
												}
										//echo $content;
											echo '<div style="font-family:comic sans ms; font-size:17px;margin-left:30px;margin-right:30px;">';
											echo nl2br($blog['content']);
											//echo '....<a href="read_blog.php?id=' . $article['id'] . '">Read More</a>';
											echo '</div><br /><br />';
											echo '<br /><a href="like.php?article_id=' . $blog['id'] . '"' . 'class="btn btn-danger btn-xs  pull-right"' .  'style="margin-left:20px;display:inline-block">' . 'Like&nbsp;&nbsp;<span class="badge">' . $blog['likes'] . "</span></a>";
											echo '<a href="potha.php?article_id=' . $blog['id'] . '"' . 'class="btn btn-danger  btn-xs pull-right"' .  'style="margin-left:20px;display:inline-block">' . 'Potha&nbsp;&nbsp;<span class="badge">' . $blog['pothas'] . "</span></a>";
											echo '<br /><p class="bg-info">';
											if(isset($_GET['liked']))
											{
											///	echo "You Have already liked";
											}
											echo "</p><br />";
											
											echo "<br /><hr>";
											
											echo "<br><br></div></div>";
										*/
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