	

	<?php if(isset($Message)) : ?>
		<?php if($Message === 'Error') : ?>
			<div class="error">
				<?php echo validation_errors() . '<br />'; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	
	
	<?= form_open(base_url().'login/', array('class' => 'adobi-form', 'id' => 'login-form')); ?>
		
		<fieldset>
			<legend>Login</legend>
			
			<table border = "0" cellpadding = "5" cellspacing = "5">
				<tr>
					<td class = "label"><label for="username">Username:</label></td>
					<td><?= form_input(array('name'=>'username', 'id'=>'username', 'size'=>'35')); ?></td>
				</tr>
				<tr>
					<td class = "label"><label for="password">Password:</label></td>
					<td><?= form_password(array('name'=>'password', 'id'=>'password', 'size'=>'35')); ?></td>
				</tr>
			</table>
			
		</fieldset>
		
		<fieldset>
			<?= form_submit(array('name'=>'submit', 'id'=>'submit', 'value'=>'Login')); ?>
		</fieldset>
		
		
	<?= form_close(); ?>
	<br />
	<?= go_back(base_url()); ?>
	<br />
