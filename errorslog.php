<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
		<p><?php echo $error ?></p>
		<script type="text/javascript">
                Lbtn();
        </script>
  	<?php endforeach ?>
  </div>
<?php  endif ?>