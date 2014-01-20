<!-- Contact form -->
<div class="contactForm column">
	<form id="<?php $form['#form_id'] ?>" class="clearfix"  method="post" action="<?php $form['#action'] ?>">
		<div id="inputs">
			<?php print drupal_render($form['name']); ?>
			<?php print drupal_render($form['mail']); ?>
		</div>

		<div id="textArea">
			<?php print drupal_render($form['subject']); ?>
			<?php print drupal_render($form['message']); ?>
		</div>
		<p>&nbsp;</p>
		<?php print drupal_render($form['actions']); ?>	
		<?php print drupal_render_children($form); ?>		
	</form>
</div>
<!-- End contact form -->