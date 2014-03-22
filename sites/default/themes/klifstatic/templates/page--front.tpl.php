<!--================= Wrapper start ================-->
<div id="wrapper">

	<div class="container-bg">
		<div class="container-overlay"></div>
		<span class="over-border top-border"></span>
		<span class="over-border bottom-border"></span>
		<span class="over-border left-border"></span>
		<span class="over-border right-border"></span>
	</div>
	
<!--================= Background ================-->
<?php if(!empty($background_image)): ?>
	<div class="bg" style="background-image:url(<?php print $background_image; ?>)"></div>
<?php endif; ?>	
<!--================= Main start ================-->

	<div class="main">

		<div class="swiper-container">
		
			<div class="swiper-wrapper">
			

				<div class="swiper-slide">
					<!--================= About start ================-->
			 
					<div class="container">
						<div class="content"> 
	
							<?php if(!empty($about_me)) print $about_me;?>
							
							<!--social-links -->
								
							<div class="social-links">
								<ul>
									<li><a href="https://www.facebook.com/patrick.segarel" 
										target="_blank"  class="transition"><i class="fa fa-facebook-square"></i><span>Facebook</span></a></li>
									<li><a href="http://www.linkedin.com/profile/view?id=317394297&trk=nav_responsive_tab_profile" 
										target="_blank" class="transition"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a></li>
									<li><a href="http://www.pinterest.com/psegarel/" 
										target="_blank" class="transition"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
								</ul>
							</div>
			
						</div><!--About end-->
						<a class="navigation arrow-right back-left transition" href="#"><i class="fa fa-chevron-right"></i></a>  
					</div>
				</div>				

				<div class="swiper-slide"> 
					<div class="container"><!--============= Main Page start =============-->	

						<div class="content fistslide transition bc"> 
							<div class="fade transition">  
								<span class="rotade rot-top-left"></span>
								<span class="rotade rot-top-right"></span>
								<span class="rotade rot-bottom-left"></span>
								<span class="rotade rot-bottom-right"></span>  
								
								<h2><?php print $site_name; ?></h2>
								<!-- <img src=<?php // print $filepath."/img/logo.png" ?>  alt="">  -->
								<h3><?php print $site_slogan; ?></h3>
							</div> 
							<?php print $messages; ?>
							<div class="clear"></div>
						</div> 

						<a class="navigation arrow-left about-link transition" href="#"><i class="fa fa-info fa-1x"></i></a> 
						<a class="navigation arrow-right contact-link transition" href="#"><i class="fa fa-envelope-o fa-1x"></i></a> 
					
					</div> <!-- Main Page end --> 
				</div>


				<div class="swiper-slide">
				<!--============== Contact start ================-->
							
					<div class="container">

						<div class="content fade2 transition">
						
							<h2>Get in touch</h2> 
							<div class="small-separator"></div>
					
							
							<p class="align-just" style="text-align:center">
								Feel free to contact me if you would like to talk about a specific project or see some of my previous work.<br/>
								I’m also open to new opportunities and external cooperation. 
							</p>
							
							<div class="contact-info">
							
								<div class="grid-2 transition">
									<i class="fa fa-mobile fa-4x"></i>
									<br><br> (+86 186) 8816 1081
								</div>	
								<div class="grid-2 transition">&nbsp;</div>
								<div class="grid-2 transition"> <!-- Add "lanch form" class to transform into button -->
									<i class="fa fa-envelope-o fa-2x"></i> 
									<br><br>info@patrick-segarel.com
								</div>
							</div>			
						</div>
						
						<!--contact form -->
						
						<div class="contact-form clear">
							<div class="close-form transition"><i class="fa fa-times"></i></div>
							<fieldset id="contact_form">
																
								<div class="grid-half">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" />
								</div>
										
								<div class="grid-half">
									<label for="email">Email</label>
									<input type="text" name="email" id="email"  class="right" />
								</div>
										
								<label for="message" class="m-top">Message</label>
								<textarea name="message"  id="message" ></textarea>
										
								<div class="clear"></div>
																	
								<label>
									<button class="submit_btn transition" id="submit_btn"><i class="fa fa-envelope-o fa-2x"></i> </button>
								</label>
								<div id="result"></div>
								
							</fieldset>
								
						</div>
						
						<a class="navigation arrow-left back-right transition" href="#"><i class="fa fa-chevron-left"></i></a> 
						
					</div><!--Contact end -->  
					      
				</div>
				

			</div> 
			
		</div>
		
	</div><!-- Main end -->
	
</div><!-- Wrapper end -->

<!--=============== javascript ===============-->

	<script type="text/javascript" src=<?php print $filepath."/js/jquery.min.js" ;?>></script>
	<script type="text/javascript" src=<?php print $filepath."/js/jpreloader.min.js" ;?>></script>
	<script type="text/javascript" src=<?php print $filepath."/js/easing.js" ;?>></script>
	<script type="text/javascript" src=<?php print $filepath."/js/idangerous.swiper-2.0.min.js" ;?>></script>
	<script type="text/javascript" src=<?php // print $filepath."/js/superslides.js" ;?>></script>
	<script type="text/javascript" src=<?php print $filepath."/js/county.js" ;?>></script>
	<script type="text/javascript" src=<?php print $filepath."/js/jquery.knob.js" ;?>></script>
	<script type="text/javascript" src=<?php print $filepath."/js/init.js" ;?>></script>
	
</body>
</html>