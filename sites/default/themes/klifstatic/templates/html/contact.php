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

<?php
	
	$contact = array(
		'#type' => 'markup',
		'#prefix' => '<div class="contact-form clear">',
		'#suffix' => '</div>',
		'close'	=> array(
			'#markup' => '<div class="close-form transition"><i class="fa fa-times"></i></div>',
		)
	);
	$contact['contact_form'] = array(
		'#type'	=> 'fieldset',
		'#attributes' => array('id' => array('contact_form')),
		'name'	=> array(
			'#markup' => '<label for="name">Name</label>
			<input type="text" name="name" id="name" />',
			'#prefix' => '<div class="grid-half">',
			'#suffix' => '</div>',
		),
		'email'	=> array(
			'#markup' => '<label for="email">Email</label><input type="text" name="email" id="email"  class="right" />',
			'#prefix' => '<div class="grid-half">',
			'#suffix' => '</div>',
		),
		'message'	=> array(
			'#markup' => '<label for="message" class="m-top">Message</label><textarea name="message"  id="message" ></textarea>',
			'#suffix' => '<div class="clear"></div>',
		),
		'submit' => array(
			'#type' => 'submit'
			'#markup' => '<label>
			<button class="submit_btn transition" id="submit_btn"><i class="fa fa-envelope-o fa-2x"></i> </button></label>',
			'#suffix' => '<div id="result"></div>',
		),
	);

?>