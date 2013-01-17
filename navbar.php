<?php
/*
Template Name: navbar
*/
?>
 
<!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      

        <div class="navbar">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" id="menubtn" data-toggle="collapse" data-target=".nav-collapse">Menu</a>
            <a class="brand" href="#">
	            
	            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt"surfrider foundation Europe logo" id="logoimg"/>
	            
            </a>
            <a href="http://madelinechapin.com/portugaltest/"><h1>Ericeira</h1></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
           
           
           
            <div class="nav-collapse collapse"> 
              <ul class="nav pull-right">
              
              
              
              
               <li><a href="http://madelinechapin.com/portugaltest/about/">About Us</a></li>
		
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Learn<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="http://madelinechapin.com/portugaltest/problem/">The Problem</a></li>
				<li><a href="http://madelinechapin.com/portugaltest/resources/">Resources</a></li>
				<li><a href="http://madelinechapin.com/portugaltest/psa/">PSA's</a></li>
			</ul>
		</li>
		
			
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Take Action<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="http://madelinechapin.com/portugaltest/why-give/">Why Give?</a></li>
				<li><a href="http://madelinechapin.com/portugaltest/volunteer/">Volunteer</a></li>
				<li><a href="#">Donate</a></li>
				<li><a href="http://madelinechapin.com/portugaltest/membership/">Become a Member</a></li>
				<li><a href="http://madelinechapin.com/portugaltest/calendar/">Events Calendar</a> </li>
			</ul>
		</li>	
		
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Photos</a></li>
				<li><a href="#">Videos</a></li>
			</ul>
		</li>
		

		<li> <a href="http://madelinechapin.com/portugaltest/contact/">Contact Us</a></li>	

		<li> <a href="http://madelinechapin.com/portugaltest/kid-zone/" ><img src="<?php echo get_template_directory_uri(); ?>/img/kidzone.png" class="visible-desktop" id="kidzone"><span class="hidden-desktop" id="kidzonemobile">Kid Zone </span></a></li>	
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

     
    </div><!-- /.navbar-wrapper -->
