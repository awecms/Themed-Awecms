<?php if (count($menuItems) > 0): ?>
	<ul class="nav">
		<?php foreach ($menuItems as $item): ?>
			<li><?php echo $this->Html->link($item['text'], $item['url'], $item['options']); ?></li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>