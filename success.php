<?php if (count($success) > 0): ?>
	<div class="alert-good-pro bg-success border rounded text-light" style="margin-top: 3%;">
		<span class="closebtn-pro" onclick="this.parentElement.style.display='none';">&times;</span> 
		<?php foreach ($success as $suc): ?>
			<p style="margin-top: auto; margin-bottom: auto;"> <?php echo $suc; ?>  </p>
		<?php endforeach;?>
	</div>
	<?php endif ?>