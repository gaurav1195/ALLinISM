<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>
<?php
	if(isset($_GET['genre']))
	{
		$sel_genre = $_GET['genre'];
	}
	else
	{
		$sel_genre = 'x';
	}
?>
 <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed text-white" style="background-color:;">
        <li class="logo" style="background-color:;"><a id="logo-container"  href="http://allinism.in/" class="brand-logo" >
            <img id="front-page-logo" style="width:100px;height:100px;" class="responsive-img" src="img/allin.png"></a></li>
		
        <li class="bold <?php if($sel_genre =='health'){ echo " green-text" ;} ?>" style=";"><a href="clock.php?genre=health" class="list-group-item <?php if($sel_genre =='health'){ echo "active" ;} ?>">Health Center</a></li>
        <li class="bold <?php if($sel_genre =='ism'){ echo "green-text" ;} ?>"><a href="clock.php?genre=ism" class="list-group-item <?php if($sel_genre =='ism'){ echo "active" ;} ?>">ISM Bodies</a></li>
        <li class="bold <?php if($sel_genre =='sac'){ echo "green-text" ;} ?>"><a href="clock.php?genre=sac" class="list-group-item <?php if($sel_genre =='other'){ echo "active" ;} ?>">SAC</a></li>
        
		<br /><br /><br />
		<br /><br /><br />
        
      
      
	  
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
        echo '<h4 class ="light red-text text-lighten-4 center-on-small-only">Baffled by the ever changing and perplexing timings of the Sac, Library, Departments, Health center, Dsw Office, Admin Block (Yawns).
Do not worry we have it all sorted out.</h4>';}
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
		
		
		if(!isset($_GET['genre'])){
			echo '<div class="row">';
			  echo '<div class="col s12 m9 l12">';
				echo '<div class="card-panel teal">';
				  echo '<span class="white-text">Please select a category Form the left and GO ALL IN';
				  echo '</span>';
				echo '</div>';
			  echo '</div>';
			echo '</div>';
			}
		
		if($sel_genre == 'ism')
								{
									echo '<ul class="collapsible" data-collapsible="accordion">';
									   echo '<li>';
											echo '<div class="collapsible-header"><i class="mdi-action-schedule"></i>';
													  echo 'DSW';

											echo '</div>';
											echo '<div class="collapsible-body">';
													echo 'Monday to Friday   10:00AM - 12:00AM & 2:00PM - 5:00PM<br />';
												
											echo '</div>';
										echo '</li>';
									echo '</ul>';
								}
		
		
		if($sel_genre == 'sac')
								{		
								
									echo '<ul class="collapsible" data-collapsible="accordion">';
									   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-action-schedule"></i>';
											  echo 'Gym';

										echo '</div>';
										echo '<div class="collapsible-body">';
											
											echo '<table class="table table-striped">';
												echo '<tr>';
													echo '<td>Day</td>';
													echo '<td>Girls</td>';
													echo '<td>Boys</td>';
												echo '</tr>';
											
											
												echo '<tr>';
													echo '<td>Tues-to-Friday</td>';
													echo '<td>6:00AM - 7:00 AM  <br /> 5:00PM - 6:00PM</td>';
													echo '<td>7:00AM - 8:00 AM  <br /> 6:00PM - 8:30PM</td>';
												
												echo '</tr>';
												echo '<tr>';
													echo '<td>Sat-Sunday</td>';
													echo '<td>8:00AM - 9:30 AM</td>';
													echo '<td>6:00AM - 8:00 AM<br /> 3:00PM - 6:00PM</td>';	
												echo '</tr>';
											
												echo '<tr>';
													echo '<td>Monday</td>';
													echo '<td>Closed</td>';
													echo '<td>Closed</td>';	
												echo '</tr>';
											echo '</table>';
										
									  echo '</div>';
									echo '</li>';
									  
									echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Madhulika';

										echo '</div>';	
										echo '<div class="collapsible-body">';
											echo '<br />Everyday 9:00 AM - 10:30 PM<br />';
										
										echo '</div>';
									echo '</li>';

							echo '</ul>';

								}
		if($sel_genre == 'health')
								{
									echo '<ul class="collapsible" data-collapsible="accordion">';
									   echo '<li>';
										
											
										echo '<div class="collapsible-header"><i class="mdi-action-schedule"></i>';
											  
											echo 'Health Center';
										echo '</div>';
										
										echo '<div class="collapsible-body">';
									  
										
											
											
											  echo '<table class=" hoverable" style="font-size:10px;">';
												echo '<thead>';
												echo '<tr>';
													echo '<td><b>Name</b></td>';
													echo '<td><b>Specialization</b></td>';
													echo '<td><b>Timing</b></td>';
													echo '<td><b>Day</b></td>';
												echo '</tr>';
												echo '</thead>';


												echo '<tbody>';
												echo '<tr>';
													echo '<td>Dr Praveen Kumar</td>';
													echo '<td>General physician</td>';
													echo '<td>10:00 AM to 1:30 AM <br />6:00 PM to 8:00 PM</td>';
													echo '<td>Mon-to-Fri</td>';
												echo '</tr>';
												
												echo '<tr>';
													echo '<td>Tanushree Banerjee</td>';
													echo '<td>General physician</td>';
													echo '<td>10:00 AM to 1:30 AM <br />6:00 PM to 8:00 PM</td>';
													echo '<td>Mon-to-Fri</td>';
												echo '</tr>';
												
												echo '<tr>';
													echo '<td>Dr J Kumar</td>';
													echo '<td>General physician</td>';
													echo '<td>10:00 AM to 1:30 AM <br />6:00 PM to 8:00 PM</td>';
													echo '<td>Mon-to-Fri</td>';
												echo '</tr>';
												
												echo '<tr>';
													echo '<td>Dr Rajnikant Sinha</td>';
													echo '<td>Eye Specialist</td>';
													echo '<td>7:00 PM to 8:00 PM</td>';
													echo '<td>Mon & Tue</td>';
												echo '</tr>';
												
												echo '<tr>';
													echo '<td>Dr Faruk Ajam</td>';
													echo '<td>Dentist</td>';
													echo '<td>6:00 PM to 7:00 PM</td>';
													echo '<td>Mon & Thur</td>';
												echo '</tr>';
												
												echo '<tr>';
													echo '<td>Dr S.N. Mehta</td>';
													echo '<td>ENT Specialist</td>';
													echo '<td>7:00 PM to 8:00 PM</td>';
													echo '<td>Wed</td>';
												echo '</tr>';
												
												echo '<tr>';
													echo '<td>Dr D.P. Bhushan</td>';
													echo '<td>Orthopaedic</td>';
													echo '<td>7:00 PM to 8:00 PM</td>';
													echo '<td>Wed</td>';
												echo '</tr>';
												
												echo '<tr>';
													echo '<td>Dr D.P. Badhani</td>';
													echo '<td>Surgeon</td>';
													echo '<td>7:00 PM to 8:00 PM</td>';
													echo '<td>Ist three wed of a month</td>';
												echo '</tr>';
												
												echo '<tr>';
													echo '<td>Dr Savita Shukla Das</td>';
													echo '<td>Gynaecologist</td>';
													echo '<td>7:00 PM to 8:00 PM</td>';
													echo '<td>Friday</td>';
												echo '</tr>';
												
												echo '<tr>';
													echo '<td>Dr Sanjay Kumar</td>';
													echo '<td>Psychiatrist</td>';
													echo '<td>6:00 PM to 7:00 PM</td>';
													echo '<td>Thursday</td>';
												echo '</tr>';
												
												echo '<tr>';
													echo '<td>Dr P. Chatterjee / Dr S.N. Mitra</td>';
													echo '<td>Homeopathic</td>';
													echo '<td>10:00 AM to 1:30 AM<br />6:00 PM to 8:00 PM</td>';
													echo '<td>Mon to Fri <br /> Mon, Tue, Thur</td>';
												echo '</tr>';
												echo '</tbody>';
												
										
									  echo '</table>';
									  
									  
								
									 
									  echo '<br /><hr>';
									  echo '<b style="color:brown">Note:- 24*7 Emergency Service is available at health center</b>';
									 echo '</div>';
									echo '</li>';
								echo '</ul>';
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