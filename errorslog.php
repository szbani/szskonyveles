<?php  if (count($errorslog) > 0) : ?>
  <div class="error">
  	<?php foreach ($errorslog as $errorlog) : ?>
		<p><?php echo $errorlog ?></p>
		<script type="text/javascript">
                Lbtn();
        </script>
  	<?php endforeach ?>
  </div>
<?php  endif ?>