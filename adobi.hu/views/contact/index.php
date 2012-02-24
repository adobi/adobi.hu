	
	<?php $OK = false; if(isset($Message)) : ?>
		<?php if($Message === 'Error') : ?>
			<div class="error">
				<?php echo validation_errors() . '<br />'; ?>
				<?php $OK = false; ?>
			</div>
		<?php elseif($Message === 'Success') : ?>
			<div class="success">
				Your email has been sent!
				<?php $OK = true; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	
	<?php echo form_open(base_url().'contact', array('class' => 'adobi-form', 'id' => 'contact-form')); ?>
	<fieldset>
		<legend>Contact Me</legend>
		
		<table border = "0" cellpadding = "5" cellspacing = "5">
			<tr>
				<td class = "label"><label for="name">Name:</label></td>
				<td><?= form_input(array('name'=>'name', 'id'=>'name', 'value'=> !$OK ? set_value('name') : '', 'size'=>'35')); ?></td>
			</tr>
			<tr>
				<td class = "label"><label for="email">Email:</label></td>
				<td><?= form_input(array('name'=>'email', 'id'=>'email', 'value'=> !$OK ? set_value('email') : '', 'size'=>'35')); ?></td>
			</tr>
			<tr>
				<td class = "label"><label for="email">Message:</label></td>
				<td><?= form_textarea(array('name'=>'message', 'id'=>'message', 'value'=> !$OK ? set_value('message') : '')); ?></td>
			</tr>
			
		</table>		
		
	</fieldset>


	<fieldset>
		<?= form_submit(array('name'=>'submit', 'id'=>'submit', 'value'=>'Send Email')); ?>
	</fieldset>
	
	<?= form_close(); ?>
	<br />
	<?php echo go_back(base_url()); ?>
	<br /><br />
	<script type="text/javascript">
		//<![CDATA[
			ADobi.FormSetup();
		
		//]]>
	</script>
