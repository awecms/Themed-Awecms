<aside id="actions" class="row-fluid">
	<h1><?php echo __d('awecms', 'Actions'); ?></h1>
	<ul class="nav nav-actions">
		<?php
			foreach ($items as $item):
				$class = '';
				if (!empty($item['options']['class'])) {
					$class = $item['options']['class'];
				}
				$icon = 'icon-file-alt';
				if (!empty($item['options']['icon'])):
					$icon = 'icon-' . $item['options']['icon'];
				endif;
				$submenu = '';
				if (!empty($item['options']['submenu'])):
					$class = empty($class) ? 'dropdown' : $class . ' dropdown';
					$item['options']['data-toggle'] = 'dropdown';
					$submenu = $this->Menu->render($item['options']['submenu'], array('element' => 'menu/actions_submenu'));
				endif;
				$active = $this->Menu->isActive($item['url'], $item['options']);
				if ($active):
					$class = empty($class) ? 'active' : $class . ' active';
				endif;
				unset($item['options']['class'], $item['options']['icon'], $item['options']['submenu']);
				
				$item['options']['escape'] = false;
				$text = sprintf('<i class="%s"></i> %s', $icon, $item['text']);
				$link = $this->Html->link($text, $item['url'], $item['options']);
				$format = empty($class) ? '<li>%2$s%3$s</li>' : '<li class="%1$s">%2$s%3$s</li>';
				echo sprintf($format, $class, $link, $submenu);
			endforeach;
		?>
	</ul>
</aside>