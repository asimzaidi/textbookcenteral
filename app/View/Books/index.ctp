<div class="books index">
	<h2><?php echo __('Books'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('book_title'); ?></th>
			<th><?php echo $this->Paginator->sort('book_authur'); ?></th>
			<th><?php echo $this->Paginator->sort('book_language'); ?></th>
			<th><?php echo $this->Paginator->sort('book_isbn'); ?></th>
			<th><?php echo $this->Paginator->sort('book_revision'); ?></th>
			<th><?php echo $this->Paginator->sort('book_published_date'); ?></th>
			<th><?php echo $this->Paginator->sort('book_publisher'); ?></th>
			<th><?php echo $this->Paginator->sort('book_summary'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($books as $book): ?>
	<tr>
		<td><?php echo h($book['Book']['id']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['book_title']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['book_authur']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['book_language']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['book_isbn']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['book_revision']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['book_published_date']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['book_publisher']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['book_summary']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $book['Book']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $book['Book']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Scans'), array('controller' => 'scans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scan'), array('controller' => 'scans', 'action' => 'add')); ?> </li>
	</ul>
</div>
