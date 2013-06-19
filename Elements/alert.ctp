<?php
if (!isset($class)):
	$class = 'alert alert-success';
elseif ($class === false):
	$class = 'alert';
else:
	$class = 'alert alert-' . $class;
endif;
?>
<div class="<?php echo h($class); ?>">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<?php if (isset($params['title'])): ?>
		<strong><?php echo h($params['title']); ?></strong>
	<?php endif; ?>
	<?php echo h($message); ?>
</div>