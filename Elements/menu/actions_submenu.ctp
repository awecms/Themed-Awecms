<ul class="dropdown">
	<?php
		foreach ($items as $item):
			$icon = 'icon-file-alt';
			if (!empty($item['options']['icon'])):
				$icon = 'icon-' . $item['options']['icon'];
			endif;
			unset($item['options']['icon']);
			$item['options']['escape'] = false;
			$item['options']['wrap'] = 'li';
			
			$text = sprintf('<i class="%s"></i> %s', $icon, $item['text']);
			echo $this->Menu->link($text, $item['url'], $item['options']);
		endforeach;
	?>
</ul>