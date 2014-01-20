<!--.page -->
<div role="document" class="page">
	<!-- Preloader -->
	<div id="loader">
		<div id="loaderInner"></div>
	</div>
	

	<!--Wrapper-->
	<div id="wrapper">
		<!--Header-->
		<header id="header" class=" default clearfix">
			<!--Holder 960-->
			<div class=" clearfix">
				
				<!--Logo-->
				<div class="logo">
					<?php if($site_name1 && $site_name2): ?>
						<a href="#wrapper"><h1><?php print $site_name1; ?> <span><?php print $site_name2; ?></span></h1></a>
					<?php else: ?>	
						<a href="#wrapper"><h1><span><?php print $site_name; ?></span></h1></a>
					<?php endif;?>	
				</div>
				<!--End logo-->	
				
				<!--Navigation-->
					<nav id="mainNav" >
						<a href="#" class="mobileBtn" ><i class="icon-menu"></i></a>
						
					<!-- <ul>
						<li><a href="#wrapper">home</a></li>
						<li><a href="#about">about me</a></li>
						<li><a href="#newsletter">mailing list</a></li>
						<li><a href="#services">services</a></li>
						<li><a href="#testimonials">testimonials</a></li>
						<li><a href="#contact">contact</a></li>
					</ul> -->
				<!-- Messages -->
				
				
					</nav>
				<!--End navigation-->
								
			</div><!--/ Holder 960-->
		</div><!--/ Header-->

		<!--Teaser-->
		<div id="teaser" class="clearfix">
			<!--Overlay-->
			<div class="overlay">
				<!--Holder 960-->
				<div class="holder960 clearfix">

					<!--Teaser title-->
					<div class="teaserTitle">
						<h1><?php if($site_slogan) print $site_slogan; ?></h1>
						<!-- <h2>keep it calm &amp; come back later </h2> -->
					</div><!--End teaser title-->

					<!--Down-->
					<div class="down">
						<!-- <a href="#counter"><i class="icon-down-open-big"></i></a> -->
					</div><!--End down-->
					
				</div><!--End Holder 960-->
			</div><!--End overlay-->
		</div><!--End teaser-->	
		
		<!--Footer-->
		<footer id="footer">
			<p>&copy; 2013. Patrick Segarel All Rights Reserved.</p>
			<!--Socials footer-->
			<ul class="socialsFooter">
				<li><a class="socialFacebook" href="https://www.facebook.com/patrick.segarel"><i class="icon-facebook"></i></a></li>
				<!-- <li><a class="socialVimeo" href="#"><i class="icon-vimeo"></i></a></li> -->
				<li><a class="socialPinterest" href="http://www.pinterest.com/psegarel/"><i class="icon-pinterest"></i></a></li>
				<li><a class="socialLinkedin" 
					href="http://www.linkedin.com/profile/view?id=317394297&trk=nav_responsive_tab_profile_pic"><i class="icon-linkedin"></i></a></li>
				<li><a class="socialGplus" href="https://plus.google.com/u/0/109806195232814989753/posts"><i class="icon-gplus"></i></a></li>
				<!-- <li><a class="socialTwitter" href="#"><i class="icon-twitter-1"></i></a></li> -->
				<!-- <li><a class="socialDribbble" href="http://dribbble.com/psegarel"><i class="icon-dribbble"></i></a></li> -->
			</ul><!--End socials footer-->
		</footer><!--End footer-->	
		
	</div><!--/ Wrapper-->	
</div>
<!--/.page -->
