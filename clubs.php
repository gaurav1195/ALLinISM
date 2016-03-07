<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/new_functions.php"); ?>

 <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed text-white" style="background-color:">
        <li class="logo" style="background-color:;"><a id="logo-container"  href="http://allinism.in/" class="brand-logo" >
            <img id="front-page-logo" style="width:100px;height:100px;" class="responsive-img" src="img/allin.png"></a></li>
		
        <li class="bold" style=";"><a href="clubs.php?genre=cse" class="list-group-item <?php if($sel_genre =='books'){ echo "active" ;} ?>">CSE Society</a></li>
        <li class="bold" style=";"><a href="clubs.php?genre=Cyber" class="list-group-item <?php if(Cyber){ echo "active" ;} ?>">Cyber Labs</a></li>
        <li class="bold" style=";"><a href="clubs.php?genre=adc" class="list-group-item <?php if($sel_genre =='adc'){ echo "active" ;} ?>">Abhay Dramatics Club</a></li>
        <li class="bold" style=";"><a href="clubs.php?genre=music" class="list-group-item <?php if($sel_genre =='music'){ echo "active" ;} ?>">Manthan</a></li>
        <li class="bold" style=";"><a href="clubs.php?genre=litm" class="list-group-item <?php if($sel_genre =='litm'){ echo "active" ;} ?>">LITM</a></li>
        <li class="bold" style=";"><a href="clubs.php?genre=litc" class="list-group-item <?php if($sel_genre =='litc'){ echo "active" ;} ?>">LIT-C</a></li>
        <li class="bold" style=";"><a href="clubs.php?genre=astronomy" class="list-group-item <?php if($sel_genre =='astronomy'){ echo "active" ;} ?>">Astronomy Club</a></li>
        <li class="bold" style=";"><a href="clubs.php?genre=photo" class="list-group-item <?php if($sel_genre =='photo'){ echo "active" ;} ?>">Photofreaks</a></li>
        <li class="bold" style=";"><a href="clubs.php?genre=toast" class="list-group-item <?php if($sel_genre =='toast'){ echo "active" ;} ?>">Toastmasters</a></li>
        <li class="bold" style=";"><a href="clubs.php?genre=android" class="list-group-item <?php if($sel_genre =='android'){ echo "active" ;} ?>">Android Club</a></li>
        <li class="bold" style=";"><a href="clubs.php?genre=google" class="list-group-item <?php if($sel_genre =='google'){ echo "active" ;} ?>">Google Students Club</a></li>
        
		<br /><br /><br />
		<br /><br /><br />
		
        
      
      
	  
      </ul>  
	  
    </header>
	
	  <main><div class="section" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
		<h6 class="header center-on-small-only right-align"><a style="text-decoration:none;color:white" href="http://allinism.in/">Home</a></h6>
        <h1 class="header center-on-small-only">Clubs and Societies</h1>
		<?php
			if(!isset($_GET['genre'])){
        echo '<h4 class ="light red-text text-lighten-4 center-on-small-only">Info about all the Societies and Clubs operational in ISM</h4>';}
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
			if($sel_genre == 'cse'){
				echo '<div class="row">';
					echo  '<div class="col l2">';
						echo '<img class="responsive-img" src="img/cse.png">';
					echo '</div>';
					echo  '<div class="col l10">';
						echo '<h4 class ="light red-text text-lighten-1 center-on-small-only">CSE Society</h4>';
					echo '</div>';
					echo '<div class="divider"></div><hr>';
				echo '</div>';
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Vision</h5>';
				echo '<div class"grey-text text-darken-2">The objective of the CSES is to promote Computer Science & Engineering 
					awareness among the students in the CSE by organizing technical activities
					such as lectures, workshop, quizzes and excursion and to foster relationship 
					among the past and present students and the teachers of the CSE
					by organizing various departmental events such as annual day celebration, freshers welcome, farewell etc.</div><br />';

				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">About</h5>';
				echo '<div class"grey-text text-darken-2"> The Indian School of Mines Computer Science and Engineering Society functions under
					the auspices of Indian School of Mines. The Director of Indian School of Mines, Dhanbad
					is the Patron of the CSES. Membership of the CSES is open to every faculty member,
					officer and staff member (whether academic or non-academic), every UG student, PG student (M. Tech.)
					and research scholar of the CSE. Any such eligible person have to pay the annual subscription.</div><br />';
					
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Activities</h5>';
				echo '<div class"grey-text text-darken-2">Organizing various departmental events such as annual day celebration, freshers welcome, farewell etc.</div><br />';
				
				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Events</h5>';
				echo '<div class"grey-text text-darken-2">Organizing technical activities such as lectures, workshop, quizzes, coding competitions and excursion.</div><br />';
				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Contacts</h5>';
				echo '<div class"grey-text text-darken-2">Dr. Chiranjeev Kumar<br />
				Associate Professor & Head<br />
				Department of Computer Science & Engineering<br />
				Indian School of Mines (ISM), Dhanbad- 826 004, Jharkhand, India.<br />
				Address(R): #20, 5th Floor, Block No. I, Teachers Enclave, Near UGC<br />
				Colony, ISM Campus, Dhanbad.<br />
				Voice: +91-9431125793 (M), +91-326-2235273 (O), 2235489 (O),<br />
				+91-326-2235589 (R)<br />
				Fax: +91-326-2296563, +91-326-2296613<br /><br />

				Ashay Sinha<br />
				Pre-Final Year, Computer Science and Engineering<br />
				Indian School of Mines, Dhanbad<br />
				Ph: +91-9608384314<br /></div>';
				
			}
			
			
			if($sel_genre == 'Cyber'){
				echo '<div class="row">';
					echo  '<div class="col l2">';
						echo '<img class="responsive-img" src="img/cse.png">';
					echo '</div>';
					echo  '<div class="col l10">';
						echo '<h4 class ="light red-text text-lighten-1 center-on-small-only">Cyber Labs</h4>';
					echo '</div>';
					echo '<div class="divider"></div><hr>';
				echo '</div>';
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Vision</h5>';
				echo '<div class"grey-text text-darken-2">Cyber Labs was founded with the aim of promoting the culture of innovation.
					We believe in creating things that "matter",
					every project at CL falls into three categories: <br >
					1. Solving social problems via technology.<br />
					2. Preserving Indian Culture with technology.<br />
					3. Making some cool stuff. <br />
					We brainstorm and prototype in all fields ranging from wearable-tech to optical displays. 
					With all the support from our friends/researchers/professors ranging from MIT to JHU,
					we envision in transforming us to engineers, the problem solvers of society.</div><br />';

				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">About</h5>';
				echo '<div class"grey-text text-darken-2">We aWe are a team of individuals from multiple disciplines, driven by the desire of implementing 
					solutions-ubounded by the limits of knowledge or techical know-how. The problem statement address
					issues ranging
					from solving social problems and cultural oportunities to building some cool gadgets. It was 
					founded post inpiration on the footsteps of MIT MEDIA LABS by an enthusiatic and ticking 
					learner who discovered a scope beyond rote learning and plain-vanilla implementations 
					of the common problems and sci-fi solutions.
					Cyber Labs provides a platform to discuss debate and explore the viable and easy solutions,
					be it tech or non-tech to problems via a project-based approach. With hopes to par the levels of
					exposure, we are delightful for the fact that Cyber Labs is the first direct interface between
					Indian School of Mines and Massachusetts Institute of Technology.</div><br />';
					
					
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Activities/Events</h5>';
				echo '<div class"grey-text text-darken-2">We hold regular sessions at weekend or sometimes in weekdays too ranging from an hour long
					 session to hours n hours long depending upon the project we are working on.</div><br />';
				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Contacts</h5>';
				echo '<div class"grey-text text-darken-2">For any queries, you may visit <br />
					http://www.cyberlabs.club <br />
					or our Facebook Page : http://www.facebook.com/labscyber <br />
					or you may also contact Mohit Chawla(http://www.mohitchawla.in)</div>';
				
			}
			
			
			if($sel_genre == 'adc'){
				echo '<div class="row">';
					echo  '<div class="col l2">';
						echo '<img class="responsive-img" src="img/cse.png">';
					echo '</div>';
					echo  '<div class="col l10">';
						echo '<h4 class ="light red-text text-lighten-1 center-on-small-only">Abhay Dramatics Club</h4>';
					echo '</div>';
					echo '<div class="divider"></div><hr>';
				echo '</div>';
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Vision</h5>';
				echo '<div class"grey-text text-darken-2">The club runs with the aim of providing a platform for students who are passionate for theatre.
					aBhAy dramatics club facilitates its members to explore various aspects of theatre with its sessions.
					about : aBhAy dramatics club was founded in march of 2009 (by sunny rao sir and abhishek ghosh sir).
					with only 2 members at the time of its inception,the club has grown into a family of around 65
					members by now.The club is not only known for its activities but also for the attachment among 
					its members, because "once you are in it,you are into it."</div><br />';

					
					
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Events</h5>';
				echo '<div class"grey-text text-darken-2">The plays performed by the club are events which are organised usually twice a semester.
					  Few of the performed plays have been self-written. 
					  These plays are well prepared and leave the audience awestruck.A blog is operated expatiating events and activities</div><br />';
				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Contacts</h5>';
				echo '<div class"grey-text text-darken-2">For any queries, you may visit <br />
					<a href="https://www.facebook.com/pages/Abhay-Dramatics-Club/178960968784133?fref=ts">Facebook Page</a><br />
					Nirav Agarwal - 7250366453</div>';
				
			}
			
			
			if($sel_genre == 'music'){
				echo '<div class="row">';
					echo  '<div class="col l2">';
						echo '<img class="responsive-img" src="img/cse.png">';
					echo '</div>';
					echo  '<div class="col l10">';
						echo '<h4 class ="light red-text text-lighten-1 center-on-small-only">Manthan</h4>';
					echo '</div>';
					echo '<div class="divider"></div><hr>';
				echo '</div>';
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Vision</h5>';
				echo '<div class"grey-text text-darken-2">Promotion of music and long forgotten indian artforms(through the Spic-macay collab)</div><br />';

				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">About</h5>';
				echo '<div class"grey-text text-darken-2">WE are everything that ism has about music!!!</div><br />';
					
					
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Activities</h5>';
				echo '<div class"grey-text text-darken-2">Teaching, composition and bakar sessions every.</div><br />';
				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Events</h5>';
				echo '<div class"grey-text text-darken-2">Uzik Cult weekend (August end/sept beg.)<br />
					 
					 {Alive and hindsabha being sub events},<br />
					 The Last Stage(March end).</div><br />';
				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Contacts</h5>';
				echo '<div class"grey-text text-darken-2">Abhay Singh 7250366922 <br />
					 Akanksha Sinha 8298130983</div>';
				
			}
			if($sel_genre == 'toast'){
				echo '<div class="row">';
					echo  '<div class="col l2">';
						echo '<img class="responsive-img" src="img/cse.png">';
					echo '</div>';
					echo  '<div class="col l10">';
						echo '<h4 class ="light red-text text-lighten-1 center-on-small-only">Toastmasters Club</h4>';
					echo '</div>';
					echo '<div class="divider"></div><hr>';
				echo '</div>';
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Aim</h5>';
				echo '<div class"grey-text text-darken-2">-	Empower individuals to become more effective communicators and leaders<br />
					-	It provide a supportive and positive learning experience in which members
						are empowered to develop communication and leadership skills,
						resulting in greater self-confidence and personal growth and look
						forward to work for integrity,respect,service,excellence.<br >
					-	It provide a commitment to self development.</div><br />';

				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">About</h5>';
				echo '<div class"grey-text text-darken-2"> -	The toastmaster program is not a college, trade school, or other formal
					course in public speaking.it provides two educational tracks:
					a communication track, in which speaking skill is developed,
					and a leadership track, which is to develop leadership skills.<br / >
					-	During club meetings there is chance to build ‘quick thinking” skills.</div><br />';
					
					
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Activities</h5>';
				echo '<div class"grey-text text-darken-2"> -	Basically toastmasters club comprises of three phases:<br />
A.	Prepared speech section- A phase where speakers prepare their project with the help of 
assigned mentors and deliver it putting their 100% effort.<br />
B.	The second phase, which is more like an activity is the table topic section,
 where members as well as guests get an opportunity to come up on stage and speak
 for at-least 1-2 mins on the topic written on the chit they choose. It can be compared to impromptu speech also.<br />
C.	The third one involves the evaluation phase, which is believed
 to be the diamond gem in the club in which every member who speaks
 at-least once is evaluated by a set of evaluators.These set of evaluators 
 involves the Ah- counter-Who checks the usage of vocal pauses and crutch words,
 the grammarian- who rectifies the grammatical errors, the timer-who keeps a record of the time limit.<br />
D.	Apart from these three phases, the club also conducts activities like JAM( Just a minute), 
Group discussions(GDs) and debates if and when time permits.<br /></div><br />';

				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Events</h5>';
				echo '<div class"grey-text text-darken-2">-	An International humorous speech and evaluation contest is conducted once in 6 months.<br />
				-	An International speech contest and table topic contest is conducted once in 6 months.<br />
				-	Also various conferences takes place around the globe, which intrigues the toastmasters to merge
				 together and feel like a family, thereby protruding more interest and confidence within one to improve and develop oneself.<br /><br /></div><br />';
								
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Contacts</h5>';
				echo '<div class"grey-text text-darken-2">Mani Bansal, <br />
				Vicepresident education,<br />
				ISM Energised Toastmasters club,<br />
				Mob no: (+91) 7033631194, Email: mani04bansal94@gmail.com<br /></div>';
								
			}
			
			
			if($sel_genre == 'astronomy'){
				echo '<div class="row">';
					echo  '<div class="col l2">';
						echo '<img class="responsive-img" src="img/cse.png">';
					echo '</div>';
					echo  '<div class="col l10">';
						echo '<h4 class ="light red-text text-lighten-1 center-on-small-only">Astronomy Club</h4>';
					echo '</div>';
					echo '<div class="divider"></div><hr>';
				echo '</div>';
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Vision</h5>';
				echo '<div class"grey-text text-darken-2">The main vision behind the formation of the astronomy club in the college 
premises was so that we could spread some basic knowledge about astronomy and to generate an interest within ismites.</div><br />';

				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">About</h5>';
				echo '<div class"grey-text text-darken-2"> This club was initiated in the month of September 2014 with a mere bunch 
				of 5 members and eventually we rose up to strength of about 55members in the early days of the month of February 2015. 
				We plan to conduct several events and workshops in order to create an interest amongst the members of the club
				and other students of the college in order to ensure the spread of astronomical education amongst the students
				of this college. We are still in talks regarding registering our club with an international organization originating
				in MIT. We aim to achieve all our goals by the end of 2015</div><br />';
					
					
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Activities</h5>';
				echo '<div class"grey-text text-darken-2">We conduce a club meeting every Friday at the student activity center at 6pm. 
				so far we have arranged for two workshops one star gazing session and many video lectures conducted during the meetings,
				we have also conducted quizzes and debates on controversial topics in order to ensure that the sessions end
				up being more lively. In the month of January we conducted a small seminar by a reputed scientist from ISRO</div><br />';
				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Events</h5>';
				echo '<div class"grey-text text-darken-2">We have plans to keep at least 1 event a month at this stage and we hope to have more in the future 
				Some of the events planned so far are

				Group discussions
				Presentations by the members on topics of their choice
				Astronomy quiz once a semester
				Construction of a telescope
				Workshop on bottle rockets 
				Star gazing sessions every month
				National conferences once a year once the club is successfully affiliated with the international organization
				Guest lectures and seminars once a month</div><br />';
							
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Contacts</h5>';
				echo '<div class"grey-text text-darken-2">Quintus Peter Fernandes - 8051014027 quintus.ferns@yahoo.com<br />
				Nishant - 9386824368</div>';
				
			}
			if($sel_genre == 'android'){
				echo '<div class="row">';
					echo  '<div class="col l2">';
						echo '<img class="responsive-img" src="img/cse.png">';
					echo '</div>';
					echo  '<div class="col l10">';
						echo '<h4 class ="light red-text text-lighten-1 center-on-small-only">Android Club</h4>';
					echo '</div>';
					echo '<div class="divider"></div><hr>';
				echo '</div>';
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Vision</h5>';
				echo '<div class"grey-text text-darken-2">To build an app development community for the worlds most popular mobile and wear operating system, Android.</div><br />';

				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">About</h5>';
				echo '<div class"grey-text text-darken-2"> This club was started in January 2015 by Nikhil Kumar Mittal 
				with an aim to make students learn Android app development and to provide them a platform to showcase their learned skills. 
				The club managed to have collaboration with Google for its first event Android Fundamentals.div><br />';
					
					
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Activities</h5>';
				echo '<div class"grey-text text-darken-2">Workshops & Hackathons for Android app development.</div><br />';
				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Events</h5>';
				echo '<div class"grey-text text-darken-2">First event -Android Fundamentals- in collaboration with Google, 
				consisting of seven sessions is currently going on.</div><br />';
				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Contacts</h5>';
				echo '<div class"grey-text text-darken-2">- Nikhil Kumar Mittal (Founder)<br>
				mr.nkmittal@gmail.com | +91-8674806608<br>
				- Anish Somani (Facilitator)<br>
				 somani.anish@gmail.com | +91-7631057774<br>
				Facebook page: https://www.facebook.com/AndroidClubIITDhanbad</div>';
								
			}
			if($sel_genre == 'google'){
				echo '<div class="row">';
					echo  '<div class="col l2">';
						echo '<img class="responsive-img" src="img/cse.png">';
					echo '</div>';
					echo  '<div class="col l10">';
						echo '<h4 class ="light red-text text-lighten-1 center-on-small-only">Android Club, IIT Dhanbad</h4>';
					echo '</div>';
					echo '<div class="divider"></div><hr>';
				echo '</div>';
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Vision</h5>';
				echo '<div class"grey-text text-darken-2">This club was started in August 2013 by Yogendra Singh. Google Student Club
					acts as a liaisons between Google and college via conducting innovative activities, 
					events, workshops, presentations or anything productive that can significantly 
					create an impact on everybodys personal and professional life.
				</div><br />';

				
					
					
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Activities</h5>';
				echo '<div class"grey-text text-darken-2">Workshops, Hackathons, Tech-Talks, HoAs etc.</div><br />';
				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Events</h5>';
				echo '<div class"grey-text text-darken-2"><ul><div class="blue-text text-lighten-2 ">Past Events (2014-2015)</div>
				<li>GSA Orientation Program - Oct14<br></li>
				<li>Android PLAY - I (Android App Development Workshop) - Nov14<br></li>
				<li>Introduction to Git and Github - Feb14<br></li></ul>
				<ul><div class="blue-text text-lighten-2 ">Ongoing & Upcoming Events</li></diV>
				<li>Android Fundamentals (24 Mar14 - April14)<br></li>
				<li>PMO App Contest (Campus Partner) - Till 23rd March14<br></li>
				<li>GOOGOL (Nationwide Competitive Programming Contest) - 4th April15</div><br /></li></ul>';
				
				echo '<h5 class ="light teal-text text-lighten-1 center-on-small-only">Contacts</h5>';
				echo '<div class"grey-text text-darken-2">o Nikhil Kumar Mittal (Google Student Ambassador -  India)<br > mr.nkmittal@gmail.com | +91-8674806608
				<br />o Facebook page: https://www.facebook.com/GSC.ISM<br /></div>';
								
							}
			
			
			
		
		
		}
     ?>
	 <?php
		if(!isset($_GET['genre'])){
			echo '<div class="row">';
			  echo '<div class="col s12 m9 l12">';
				echo '<div class="card-panel teal">';
				  echo '<span class="white-text">Please select a Club/Society Form the left and Go All In';
				  echo '</span>';
				echo '</div>';
			  echo '</div>';
			echo '</div>';
			
			/*echo '<div class="row">';
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