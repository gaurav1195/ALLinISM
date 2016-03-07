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
		$n1 = trim(mysql_prep($_POST['n1']));
		$n2 = trim(mysql_prep($_POST['n2']));
		$n3 = trim(mysql_prep($_POST['n3']));
		$e3 = trim(mysql_prep($_POST['e3']));
		$e2 = trim(mysql_prep($_POST['e2']));
		$e1 = trim(mysql_prep($_POST['e1']));
		$m1 = trim(mysql_prep($_POST['m1']));
		$m2 = trim(mysql_prep($_POST['m2']));
		$m3 = trim(mysql_prep($_POST['m3']));
		$y1 = trim(mysql_prep($_POST['y1']));
		$y2 = trim(mysql_prep($_POST['y2']));
		$y3 = trim(mysql_prep($_POST['y3']));
		$s_id = trim(mysql_prep($_POST['s_id']));
		
		
		
			
						$query = "INSERT INTO start_name (
						start_id, n1, n2, n3, e1, e2, e3, y1, y2, y3, m1, m2, m3, p1, p2, p3)
					 VALUES('{s_id}', '{$n1}', '{$n2}', '{$n3}', '{$e1}', '{$e2}', '{$e3}', '{$y1}', '{$y2}', '{$y3}', '{$m1}', '{$m2}', '{$m3}', '{$p1}', '{$p2}', '{$p3}'
					 
					 )";
						$result = mysql_query($query, $connection);
						confirm_query($result);
						echo mysql_error();
			
	
		redirect_to("add_start.php");
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
	
		<form class="form-horizontal" action="start_founders.php" method="post" enctype="multipart/form-data">
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
							
								<label for="Product" class="col-lg-2 control-label" >STartId:</label>
								<div class="col-lg-10">
								
									<input type="text" name="s_id" required class="form-control" placeholder="">
									
								</div>
							</div>
							
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >Name:</label>
								<div class="col-lg-10">
								
									<input type="text" name="n1" required class="form-control" placeholder="">
									
								</div>
							</div>
							
							
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >Position:</label>
								<div class="col-lg-10">
								
									<input type="text" name="p1" required  class="form-control" placeholder="">
									
								</div>
							</div>
							
							
							
							
							<br />
							
							
							
							
							 
							
							
							<div class="form-group">
							
							
								<label for="Price" class="col-lg-2 control-label" >Email: </label>
								<div class="col-lg-10">
								
									<input type="text" name="e1" class="form-control" rows="" >
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							
							<div class="form-group">
							
							
								<label for="Mobile" class="col-lg-2 control-label" >mobile: </label>
								<div class="col-lg-10">
								
									<input type="text"  placeholder="" name="m1" class="form-control" rows="8" >
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >passout: </label>
								<div class="col-lg-10">
								
									<input type="text" name="y1" required class="form-control" placeholder="">
									
								</div>
							</div>
							
							
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >Name:</label>
								<div class="col-lg-10">
								
									<input type="text" name="n2"  class="form-control" placeholder="">
									
								</div>
							</div>
							
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >Position:</label>
								<div class="col-lg-10">
								
									<input type="text" name="p2"  class="form-control" placeholder="">
									
								</div>
							</div>
							
							
							
							
							
							
							
							<br />
							
							
							
							
							 
							
							
							<div class="form-group">
							
							
								<label for="Price" class="col-lg-2 control-label" >Email: </label>
								<div class="col-lg-10">
								
									<input type="text" name="e2" class="form-control" rows="" >
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							
							<div class="form-group">
							
							
								<label for="Mobile" class="col-lg-2 control-label" >mobile: </label>
								<div class="col-lg-10">
								
									<input type="text"  placeholder="" name="m2" class="form-control" rows="8" >
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >passout: </label>
								<div class="col-lg-10">
								
									<input type="text" name="y2" class="form-control" placeholder="">
									
								</div>
							</div>

							
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >Name:</label>
								<div class="col-lg-10">
								
									<input type="text" name="n3" class="form-control" placeholder="">
									
								</div>
							</div>
							
							
							
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >Position:</label>
								<div class="col-lg-10">
								
									<input type="text" name="p3"  class="form-control" placeholder="">
									
								</div>
							</div>
							
							
							
							<br />
							
							
							
							
							 
							
							
							<div class="form-group">
							
							
								<label for="Price" class="col-lg-2 control-label" >Email: </label>
								<div class="col-lg-10">
								
									<input type="text" name="e3" class="form-control" rows="" >
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							
							<div class="form-group">
							
							
								<label for="Mobile" class="col-lg-2 control-label" >mobile: </label>
								<div class="col-lg-10">
								
									<input type="text"  placeholder="" name="m3" class="form-control" rows="8" >
								<!--<input type="name" name="Massage" class="form-control" placeholder="Massage"> -->
								</div>
							</div>
							
							<div class="form-group"><!-- One form grpup for one block or query-->
							
								<label for="Product" class="col-lg-2 control-label" >passout: </label>
								<div class="col-lg-10">
								
									<input type="text" name="y3" class="form-control" placeholder="">
									
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