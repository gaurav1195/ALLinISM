<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>
<?php include("includes/session.php"); ?>
<?php
	//confirm_logged_in();
	//$username = $_SESSION['name'];
	//$user_id = $_SESSION['user_id'];
	
	
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
		$sName = trim(mysql_prep($_POST['sName']));
		$loc = trim(mysql_prep($_POST['location']));
		//$brand = trim(mysql_prep($_POST['brand']));
		$description = trim(mysql_prep($_POST['description']));
		$found = mysql_prep($_POST['foundation']);
		$website = mysql_prep($_POST['website']);
		
		
			
						$query = "INSERT INTO start (
						sName, location, description, foundation, website)
					 VALUES('{$sName}', '{$loc}', '{$description}', '{$found}', '{$website}'
					 )";
						$result = mysql_query($query, $connection);
						confirm_query($result);
						echo mysql_error();
			
	
		redirect_to("start_founders.php");
	}
	
?>
	
 <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed text-white" style="background-color:">
        <li class="logo" style="background-color:;"><a id="logo-container"  href="http://allinism.in/" class="brand-logo" >
            <img id="front-page-logo" style="width:100px;height:100px;" class="responsive-img" src="img/allin.png"></a></li>
		
       
         
        
      
      
	  
      </ul>  
	  
    </header>
	
	  <main><div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
		<h6 class="header center-on-small-only right-align"><a style="text-decoration:none;color:white" href="http://allinism.in/">Home</a></h6>
        <h1 class="header center-on-small-only">Add a StartUp</h1>
		<?php
			if(!isset($_GET['cat'])){
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
	
		<form class="form-horizontal" action="add_start.php" method="post" enctype="multipart/form-data">
						<div class="modal-header">
							<h4 class="red-text text-lighten-2">Submit details.</h4>
							<br /><br />
						</div>
						
						<p class = "bg-success">
							
								<?php if(isset($error))
									{
										echo $error;
									}
									else
									{
										
									}
								?>
						</p>
						
						<div class="modal-body">
						
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >StartUp Name:</label>
								<div class="col-lg-10">
								
									<input type="text" name="sName" required class="form-control" placeholder="">
									
								</div>
							</div>
							
							
							
							
							<div class="form-group">
							
							
								<label for="Description" class=""  >Description</label>
								<div class="col-lg-10">
									
								
									<textarea class="materialize-textarea" name="description" rows="2" placeholder=""></textarea>
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							
							
							<br />
							
							
							
							
							 
							
							
							<div class="form-group">
							
							
								<label for="Price" class="col-lg-2 control-label" >Website: </label>
								<div class="col-lg-10">
								
									<input type="text" name="website" class="form-control" rows="" required>
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							
							<div class="form-group">
							
							
								<label for="Mobile" class="col-lg-2 control-label" >Foundation: </label>
								<div class="col-lg-10">
								
									<input type="text"  placeholder="" name="foundation" class="form-control" rows="8" required>
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >Location: </label>
								<div class="col-lg-10">
								
									<input type="text" name="location" required class="form-control" placeholder="">
									
								</div>
							</div>

						
						
						</div>
						
						<div class="modal-footer">
							I hereby declare that the information provided above is true.
							<button  type="Submit" value="Submit" class="btn btn-default" name="submit">Submit</button>
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