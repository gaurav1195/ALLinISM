<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>

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
		<li class="bold"><a href="add_blog.php?genre=batch" class="btn waves-effect waves-light btn-small">Add your Blog</a></li>
        
      
      
	  
      </ul>  
	  
    </header>
	
	  <main><div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
		<h6 class="header center-on-small-only right-align"><a style="text-decoration:none;color:white" href="http://allinism.in/">Home</a></h6>
        <h1 class="header center-on-small-only">Campus Clock</h1>
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
	<div class="section col s12 m9 l10">
	<?php 
		if(isset($_GET['genre']))
		{
		$sel_genre = $_GET['genre'];
		$article_set = get_blogs_sorted($sel_genre);
		echo '<ul class="collapsible" data-collapsible="accordion">';
		while($article = mysql_fetch_array($article_set))
		{
			/*echo '<div class="panel panel-default">';
			echo '<div class="panel-body">';
			echo '<a style="text-decoration:none;" href="view_blog.php?id=' . $article['id'] . '" class=""><div style="color:brown;"><b>' . $article['title'] . '</b></a></div>';
			echo '<div style="color:grey;font-size:10px;">' . $article['article_by'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $article['time'] . '</div><hr>';
			echo '<div style="">' . substr((nl2br($article['content'])), 0, 300) . '..........</div>';
			echo '<br /><a href="view_blog.php?id=' . $article['id'] . '" class="btn btn-xs btn-danger pull-right">Read More</a>';
			echo '</div>';
			echo '</div>';
			*/
				if($sel_genre != 'batch'){
				echo  '<li>';
					echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>' . $article['title'] . '<div class="right" style="color:grey">By: ' . $article['article_by'] . '</div></div>';
					echo '<div class="collapsible-body"><p>' . substr((nl2br($article['content'])), 0, 400) . '...</p>';
					echo '<a class="btn waves-effect waves-light btn-small right-align right">Read</a>';
					echo '</div>';
				echo '</li>';}
				else{
					echo  '<li>';
						echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>' . $article['title'] . '</div>';
						echo '<div class="collapsible-body"><p>' . (nl2br($article['content'])). '...</p>';
						echo '<a class="btn waves-effect waves-light btn-small right-align right">Read</a>';
						echo '</div>';
					echo '</li>';
				}
		}
		echo '<ul>';
		}
     ?>
	 <?php
		if(!isset($_GET['genre'])){
			echo '<div class="row">';
			  echo '<div class="col s12 m9 l12">';
				echo '<div class="card-panel teal">';
				  echo '<span class="white-text">Please select a category Form the left and Blog On';
				  echo '</span>';
				echo '</div>';
			  echo '</div>';
			echo '</div>';
			
			echo '<div class="row">';
				echo '<div class="col s12 m12">';
				  echo '<div class="card blue-grey darken-1">';
					echo '<div class="card-content white-text">';
					  echo '<span class="card-title">Share your Blog or Article</span>';
					  echo '<p>Let your blog reach the masses of ISM. Mail us the link of your blog or Send us your article through the below links. <br /> Happy Blogging ang Go All In</p>';
					echo '</div>';
					echo '<div class="card-action">';
					  echo '<a href="#">Send Article</a>';
					  echo '<a href="#">Mail the link</a>';
					echo '</div>';
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