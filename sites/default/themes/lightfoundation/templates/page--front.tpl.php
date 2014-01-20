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
						
					<ul>
						<li><a href="#wrapper">home</a></li>
						<li><a href="#about">about me</a></li>
						<li><a href="#newsletter">mailing list</a></li>
						<li><a href="#services">services</a></li>
						<li><a href="#testimonials">testimonials</a></li>
						<li><a href="#contact">contact</a></li>
					</ul>
				<!-- Messages -->
				
				
					</nav>
				<!--End navigation-->
					<?php if ($messages) print $messages; ?>
								
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
						<a href="#counter"><i class="icon-down-open-big"></i></a>
					</div><!--End down-->
					
				</div><!--End Holder 960-->
			</div><!--End overlay-->
		</div><!--End teaser-->	
		
		<!--Counter section-->
		<section id="counter" class="clearfix section">
			<!--Holder 960-->
			<div class="holder960 clearfix">
				<p>&nbsp;</p>
			</div><!--End Holder 960-->
			
		</section><!--End counter section-->
				
		<!--About section-->
		<section id="about" class="clearfix section">			
			<!--Holder 960-->
			<div class="holder960 clearfix">
			
				<!--Section title-->
				<div class="secTitle">
					<h1>about me</h1>
				</div>
				<!--End section title-->
					
				<!--Intro-->
				<div class="aboutIntro">
					<h1>I am a <span class="black">visual and interactive communication developer</span><br> 
					specialized in the <span class="orange">internet industry</span></h1>
				
					<p>With a solid development structure based on Open Source technologies, I build custom , highly scalable & secure websites.</p>
				
				
					<!--Icons background-->
					<div class="icoBg">
						<img src="sites/default/themes/lightfoundation/images/icons.png" alt="">
					</div><!--End icons background-->
					
				</div><!--End intro-->			
			</div><!--End Holder 960-->
		</section><!--End about section-->

		<!--Newsletter-->
		<section id="newsletter">
			<!--Subscribe container-->
			<div class="subscribeContainer">
				<!--Overlay-->
				<div class="overlay">
					<!--Holder 960-->
					<div class="holder960 clearfix">
						<!--Subscribe-->
						<div class="subscribe">
							<div class="letter"><span><i class="icon-mail"></i></span></div>

							<!--Subscribe holder-->
							<div class="subscribeHolder">
								<h1>Join my <span>mailing list</span></h1>
								<p>&nbsp;</p>
								<form id="notForm" target="_blank" action="http://eepurl.com/H__PT" method="post" novalidate="novalidate">
									<input type="email" class="required email" placeholder="Enter your email here..."  name="email"></imput>
									<div id="btnSubmit">
										<input type="submit" value="Subscribe" id="send" name="submit"></imput>
									</div>
								</form>
							</div><!--End subscribe holder-->						
						</div><!--End subscribe container-->
					</div><!--End Holder 960-->
				</div><!--End overlay-->
			</div><!--End subscribe container-->
		</section><!--End newsletter-->	

		<!--Services section-->
		<section id="services" class="clearfix section">
			<!--Holder 960-->
			<div class="holder960 clearfix">
				<!--Section title-->
				<div class="secTitle">
					<h1>services</h1>
				</div>
				<!--End section title-->

				<!--Intro-->
				<div class="servicesIntro">
						<p>&nbsp;</p>
				</div>
				<!--End intro-->

				<!--Services-->
				<div class="services clearfix">
					<!--Service single-->
					<div class="servSingle column ">
						<div class="ico"><i class="icon-desktop"></i></div>
						<div class="desc ">
						<h2>Web Design</h2>					
						<p>I have teamed up with talented graphic designers in order to offer dedicated graphic & web design services.
						</p>
						</div>
					</div><!--End service single-->

					<!--Service single-->
					<div class="servSingle column ">
						<div class="ico "><i class="icon-beaker"></i></div>
						<div class="desc ">
						<h2>Branding</h2>				
						<p>We can handle your graphic identity needs in order to give you a strong web as a well as real world presence.
						</p>
						</div>
					</div><!--End service single-->

					<!--Service single-->
					<div class="servSingle column ">
						<div class="ico"><i class="icon-pencil"></i></div>
						<div class="desc ">
						<h2>Graphic design</h2>				
						<p>Cool sleek business cards, stationery , logos , website template , ad design... we can handle it all!
						</p>
						</div>
					</div><!--End service single-->
					
				</div><!--Services-->
			</div><!--End Holder 960-->
		</section><!--End services section-->	


		<!--Testimonials container-->
		<div class="testimonialsContainer">
			<!--Overlay-->
			<div class="overlay">
				<!--Holder 960-->
				<div class="holder960 clearfix">
					<!--Testimonials-->
					<div id="testimonials">
						<p>&nbsp;</p>
						<div class="quote"><span><i class="icon-quote-right"></i></span></div>
						
						<!--Testimonials container-->
						<div class="testimoniaContainer">
							<!--Testi-->
							<div class="testi">
								<blockquote>It's been great working with Patrick and see how easily he could implement our designs</blockquote>
								<h3>Afonso Pesanha &ndash; <span><a href="http://waaastudio.com">waaastudio.com</a></span></h3>									
							</div><!--End testi-->
						
							<!--Testi-->
							<div class="testi">
								<blockquote>Nous sommes extremement satisfait de notre nouveau site <a href="http://volubel.com">volubel.com</a>
								 et nous envisageons une longue collaboration with Patrick pour nos futurs projets</blockquote>
								<h3>Stephane Menicot &ndash; <span>volubel.com</span></h3>
							</div><!--End testi-->

							<!--Testi-->
							<div class="testi">
								<blockquote>Patrick managed to update deltabridges.com & migrate all the website content without disrupting our users. This was a major task and he handled it brilliantly!</blockquote>
								<h3>Jean Jacques Verdun &ndash; <span>deltabridges.com</span></h3>									
							</div><!--End testi-->

							<!--Testi-->
							<div class="testi">
								<blockquote>Thanks Patrick for a fantastic new website... <a href="http://bobbellows.com">bobbellows.com</a></blockquote>
								<h3>Bob Bellows &ndash; <span>International Performer</span></h3>
							</div><!--End testi-->						
						</div>
						<!--End testimonials container-->

					</div><!--End testimonials-->				
				</div><!--End Holder 960-->
			</div><!--End overlay-->		
		</div><!--End testimonials container-->	

		<!--Contact section-->
		<section id="contact" class="clearfix section">
			<!--Holder 960-->
			<div class="holder960 clearfix">
				
				<!--Section title-->
				<div class="secTitle">
					<h1>contact me</h1>
				</div><!--End section title-->

				<!--Contact info-->
				<div class="contactInfo clearfix">
					<!--Info-->
					<div class="info column">
						<div class="ico"><i class="icon-location"></i></div>
						<p>1234 Street Road, City Name</p>
					</div><!--End info-->				

					<!--Info-->
					<div class="info column">
						<div class="ico"><i class="icon-mail"></i></div>
						<p>Email : name@gmail.com </p>
					</div><!--End info-->

					<!--Info-->
					<div class="info column">
						<div class="ico"><i class="icon-phone"></i></div>
						<p>Tel : + 123-456-789</p>
					</div><!--End info-->

					<!--Info-->
					<div class="info column">
						<div class="ico"><i class="icon-print"></i></div>
						<p>Fax : + 123-456-789</p>
					</div><!--End info-->

				</div><!--End contact info-->

				<!--Touch holder-->
				<div class="touchHolder">
					<!--Divider-->
					<div class="divider"><span><i class="icon-paper-plane"></i></span>
						<h1><!-- get in touch --><!-- <span> with us</span> --></h1>
					</div><!--End divider-->
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<!--Get in touch-->
					<div class="getinTouch clearfix">
						<!-- Drupal Contact Form -->
						<?php // if(isset($custom_contact_form)) print $custom_contact_form; ?>
						
						<!-- Contact form -->
						<!-- <div class="contactForm column">
							<form class="clearfix"  method="post" action="send.php">
								<div id="inputs">
								<input type="text" name="name" id="name" placeholder="Name *" >
								<input type="text" name="email" id="email"  placeholder="Email *" >
								<input type="text"  name="compagny" id="compagny"  placeholder="Compagny ">
								</div>

								<div id="textArea">
								<textarea name="message" id="message"  cols="45" rows="10" placeholder="Message *"></textarea>
								</div>
								<input type="submit" name="submit" id="submit" value="Send your message">
							</form>
							<div id="success"><h2>Your message has been sent. Thank you!</h2></div>
							<div id="error"><h2>Sorry your message can not be sent.</h2></div>
						</div> --><!-- End contact form -->
						
					</div><!--End get in touch-->					
				</div><!--End touch holder-->
			</div><!--End Holder 960-->				
		</section><!--End contact section-->
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>	

		<!--Footer-->
		<footer id="footer">
			<p>&copy; 2013. Light All Rights Reserved.</p>
			<!--Socials footer-->
			<ul class="socialsFooter">
				<li><a class="socialDribbble" href="#"><i class="icon-dribbble"></i></a></li>
				<li><a class="socialFacebook" href="#"><i class="icon-facebook"></i></a></li>
				<li><a class="socialVimeo" href="#"><i class="icon-vimeo"></i></a></li>
				<li><a class="socialPinterest" href="#"><i class="icon-pinterest"></i></a></li>
				<li><a class="socialLinkedin" href="#"><i class="icon-linkedin"></i></a></li>
				<li><a class="socialGplus" href="#"><i class="icon-gplus"></i></a></li>
				<li><a class="socialTwitter" href="#"><i class="icon-twitter-1"></i></a></li>
			</ul><!--End socials footer-->
		</footer><!--End footer-->	
		
	</div><!--/ Wrapper-->	
</div>
<!--/.page -->
