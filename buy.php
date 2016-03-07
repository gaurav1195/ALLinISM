<?php include("includes/session.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>
<?php
	//confirm_logged_in();
	//$username = $_SESSION['name'];
	//$user_id = $_SESSION['user_id'];
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

	confirm_logged_in();

	$username = $_SESSION['name'];

	$user_id = $_SESSION['user_id'];

	$email = $_SESSION['email'];

	if(isset($_GET['id'])){

	$id = trim(mysql_prep($_GET['id']));

	$products = get_product_by_id($id);

	while($product = mysql_fetch_array($products))

	{

		$pro = $product['product_name'];

	}

	}

	elseif(isset($_GET['book_id']))

	{

		$id = trim(mysql_prep($_GET['book_id']));

		$products = get_book_by_id($id);

		while($product = mysql_fetch_array($products))

	{

		$pro = $product['book_name'];

	}

	

	}
	else
	{
		redirect_to("bazzar.php");
	}
	

?>



<?php

	if(isset($_POST['post']))

	{

		if(isset($_POST['name'])){

		$name = trim(mysql_prep($_POST['name']));}

		

		if(isset($_POST['mobile'])){

		$mobile = mysql_prep($_POST['mobile']);}

	

		if(isset($_POST['room'])){

		$room = mysql_prep($_POST['room']);}

		

		if(isset($_POST['hostel'])){

		$hostel = mysql_prep($_POST['hostel']);}

		

		

		

		

		

	date_default_timezone_set('Asia/Kolkata');

	$time = date("Y-m-d h:i a");

	

	

	

	

	//$visible = mysql_prep($_POST['visible']);



		if(isset($_POST['name'])  && isset($_POST['mobile'])  && isset($_POST['room']) && !empty($_POST['hostel']) && !empty($_POST['name']) && !empty($_POST['mobile']))

		{

			

			



			// strinngs need quotes ' ' around them

			$query = "INSERT INTO  buyers (id, buyer, mobile, room, hostel, time, product, email)

						  VALUES ('', '{$name}', '{$mobile}', '{$room}', '{$hostel}', '{$time}', '{$pro}', '{$email}')";

						 

			

			$result = mysql_query($query, $connection);

			confirm_query($result);

			//move_uploaded_file($_FILES['photo']['tmp_name'], $target);

			redirect_to("bazzar.php?buy=1");

			//echo "<p>Subject creation failed</p><br />";

				

			

		}

		else

		{

			$error = "We couldn't process your request. You might Have missed few entries.";

		}

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
            <li class="bold green-text text-lighten-2"><a class="collapsible-header  waves-effect waves-teal green-text text-lighten-2">Other Stuff</a>
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
		
													
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Books</a>
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
			<li class="bold"><a class="collapsible-header  waves-effect waves-teal">Sell Anonymously</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="sell_book.php?cat=anony">Books</a></li>
                  <li><a href="sell_other.php?cat=anony">Other Stuff</a></li>
                </ul>
              </div>
            </li>
			
			<li class="bold"><a class="collapsible-header  waves-effect waves-teal">Sell Directly</a>
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
	
			<h4 class="red-text text-lighten-2">Buy <?php echo $pro; ?></h4><hr /><br />
			<?php
				echo $error;
				
			?>
									<div class="row">
										<form class="col s12" method="post" action="buy.php?id=<?php echo $id; ?>">
										  <div class="modal-body">

						

								<div class="form-group"><!-- One form grpup for one block or query-->

							

									<label for="Article-Name" class="col-lg-2 control-label" >Name</label>

									<div class="col-lg-10">

									

										<input type="text" name="name" class="form-control" placeholder="Your real name." required>

										

									</div>

								</div>

								

							<div class="modal-body">

						

								<div class="form-group"><!-- One form grpup for one block or query-->

							

									<label for="Article-Name" class="col-lg-2 control-label" >Mobile No.</label>

									<div class="col-lg-10">

									

										<input type="text" name="mobile" maxlength="10" minlength="10" class="form-control" placeholder="Our team will contact you on this number." required>

										

									</div>

								</div>

							

							

					

								<div class="form-group"><!-- One form grpup for one block or query-->

							

									<label for="genre" class="col-lg-2 control-label" >Hostel</label>

									<div class="col-lg-10">

									

										<select name="hostel" class="form-control" required>

									

											<option value="Jasper">Jasper</option>

											<option value="Amber">Amber</option>

											<option value="Emerald">Emerald</option>

											<option value="Topaz">Topaz</option>

											<option value="Sapphire">Sapphire</option>

											<option value="Diamond">Diamond</option>

											<option value="Ruby">Ruby</option>

										

										

										

									</select>

										

									</div>

								</div>

							

							

							

							<div class="form-group"><!-- One form grpup for one block or query-->

							

									<label for="Article-Name" class="col-lg-2 control-label" >Room No.</label>

									<div class="col-lg-10">

									

										<input type="text" name="room" class="form-control" placeholder="" required>

										

									</div>
							
							<button class="btn right" name="post">Submit</button>
							
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
	

<div id="buy" class="modal ">
    <div class="modal-content">


								
								  </div>
        
								
									
							
	</div><hr>
    <div class="modal-footer">
      <a href="#" class="modal-action modal-close btn waves-effect waves-light btn-small ">Close</a>
    </div>
  </div>
  
   
  
  
<?php include("includes/footer.php"); ?>