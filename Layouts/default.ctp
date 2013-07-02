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

		echo $this->Html->css('smoothness/jquery-ui-1.9.0.custom.min');
		echo $this->Html->css('main');

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>
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
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" href="#"><span class="icon-arrow-down"></span></a>
				<ul class="nav pull-right">
					<li><?php echo $this->Html->link(__(Configure::read('Awecms.websiteName')), '/'); ?></li>
					<li class="divider-vertical"></li>
					<li><?php echo $this->Html->link(__('Help'), '#'); ?></li>
					<li class="divider-vertical"></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Hello %s', AuthComponent::user('username')); ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><?php echo $this->Html->link(__('Edit your profile'), '#'); ?></li>
							<li><?php echo $this->Html->link(__('Logout'), array('admin' => false, 'plugin' => 'awecms', 'controller' => 'users', 'action' => 'logout')); ?></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<div id="main">
		<div class="row-fluid">
			<div id="sidebar">
				<?php echo $this->Menu->render('admin'); ?>
			</div>
			<?php
				$hasActions = $this->Menu->hasItems('actions');
				$legacy = (!$hasActions && $this->fetch('title') === '');
				
				$class = $this->fetch('class');
				$class .= $legacy ? ' legacy' : '';
				$class .= $hasActions ? ' actions' : '';
			?>
			<div id="content" class="<?php echo h(trim($class)); ?>">
				<div class="container-fluid">
					<?php if (!$legacy): ?>
						<h1><?php echo $this->fetch('title'); ?></h1>
					<?php endif; ?>
					<?php echo $this->Session->flash('flash', array('element' => 'alert')); ?>
					<?php echo $this->fetch('content'); ?>
					<?php echo $this->Menu->render('actions', array('element' => 'menu/actions')); ?>
					<div id="ajax"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		Powered by <a href="http://awecms.com">AweCMS</a> and <a href="http://www.cakephp.org/">CakePHP</a>
	</div>
	<?php
	echo $this->element('sql_dump');
	
	echo $this->Html->script('Awecms.jquery-1.8.2.min');
	echo $this->Html->script('Awecms.jquery-ui-1.9.0.custom.min');
	echo $this->Html->script('bootstrap');
	?>
	<script type="text/javascript">
	// baseUrl is Deprecated. Use APP instead.
	var baseUrl = <?php echo json_encode($this->Html->url('/')); ?>;
	</script>
	<?php
	echo $this->Html->script('Awecms.common');
	echo $this->fetch('script');
	?>
</body>
</html>
