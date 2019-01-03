<?php if (count($errors) > 0): ?>
	<div id = "error" class="alert-good-pro bg-danger border rounded text-light" style="margin-top: 1%;">
		<span class="closebtn-pro" onclick="this.parentElement.style.display='none';">&times;</span> 
		<?php foreach ($errors as $error): ?>
			<p style="margin-top: auto; margin-bottom: auto;"> <?php echo $error; ?> </p>
		<?php endforeach;?>
	</div>
	<?php endif ?>