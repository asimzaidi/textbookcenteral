<div class="scans view">
<h2><?php  echo __('Scan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($scan['Scan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($scan['Book']['id'], array('controller' => 'books', 'action' => 'view', $scan['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page Number'); ?></dt>
		<dd>
			<?php echo h($scan['Scan']['page_number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Scan'), array('action' => 'edit', $scan['Scan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Scan'), array('action' => 'delete', $scan['Scan']['id']), null, __('Are you sure you want to delete # %s?', $scan['Scan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Scans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
