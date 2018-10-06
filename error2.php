<?php  if (count($error2) > 0) : ?>
	<div class="error">
		<?php foreach ($error2 as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>