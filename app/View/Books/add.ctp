<div class="books form">
<?php echo $this->Form->create('Book'); ?>
	<fieldset>
		<legend><?php echo __('Add Book'); ?></legend>
	<?php
		echo $this->Form->input('book_title');
		echo $this->Form->input('book_authur');
		echo $this->Form->input('book_language');
		echo $this->Form->input('book_isbn');
		echo $this->Form->input('book_revision');
		echo $this->Form->input('book_published_date');
		echo $this->Form->input('book_publisher');
		echo $this->Form->input('book_summary');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Scans'), array('controller' => 'scans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scan'), array('controller' => 'scans', 'action' => 'add')); ?> </li>
	</ul>
</div>
