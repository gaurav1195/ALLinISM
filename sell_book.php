<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>
<?php include("includes/session.php"); ?>
<?php
	//confirm_logged_in();
	//$username = $_SESSION['name'];
	//$user_id = $_SESSION['user_id'];
	if(isset($_GET['cat'])){
		$category = trim(mysql_prep($_GET['cat']));
	
	}
	else{
		redirect_to("bazzar.php");
	}
	if($category == 'anony')
	{
		$identity = 0;
	}
	elseif($category =='direct')
	{
		$identity = 1;
	}
	else{
		redirect_to("bazzar.php");
	}
	
?>
<?php
	confirm_logged_in();
	$username = $_SESSION['name'];
	$user_id = $_SESSION['user_id'];
	$email = $_SESSION['email'];
?>
<?php
if(isset($_POST['submit']))
	{
	
		
		//$password = trim(mysql_prep($_POST['password']));
		//$hashed_password = sha1($password);
		$book_name = trim(mysql_prep($_POST['book_name']));
		$writer = trim(mysql_prep($_POST['writer']));
		//$brand = trim(mysql_prep($_POST['brand']));
		$description = trim(mysql_prep($_POST['description']));
		$mobile = trim(mysql_prep($_POST['mobile']));
		$price = trim(mysql_prep($_POST['price']));
		$genre = trim(mysql_prep($_POST['genre']));
		$bill = $_POST['bill'];
		
		
		
		if(!empty($_FILES['photo']['name']))
			{
				$size=filesize($_FILES['photo']['tmp_name']);
				define ("MAX_SIZE","5000");

				if(getimagesize($_FILES['photo']['tmp_name']))
				{
					if ($size < MAX_SIZE*1024)
					{
						$target= '../allinism/img/book/' ;
						$target = $target . basename( $_FILES['photo']['name']);
						$target = trim(mysql_prep($target));
						$pic=($_FILES['photo']['name']);
						
						if(!empty($_POST['bill']))
						{
						$query = "INSERT INTO book (
						book_name, writer, description, mobile, price, seller, bill, genre, seller_email, identity, image)
					 VALUES('{$book_name}', '{$writer}', '{$description}', '{$mobile}', '{$price}', '{$username}', '{$bill}', '{$genre}', '{$email}', '1', '{$pic}'
					 )";
						$result = mysql_query($query, $connection);
						if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
							echo "The file has been uploaded, and your information has been added to the directory";
													redirect_to("book_bazzar.php?add=1");

						} else {
							
							$error = 'Sorry, there was a problem uploading your file.';
							echo mysql_error();
						}
						echo mysql_error();
						}
						else
						{
							$error .= 'You might have missed few entries.';
						}
						//redirect_to("bakar.php");
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
						$query = "INSERT INTO book (
						book_name, writer, description, mobile, price, seller, bill, genre, seller_email, identity, image)
					 VALUES('{$book_name}', '{$writer}', '{$description}', '{$mobile}', '{$price}', '{$username}', '{$bill}', '{$genre}', '{$email}', '{$identity}', '{$pic}'
					 )";
						$result = mysql_query($query, $connection);
						confirm_query($result);
						echo mysql_error();
												redirect_to("book_bazzar.php?add=1");

			}
	
	
		
		
		
		
	
	
	}
	
	
?>
	
 <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed text-white" style="background-color:">
        <li class="logo" style="background-color:;"><a id="logo-container"  href="http://allinism.in/" class="brand-logo" >
            <img id="front-page-logo" style="width:100px;height:100px;" class="responsive-img" src="img/allin.png"></a></li>
		
       
         <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold text-lighten-2"><a class="collapsible-header  waves-effect waves-teal">Other Stuff</a>
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
			<li class="bold"><a class="collapsible-header  waves-effect waves-teal  <?php if($category == 'anony'){ echo 'green-text text-lighten-2'; } ?>">Sell Anonymously</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="sell_book.php?cat=anony">Books</a></li>
                  <li><a href="sell_other.php?cat=anony">Other Stuff</a></li>
                </ul>
              </div>
            </li>
			
			<li class="bold"><a class="collapsible-header  waves-effect waves-teal  <?php if($category == 'direct'){ echo 'green-text text-lighten-2'; } ?>">Sell Directly</a>
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
	
		<form class="form-horizontal" action="sell_book.php" method="post" enctype="multipart/form-data">
						<div class="modal-header">
							<h4 class="red-text text-lighten-2">Submit your Book details.</h4><br /><br />
						</div>
						
						 <p class = "bg-success">
							
								<?php if(isset($massage))
									{
										echo $massage;
									}
								
								?>
						</p>
						
						 <p class = "bg-danger">
							
								<?php if(isset($error))
									{
										echo $error;
									}
								
								?>
						</p>
						<div class="modal-body">
						
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >Book Name:</label>
								<div class="col-lg-10">
								
									<input type="text" name="book_name" class="form-control" placeholder="What is the book Name" required>
									
								</div>
							</div>
							
							
							<div class="form-group">      <!-- One form grpup for one block or query-->
							
								<label for="Brand" class="col-lg-2 control-label" >Writer</label>
								<div class="col-lg-10">
								
									<input type="text" name="writer" class="form-control" placeholder="Writers Of the book" required>
									
								</div>
							</div> 
							
							<div class="form-group">      <!-- One form grpup for one block or query-->
							
								<label for="Brand" class="col-lg-2 control-label" >Genre</label>
								<div class="col-lg-10">
								
									<select name="genre" class="form-control">
										<option value="Electronics">Electronics</option>
										<option value="Programming">Programming</option>
										<option value="Mining">Mining</option>
										<option value="CAT/GRE/GATEo">CAT/GRE/GATE</option>
										<option value="Novel">Novels</option>
										<option value="Other">Other</option>
										
									</select>
									
								</div>
							</div> 
							
							<div class="form-group">
							
							
								<label for="Description" class="col-lg-2 control-label" >Description</label>
								<div class="col-lg-10">
									
								
									<textarea class="materialize-textarea" name="description" rows="8" required placeholder="Describe here the branches or year it is suitable for"></textarea>
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							
							<div class="input-field col s12">
								<div class="file-field input-field">
								  <input class="file-path " type="text"/>
								  <div class="btn">
									<span>Book Pic</span>
									<input type="file"  name="photo" placeholder="There should be no space in the File name"/>
								  </div>
								</div>
							</div>
							
							<div class="form-group">
							
							
								<label for="Bill" class="" >Bill</label>
								<div class="col-lg-10">
									<input name="bill" type="radio" id="test1" value="yes" />
									<label for="test1">Yes</label>
									<input name="bill" type="radio" id="test2" value="no" />
									<label for="test2">No</label>
									
									<!-- <textarea class="form-control" name="about" rows="8"></textarea> -->
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							<br />
							
							
							
							<div class="form-group">
							
							
								<label for="Price" class="col-lg-2 control-label" >Price:</label>
								<div class="col-lg-10">
								
									<input type="text" name="price" class="form-control" rows="8" placeholder="Price you are expecting" required>
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							
							<div class="form-group">
							
							
								<label for="Mobile" class="col-lg-2 control-label" >MobileNo:</label>
								<div class="col-lg-10">
								
									<input type="text" maxlength="10" minlength="10" name="mobile" class="form-control" rows="8" placeholder="Buyer will contact you on this no." minlength="10" maxlength="12">
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>


						
						
						</div>
						
						<div class="modal-footer">
							
							<button class="btn btn-default"  type="Submit" value="Submit" name="submit">Submit</button>
						</div>
					
		</form>
    
	 
	 
	 
	 <?php
		
	 
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