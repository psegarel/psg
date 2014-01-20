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
		

		
	</div><!--/ Wrapper-->	
</div>
<!--/.page -->
