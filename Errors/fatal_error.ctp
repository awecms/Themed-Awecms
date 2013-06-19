<div id="error-page">
	<?php $this->assign('title', '<i class="icon-warning-sign text-error"></i> ' . __d('awecms', 'Ooops')); ?>
	<p><?php echo __d('awecms', 'A problem has occured with AweCMS. If the problem continues please contact your website administrator.'); ?></p>
	<p><a class="btn btn-danger" data-toggle="collapse" data-target="#error-message">View Error</a></p>
	<div id="error-message" class="collapse">
		<pre class="pre-scrollable"><?php	
			?><strong><?php echo __d('awecms', 'Error'); ?>: </strong><?php echo h($error->getMessage()); ?><br><?php
			?><strong><?php echo __d('awecms', 'File'); ?>: </strong><?php echo h($error->getFile()); ?><br><?php
			?><strong><?php echo __d('awecms', 'Line'); ?>: </strong><?php echo h($error->getLine()); ?><br><?php
		?></pre>
	</div>
</div>