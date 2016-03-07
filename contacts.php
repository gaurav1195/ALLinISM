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
		
						<li class="bold"><a href="contacts.php?genre=general" class="list-group-item <?php if($sel_genre == 'general'){ echo "active" ;} ?>">General Utility</a></li>
						<li class="bold"><a href="contacts.php?genre=admin" class="list-group-item <?php if($sel_genre == 'admin'){ echo "active" ;} ?>">Administration</a></li>
						<li class="bold"><a href="contacts.php?genre=ism" class="list-group-item <?php if($sel_genre == 'ism'){ echo "active" ;} ?>">ISM Bodies</a></li>
						<li class="bold"><a href="contacts.php?genre=hostel" class="list-group-item <?php if($sel_genre == 'hostel'){ echo "active" ;} ?>">Hostel</a></li>
						<li class="bold"><a href="contacts.php?genre=dept" class="list-group-item <?php if($sel_genre == 'dept'){ echo "active" ;} ?>">Departments</a></li>
        
		<br /><br /><br />
		<br /><br /><br />
        
      
      
	  
      </ul>  
	  
    </header>
	
	  <main><div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
	 		<h6 class="header center-on-small-only right-align"><a style="text-decoration:none;color:white" href="http://allinism.in/">Home</a></h6>

        <h1 class="header center-on-small-only">Important Contacts</h1>
		<?php
			if(!isset($_GET['genre'])){
        echo '<h4 class ="light red-text text-lighten-4 center-on-small-only">From auto-rickshaw walas to the dabbawalas(read: food delivery ) we bring to you contacts that actually matter . We also took the liberty to <strike>copy</strike> borrow from  our academic diary .</h4>';}
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
		
		if($sel_genre == 'general')
								{
									
									 
									  echo '<table class="hoverable">';
											echo '<thead><b>';
												echo '<tr>';
													echo '<td>Name</td>';
													echo '<td>Service Offered</td>';
													echo '<td>Mobile No.</td>';
													//echo '<td>Contact</td>';
												echo '</tr>';
											echo '</thead></b>';
												echo '<tr>';
													echo '<td>Verma Ji</td>';
													echo '<td>Auto Service</td>';
													echo '<td>9939104667</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dhol Wala</td>';
													echo '<td>Dhol</td>';
													echo '<td>09570024036</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Raju Bhaiya</td>';
													echo '<td>Tent & Lights</td>';
													echo '<td>08864084480</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>S.K. Sound</td>';
													echo '<td>DJ </td>';
													echo '<td>09334090611</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												
												
												
											
									echo '</table>';
									
								}
		if($sel_genre == 'admin')
								{
									echo '<ul class="collapsible" data-collapsible="accordion">';
									   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Administration';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<a href="img/contacts/administration.png" title="Download"><img src="img/contacts/administration.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<a href="img/contacts/administration2.png" title="Download"><img src="img/contacts/administration2.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Campus Administration';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Name</td>';
													echo '<td>Mobile</td>';
													echo '<td>Email</td>';
												echo '</tr><hr>';
												
												echo '<tr>';
													echo '<td>Rahul Kumar S E O</td>';
													echo '<td>8987419512</td>';
													echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>K. K. Banerjee Sr. Security Asst.</td>';
													echo '<td>9771188768<br />8986655933</td>';
													echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td> Dhiraj Kumar Horticulturist</td>';
													echo '<td>9430346681</td>';
													echo '<td>dhiru1sri@gmail.com</td>';
												echo '</tr>';
												
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										
										
									echo '</ul>';
								}
		
		
		if($sel_genre == 'ism')
								{
									echo '<ul class="collapsible" data-collapsible="accordion">';
									   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Health Center';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
											echo '<tr>';
													echo '<td>Name</td>';
													echo '<td>LandLine(R)</td>';
													echo '<td>Mobile</td>';
													echo '<td>Email</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>P. Kumar (SMO) </td>';
													echo '<td>2296636</td>';
													echo '<td>9835308328<br>9431711383</td>';
													echo '<td>smo@ismdhanbad.ac.in<br /> dr_prvn64@rediffmail.com</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>T. Banerjee (LMO) </td>';
													echo '<td>2296666</td>';
													echo '<td>9431725205</td>';
													echo '<td>9431124860 </td>';
												echo '</tr>';
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Sports and Physical Education Center';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Name</td>';
													echo '<td>LandLine(R)</td>';
													echo '<td>Mobile</td>';
													echo '<td>Email</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>D N Acharya (Sport Officer)</td>';
													echo '<td>-</td>';
													echo '<td>9431711294</td>';
													echo '<td> spo@ismdhanbad.ac.in </td>';
												echo '</tr>';
												
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Computer Center';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Name</td>';
													echo '<td>LandLine(R)</td>';
													echo '<td>Mobile</td>';
													echo '<td>Email</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>S. Mitra System Manager</td>';
													echo '<td>2296668</td>';
													echo '<td>9430349601</td>';
													echo '<td> cc@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>D. Ray</td>';
													echo '<td>2296764</td>';
													echo '<td>9431953938</td>';
													echo '<td>dpnkray@yahoo.co.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>R. Soni System Analyst</td>';
													echo '<td>-</td>';
													echo '<td>9471192496</td>';
													echo '<td>rakesh_soni33@yahoo.com</td>';
												echo '</tr>';
												
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Library';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Name</td>';
													echo '<td>LandLine(R)</td>';
													echo '<td>Mobile</td>';
													echo '<td>Email</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Partha De (Dy. Librarian) </td>';
													echo '<td>2296516</td>';
													echo '<td>9431122909<br>9431711383</td>';
													echo '<td>lib@ismdhanbad.ac.in <br />librarian@ismlib.ac.in<br /> parthadeism@gmail.com </td>';
												echo '</tr>';
												
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										
										
									echo '</ul>';
								}
		
		if($sel_genre == 'hostel')
								{
									
									  echo '<ul class="collapsible" data-collapsible="accordion">';
									   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Amber Hostel';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr K.S. Thyagraj</td>';
													echo '<td>2235701</td>';
													echo '<td>2235904(0), 8888887308(M)</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. S. Maiti</td>';
													echo '<td>-</td>';
													echo '<td>2235067(0) , 9471192208(M)</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td> Dr. L.A. kumaraswamidhas  </td>';
													echo '<td>2235055</td>';
													echo '<td>2235932 (0) , 9471191647(M)</td>';
													//echo '<td>dhiru1sri@gmail.com</td>';
												echo '</tr>';
												
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										 
									   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Diamond Hostel';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="table table-striped">';
												echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. R. Pamula</td>';
													echo '<td>2235501</td>';
													echo '<td>2235651(0), 9471191419(M)</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Sri Vinay Kr Rajak</td>';
													echo '<td>-</td>';
													echo '<td>2235938(0), 8051101110(M)</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												
												
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										 echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Emerald Hostel';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. Vinayak Ranjan		</td>';
													echo '<td>2235503</td>';
													echo '<td>2235635(0),9470383975(M)</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. Subindu Kumar</td>';
													echo '<td>-</td>';
													echo '<td>2235688(0),9471191160(M),9471178624(M)</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												
												
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Opal Hostel';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. (Mrs.) Sushila Maheshkar</td>';
													echo '<td>2235502</td>';
													echo '<td>2235797(0),9471191829(M)</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>' 
					    	 
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. (Mrs.) Rashmi Madhuri</td>';
													echo '<td>-</td>';
													echo '<td>2235935(0),9471191640(M)</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												
												
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
									  
									  
									  echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Sapphire Hostel';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. Mukul kr. Das</td>';
													echo '<td>2235505</td>';
													echo '<td>2235409(0),9470194846(M)</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. Tarachand Amgoth</td>';
													echo '<td>2235690</td>';
													echo '<td>2235520(0),9471191420(M)</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. D Ramesh</td>';
													echo '<td>-</td>';
													echo '<td>2235881(0),9471191814(M)</td>';
													//echo '<td>dhiru1sri@gmail.com</td>';
												echo '</tr>';
												
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Topaz Hostel';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. R.B.Chaudhary</td>';
													echo '<td>2235504</td>';
													echo '<td>2235881(0),9471191381(M)</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr.S.Tripathi</td>';
													echo '<td>-</td>';
													echo '<td>2235636(0),9471191359(M)</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												
												
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Jasper-A';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. Sukanta Das	</td>';
													echo '<td>2235702</td>';
													echo '<td>2235653(0),9471191438(M</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. B.S Kushwaha</td>';
													echo '<td>-</td>';
													echo '<td>2235765(0),9471191119(M)</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												
												
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Jasper-B';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
												echo '<tr>';
													echo '<td>	Dr. Pankaj Mishra</td>';
													echo '<td>2235682</td>';
													echo '<td>2235669(0),9470194401(M)</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. Sibayan Sarkar</td>';
													echo '<td>2235690</td>';
													echo '<td>2235886(0),9471191818(M)</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												
												
											
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Jasper-C';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
												echo '<tr>';
													echo '<td>	Dr. Chandan Guria</td>';
													echo '<td>-</td>';
													echo '<td>2235411(0),9431326774(M)</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. P.S. Rao</td>';
													echo '<td>-</td>';
													echo '<td>2235766(0),9471191351(M)</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Jasper-D';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<table class="table table-striped">';
												echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
														
						
												echo '<tr>';
													echo '<td>	Dr. Sanjay Ghosal</td>';
													echo '<td>-</td>';
													echo '<td>2235647(0),9431711283(M)</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												echo '<tr>';
													echo '<td>Dr. Abhishek K.Singh</td>';
													echo '<td>-</td>';
													echo '<td>2235118(0),9572159264(M)</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												
												echo '</tr>';
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Ruby-1';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<table class="table table-striped">';
													echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
														
						
												echo '<tr>';
													echo '<td>Dr. (Mrs.) Rajni Singh</td>';
													echo '<td>2235506</td>';
													echo '<td>2235447(0),9431711025(M)</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
												
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Ruby-2';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<table class="table table-striped">';
													echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
														
						
												echo '<tr>';
													echo '<td>Dr. (Mrs.) Upama Dutta</td>';
													echo '<td>2235507</td>';
													echo '<td>2235070(0),9471192212(M)</td>';
													//echo '<td>kaushikkumer.banerjee@yahoo.com</td>';
												echo '</tr>';
												
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Ruby-3';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<table class="hoverable">';
												echo '<table class="table table-striped">';
													echo '<tr>';
													echo '<td>Warden</td>';
													echo '<td>Direct Dial(R)</td>';
													echo '<td>Contact</td>';
												
												echo '</tr>';
														
						
												echo '<tr>';
													echo '<td>Office</td>';
													echo '<td>2235508</td>';
													echo '<td>2235647(0),9431711283(M)</td>';
													//echo '<td> eso@ismdhanbad.ac.in</td>';
												echo '</tr>';
											echo '</table>';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Ruby Annexe-1';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '2235995';
										  echo '</div>';
										echo '</li>';
										
										echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Ruby Annexe-2';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '2235509';
										  echo '</div>';
										echo '</li>';
										
									echo '</ul>';
								}
		if($sel_genre == 'dept')
								{
									
									  echo '<ul class="collapsible" data-collapsible="accordion">';
									   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Computer Science and Engineering Dept.';
										echo '</div>';
										echo '<div class="collapsible-body">';
											  echo '<a href="img/contacts/cse.png" title="Download"><img src="img/contacts/cse.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Applied Chemistry';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<a href="img/contacts/appllied_chemistry.png" title="Download"><img src="img/contacts/applied_chemistry.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Applied Geology';
										echo '</div>';
										echo '<div class="collapsible-body">';
											  echo '<a href="img/contacts/applied_geology.png" title="Download"><img src="img/contacts/applied_geology.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Applied Geophysics';
										echo '</div>';
										echo '<div class="collapsible-body">';
											 echo '<a href="img/contacts/applied_geophysics.png" title="Download"><img src="img/contacts/applied_geophysics.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Applied Mathematics';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<a href="img/contacts/applied_mathematics.png" title="Download"><img src="img/contacts/applied_mathematics.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<a href="img/contacts/applied_mathematics2.png" title="Download"><img src="img/contacts/applied_mathematics2.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Applied Physics';
										echo '</div>';
										echo '<div class="collapsible-body">';
											  echo '<a href="img/contacts/applied_physics.png" title="Download"><img src="img/contacts/applied_physics.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Chemical Engineering';
										echo '</div>';
										echo '<div class="collapsible-body">';
											 echo '<a href="img/contacts/chemicl_engineering.png" title="Download"><img src="img/contacts/chemicl_engineering.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Civil Engineering';
										echo '</div>';
										echo '<div class="collapsible-body">';
											 echo '<a href="img/contacts/civil_engineering.png" title="Download"><img src="img/contacts/civil_engineering.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Electronics Engineering';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<a href="img/contacts/electronics_engineering.png" title="Download"><img src="img/contacts/electronics_engineering.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<a href="img/contacts/electronics_engineering2.png" title="Download"><img src="img/contacts/electronics_engineering2.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Environmental Science and Engineering ';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<a href="img/contacts/environmental_science_and_engineering.png" title="Download"><img src="img/contacts/environmental_science_and_engineering.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Fuel and Mineral Engineering';
										echo '</div>';
										echo '<div class="collapsible-body">';
											 echo '<a href="img/contacts/fuel_and_mineral_engineering.png" title="Download"><img src="img/contacts/fuel_and_mineral_engineering.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Humanities and Social Sciences';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<a href="img/contacts/humanities_and_social_sciences.png" title="Download"><img src="img/contacts/humanities_and_social_sciences.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Management Studies';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<a href="img/contacts/management_studies.png" title="Download"><img src="img/contacts/management_studies.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Mechanical Engineering';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<a href="img/contacts/mechanical_engineering.png" title="Download"><img src="img/contacts/mechanical_engineering.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<a href="img/contacts/mechanical_engineering2.png" title="Download"><img src="img/contacts/mechanical_engineering2.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Mining Engineering';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<a href="img/contacts/mining_engieering.png" title="Download"><img src="img/contacts/mining_engineering.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<a href="img/contacts/mining_engineering2.png" title="Download"><img src="img/contacts/mining_engineering2.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Mining Machinery Engineering';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<a href="img/contacts/mining_machinery_engineering.png" title="Download"><img src="img/contacts/mining_machinery_engineering.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
										 echo '</div>';
										echo '</li>';
										
																			   echo '<li>';
										echo '<div class="collapsible-header"><i class="mdi-image-filter-drama"></i>';
											  echo 'Petroleum Engineering';
										echo '</div>';
										echo '<div class="collapsible-body">';
											echo '<a href="img/contacts/petroleum_engineering.png" title="Download"><img src="img/contacts/petroleum_engineering.png" width="80%" class="img-thumbnail"></a><br /><br />';
											echo '<div style="color:grey;font-size:12px;">Click on the image to download.</div>';
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