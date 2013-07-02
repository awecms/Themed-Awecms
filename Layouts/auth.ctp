<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __(Configure::read('Awecms.websiteName')); ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('main');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="auth">
	<header id="header" class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<?php
					echo $this->Html->link(
						__(Configure::read('Awecms.designCompany')),
						array('admin' => true, 'plugin' => 'awecms', 'controller' => 'static_pages', 'action' => 'plugin_display', 'awecms', 'home'),
						array('class' => 'brand')
					);
				?>
			</div>
		</div>
	</header>
	<div id="main" class="container">
		<?php echo $this->fetch('content'); ?>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap'); ?>
</html>
