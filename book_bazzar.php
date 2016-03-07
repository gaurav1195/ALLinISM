<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>
<?php include("includes/session.php"); ?>
<?php
	confirm_logged_in();
	$username = $_SESSION['name'];
	$user_id = $_SESSION['user_id'];
	if(isset($_GET['cat'])){
		$category = trim(mysql_prep($_GET['cat']));
		$price = 'no';
	}
	else{
		$category = 'all';
		$price='no';
	}
	
?>
<?php
	

?>
 <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed text-white" style="background-color:">
        <li class="logo" style="background-color:;"><a id="logo-container"  href="http://allinism.in/" class="brand-logo" >
            <img id="front-page-logo" style="width:100px;height:100px;" class="responsive-img" src="img/allin.png"></a></li>
		
       
         <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold green-text text-lighten-2"><a class="collapsible-header  waves-effect waves-teal">Other Stuff</a>
              <div class="collapsible-body" >
                <ul>
                  <li><a href="bazzar.php?cat=Electronics" class="<?php if($category == 'Electronics'){ echo active; } ?>">Electronics</a></li>
                  <li><a href="bazzar.php?cat=Sports" class="<?php if($category == 'Sports'){ echo active; } ?>">Sports</a></li>
                  <li><a href="bazzar.php?cat=Stationary" class="<?php if($category == 'Stationary'){ echo active; } ?>">Stationary</a></li>
                  <li><a href="bazzar.php?cat=Cycles" class="<?php if($category == 'Cycles'){ echo active; } ?>">Cycles</a></li>
                  <li><a href="bazzar.php?cat=General" class="<?php if($category == 'General'){ echo active; } ?>">General</a></li>
                  <li><a href="bazzar.php?cat=Other" class="<?php if($category == 'Other'){ echo active; } ?>">Other</a></li>
                  
                </ul>
              </div>
            </li>
		
													
            <li class="bold active"><a class="collapsible-header green-text text-lighten-2 waves-effect waves-teal">Books</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="book_bazzar.php?cat=Electronics">Electronics</a></li>
                  <li><a href="book_bazzar.php?cat=Books">Programming</a></li>
                  <li><a href="book_bazzar.php?cat=Sports">Mining</a></li>
                  <li><a href="book_bazzar.php?cat=Stationary">CAT/GRE/GATE</a></li>
                  <li><a href="book_bazzar.php?cat=Cycles">Novels</a></li>
                  <li><a href="book_bazzar.php?cat=Other">Other</a></li>
                </ul>
              </div>
            </li>
		<br />
		<li class="bold <?php if($category == 'anony'){ echo 'green-text'; } ?>"><a class="collapsible-header  waves-effect waves-teal">Sell Anonymously</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="sell_book.php?cat=anony">Books</a></li>
                  <li><a href="sell_other.php?cat=anony">Other Stuff</a></li>
                </ul>
              </div>
            </li>
			
			<li class="bold <?php if($category == 'direct'){ echo 'green-text'; } ?>"><a class="collapsible-header  waves-effect waves-teal">Sell Directly</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="sell_book.php?cat=direct">Books</a></li>
                  <li><a href="sell_other.php?cat=direct">Other Stuff</a></li>
                </ul>
              </div>
            </li>
        
      
      
	  
      </ul>  
	  
    </header>
	
	  <main><div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
		<h6 class="header center-on-small-only right-align"><a style="text-decoration:none;color:white" href="http://allinism.in/">Home</a></h6>
        <h1 class="header center-on-small-only">ISM BUZZar</h1>
		<?php
			if(!isset($_GET['cat'])){
        echo '<h4 class ="light red-text text-lighten-4 center-on-small-only">The Market place of ISM .<br />
Anything and  everything has a value here .<br />
BUY SELL SHARE  .</h4>';}
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
	
		$book_set = get_all_books($category, $price);
							if(mysql_num_rows($book_set) == 0)
							{
								echo 'Sorry there are no books in this session currently';
							}
							while($product = mysql_fetch_array($book_set))
								{
									echo '<div class="col l6">';
										echo '<div class="card" style="height:300px;">';
											echo '<div class="card-image waves-effect waves-block waves-light">';
											  if(!empty($product['image']))
											  echo '<img class="activator" height="70%" src="img/book/' . $product['image'] . '">';
											echo '</div>';
											echo '<div class="card-content">';
											  echo '<span class="card-title activator grey-text text-darken-4">' . $product['book_name'] . '<i class="mdi-action-question-answer right"></i></i></span>';
											echo '</div>';
											echo '<div class="card-reveal">';
											  echo '<span class="card-title grey-text text-darken-4">' . $product['book_name'] . '<i class="mdi-action-question-answer right"></i></span>';
											  echo '<br /><br /><div style="color:brown;font-size:15px;">Writer: </div>' . $product['writer'] . '';
												echo '<br /><br /><div style="color:brown;font-size:15px;">Price: </div>' . $product['price'] . '';
												echo '<br /><br /><div style="color:brown;font-size:15px;">Description: </div>' . $product['description'] . '';
												echo '<br /><br /><div style="color:brown;font-size:15px;">Bill Available: </div>' . $product['bill'] . '';
												if($product['identity'] == 1)
												{
													echo '<br /><br /><div style="color:brown;font-size:15px;">Seller: </div>' . $product['seller'] . '';
													echo '<br /><br /><div style="color:brown;font-size:15px;">Seller Mobile: </div>' . $product['mobile'] . '';

												}
												echo '<br />';
												if($product['identity'] == '0')
												echo '<a href="buy.php?book_id=' . $product['id'] . '" class="btn btn-xs btn-danger right">Buy</a>';
												else
												echo '<br ><br /><div style="color:brown;font-size:16px;"><b>To buy this product contact the Seller through above information</b></div>';
											echo '</div>';
										 echo '</div>';
									 echo '</div>';
									 
									 
									/*echo '<div class="col-lg-6">';
									echo '<div class="panel panel-default">';
									echo '<div class="panel-body">';
									//echo 'Name of the Product:<div style="color:grey">' . $product['product_name'] ."</div><br />";
									echo '<a class="" style="text-decoration:none;color:grey" href="view_product.php?id=' . $product['id'] . '">';
									echo '<div style="color:grey;font-size:15px;">' . $product['product_name'] . "</div><br /></a>";
									//echo "<b>Brand Name:</b> " . $product['brand'] ."<br />";//
									echo '';
									//echo "<b>Description:</b> " . $product['description'] ."<br />";
									//echo "<b>Bill Available:</b> " . $product['bill'] ."<br />";
									//echo "<b>For </b> " . $product['price'] ."<br />";
									//echo "<b>Mobile No. of Seller:</b> " . $product['mobile'] ."<br />";
									if(!empty($product['pic_name'])){
									
									echo '<br /><a class="" href="view_product.php?id=' . $product['id'] . '"><img src="img/bazzar/' . $product['pic_name'] . '" class="img-thumbnail" style="width:300px;height:200px;"><br></a>';}
									if(isset($_SESSION['site_admin_name']))
									{
										echo '<br><a href="delete_sec.php?id=' . $product['id'] . '" class="btn btn-default btn-xs pull-right">Delete</a>';
									}
									//echo ''</a>';
									echo '</div></div></div>';*/
									
								}
		/*if(isset($_GET['genre']))
		{
		$sel_genre = $_GET['genre'];
		echo '<div class="row">';
			echo '<div class="col l3">';
				echo '<h5 class="red-text text-lighten-2">Filter: </h5>'; 
			echo '</div>';
			echo '<div class="col l4">';
				echo '<div class="input-field col s12">';
				echo '<select name="category">';
					echo '<option value="all" <?php if($category == "ll"){ echo "selected"; } ?>All</option>';
					echo '<option value="Electronics" <?php if($category == "Electronics"){ echo "selected"; } ?>Electronics</option>';
					echo '<option value="Books" <?php if($category == "Books"){ echo "selected"; } ?>Books</option>';
					echo '<option value="Sports" <?php if($category == "Sports"){ echo "selected"; } ?>Sports Items</option>';
					echo '<option value="Stationary" <?php if($category == "Stationary"){ echo "selected"; } ?>Stationary</option>';
					echo '<option value="Cycles" <?php if($category == "Cycles"){ echo "selected"; } ?>Cycles</option>';
					echo '<option value="General" <?php if($category == "General"){ echo "selected"; } ?>General</option>';
					echo '<option value="Other" <?php if($category == "Other"){ echo "selected"; } ?>Other</option>';
				echo '</select>';
						
				echo '</div>';
			echo '</div>';
			echo '<div class="col l4">';
				
			echo '</div>';
			
		echo '</div>';
							
		}
		*/
		
     ?>
	 
	 
	 
	 <?php
		if(!isset($_GET['cat'])){
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
					  echo '<span class="card-title">Sell with us!</span>';
					  echo '<p>Fear that a junior might take your stuff away once he learns about it ?									<br />
									Dont worry choose the sell anonymously tab & we wont disclose your identity.	<br />
																		<br /><a href="product_anony.php" class="btn btn-default btn-danger btn-block btn-xs" style="margin-top:0px;">Sell Anonymously</a><br />

								
								Select the sell directly tab to negotiate with the buyer. Your id will be disclosed if you select the latter.<br />
																		<br /><a href="product.php" class="btn btn-default btn-danger btn-block btn-xs" style="margin-bottom:3px;">Sell Directly</a><br />
</p>';
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