<?php $filepath = drupal_get_path('theme' , 'klifstatic');?>

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

<div class="bg" style="background: #000;"></div>
	
<!--================= Main start ================-->

	<div class="main">

		<div class="swiper-container">
		
			<div class="swiper-wrapper">
			

				<div class="swiper-slide">
				
			 <!--================= About start ================-->
			 
					<div class="container">
										
						<div class="content"> 
	
							<h2>About us</h2>    
							<div class="small-separator"></div>                       	
			
							<p class="align-just"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo eros justo, in pulvinar neque congue eu. Fusce gravida pharetra leo, in consequat sapien bibendum eleifend. Duis suscipit purus at mollis varius. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> 
							<p class="align-just">Ut eu nisl ut purus sodales suscipit sit amet non elit. Pellentesque viverra fringilla purus ut pretium. Morbi sit amet nunc sed nibh lobortis posuere condimentum nec urna. Praesent tincidunt dictum porttitor. Cras et purus sed ipsum ullamcorper tristique.</p>
								
							<!--social-links -->
								
							<div class="social-links">
								<ul>
									<li><a href="#" target="_blank"  class="transition"><i class="fa fa-facebook-square"></i><span>Facebook</span></a></li>
									<li><a href="#" target="_blank" class="transition"><i class="fa fa-dribbble"></i><span>Dribbble</span></a></li>
									<li><a href="#" target="_blank" class="transition"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
								</ul>
							</div>
			
						</div><!--About end-->
						<a class="navigation arrow-right back-left transition" href="#"><i class="fa fa-chevron-right"></i></a>  
					</div>
					
				</div>
				


				<div class="swiper-slide"> 
				
				<!--============= Countdown start =============-->	
				      	          
					<div class="container">
						
						<div class="content fistslide transition bc"> 
						
						<div class="fade transition">  
						<span class="rotade rot-top-left"></span>
						<span class="rotade rot-top-right"></span>
						<span class="rotade rot-bottom-left"></span>
						<span class="rotade rot-bottom-right"></span>  
						<h2>Patrick Segarel</h2>
							<!-- <img src=<?php // print $filepath."/img/logo.png" ?>  alt="">  -->
							 
								<!-- <ul class="countdown">
									<li>
										<span class="days rot">00</span>
										<p class="days_ref">days</p>			
									</li>
									<li>
										<span class="hours rot">00</span>
										<p class="hours_ref">hours</p>
									</li>
									<li>
										<span class="minutes rot2">00</span>
										<p class="minutes_ref">minutes</p>
							
									</li>
									<li>
										<span class="seconds rot2">00</span>
										<p class="seconds_ref">seconds</p>
									</li>
								</ul> -->
									
			
							<h3>Web Development &amp; Design</h3>
 
						</div> 
						             
						<div class="clear"></div>
							
						<div class="show-progress isDown transition">
							<i class="fa fa-chevron-down fa-2x"></i>
						</div>
							
						</div> 
						              
						<a class="navigation arrow-left about-link transition" href="#"><i class="fa fa-info fa-1x"></i></a> 
						<a class="navigation arrow-right contact-link transition" href="#"><i class="fa fa-envelope-o fa-1x"></i></a> 

						<div class="progress-holder">
						
							<div class="progress">
							 
							<input data-bgcolor="#ccc"  data-readonly=true type="text" data-width="250" data-skin="tron" data-fgcolor="#fff" data-thickness=".07" data-angleoffset="180" class="num num2" name="65" value="0">
							<span class="percent">%</span>
							
							</div>
							
							<h3>NOTIFY ME WHEN IT'S READY</h3> 
							
							<div class="subcribe">

								<span class="overlay suboverlay"></span>
								<fieldset>
									<form class="subscriptionForm" method="post">
										<input id="subscriptionForm" class="inputForm" type="text" value="Enter Your Email Address" onFocus="if (this.value=='Enter Your Email Address') this.value=''" onBlur="if (this.value==''){this.value='Enter Your Email Address'}" />
										<input type="submit" id="submitButton" class="transition" value="Send">
									</form>
									
									<div id="success">Thanks for your subscription</div>
									<div id="error">Please enter a valid email address</div>
									
								</fieldset>
								
							</div>
							 
						</div> 
						
					</div> <!-- Countdown end --> 
					   
				</div>
				

				<div class="swiper-slide">
				
				<!--============== Contact start ================-->
							
					<div class="container">

						<div class="content fade2 transition">
						
							<h2>Get in touch</h2> 
							<div class="small-separator"></div>
					
							
							<p class="align-just" style="text-align:center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo eros justo, in pulvinar neque congue eu. Fusce gravida pharetra leo, in consequat sapien bibendum eleifend. </p> 
							
							<div class="contact-info">
							
								<div class="grid-2 transition">
									<i class="fa fa-mobile fa-2x"></i>
									<br><br> +1 (000) 123456 
								</div>	
								
								<div class="grid-2 transition lanch-form">
									<i class="fa fa-envelope-o fa-2x"></i> 
									<br><br>yourmail@yuormail.com
								</div>
								
								<div class="grid-2 transition">
									<i class="fa fa-globe fa-2x"></i>
									<br><br><a href="#" target="_blank">Heritage Park Minneapolis</a> 
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