<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>

 <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed text-white" style="background-color:">
        <li class="logo" style="background-color:;"><a id="logo-container"  href="http://allinism.in/" class="brand-logo" >
            <img id="front-page-logo" style="width:100px;height:100px;" class="responsive-img" src="img/allin.png"></a></li>
		
        
        
		
		<br /><br /><br />
		<!--<li class="bold"><a href="add_blog.php" class="btn waves-effect waves-light btn-small">Add your Blog</a></li>-->
        <li class="margin-left:20px;line-spacing:0px;">To get the contact details please mail us at allinism2015@gmail.com with the purpose.</div>
      
      
	  
      </ul>  
	  
    </header>
	
	  <main><div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
		<h6 class="header center-on-small-only right-align"><a style="text-decoration:none;color:white" href="http://allinism.in/">Home</a></h6>
        <h1 class="header center-on-small-only">StartUps@ISM</h1>
		<?php
			if(!isset($_GET['genre'])){
        echo '<h4 class ="light red-text text-lighten-4 center-on-small-only">
			
		</h4>';}
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
		$start_list = get_start_list();
		while($start = mysql_fetch_array($start_list))
		{
			$details  = get_start_details($start['id']);
			$detail = mysql_fetch_array($details);
			echo '<h3 class="light teal-text text-lighten-2"><a href="' . $start['website'] . '" class="text-decoration:none light teal-text text-lighten-3">' . $start['sName'] . '</a></h3>';
			echo '<p class="light teal-text text-lighten-2">' . $start['description'] . '</p>';
			echo '<p class="light red-text text-lighten-2">Foundation: ' . '<div class="light green-text text-lighten-2">' . $start['foundation'] . '</p>';
			echo '<p class="light red-text text-lighten-2">Location: ' . '<div class="light green-text text-lighten-2">' . $start['location'] . '</p>';
			//echo '<p class="light red-text text-lighten-2">Name Position Year' . '<div class="light green-text text-lighten-2">' . $detail['n1'] . $detail['p1'] . $detail['y1'] .  '</p>';
			 echo '<table class="hoverable">';
											echo '<thead><b>';
												echo '<div class="light red-text text-lighten-2"><tr>';
													echo '<td class="light red-text text-lighten-2">Name</td>';
													echo '<td class="light red-text text-lighten-2">Position</td>';
													echo '<td class="light red-text text-lighten-2">Batch</td>';
													//echo '<td>Contact</td>';
												echo '</tr></div>';
											echo '</thead></b>';
												echo '<div class="light green-text text-lighten-2"><tr>';
													echo '<td class="light green-text text-lighten-2">' . $detail['n1'] . '</td>';
													echo '<td class="light green-text text-lighten-2">' . $detail['p1'] . '</td>';
													echo '<td class="light green-text text-lighten-2">' . $detail['y1'] . '</td>';
													
												echo '</tr></div>';
												if(!empty($detail['n2']))
												{
														echo '<div class="light green-text text-lighten-2"><tr>';
													echo '<td class="light green-text text-lighten-2">' . $detail['n2'] . '</td>';
													echo '<td class="light green-text text-lighten-2">' . $detail['p2'] . '</td>';
													echo '<td class="light green-text text-lighten-2">' . $detail['y2'] . '</td>';
													
												echo '</tr></div>';
												}
												if(!empty($detail['n3']))
												{
														echo '<div class="light green-text text-lighten-2"><tr>';
													echo '<td class="light green-text text-lighten-2">' . $detail['n3'] . '</td>';
													echo '<td class="light green-text text-lighten-2">' . $detail['p3'] . '</td>';
													echo '<td class="light green-text text-lighten-2">' . $detail['y3'] . '</td>';
													
												echo '</tr></div>';
												}
				echo '</table>';
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