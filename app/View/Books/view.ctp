<div class="books view">
<h2><?php  echo __('Book'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Title'); ?></dt>
		<dd>
			<?php echo h($book['Book']['book_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Authur'); ?></dt>
		<dd>
			<?php echo h($book['Book']['book_authur']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Language'); ?></dt>
		<dd>
			<?php echo h($book['Book']['book_language']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Isbn'); ?></dt>
		<dd>
			<?php echo h($book['Book']['book_isbn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Revision'); ?></dt>
		<dd>
			<?php echo h($book['Book']['book_revision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Published Date'); ?></dt>
		<dd>
			<?php echo h($book['Book']['book_published_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Publisher'); ?></dt>
		<dd>
			<?php echo h($book['Book']['book_publisher']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Summary'); ?></dt>
		<dd>
			<?php echo h($book['Book']['book_summary']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scans'), array('controller' => 'scans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scan'), array('controller' => 'scans', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Scans'); ?></h3>
	<?php if (!empty($book['Scan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Page Number'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($book['Scan'] as $scan): ?>
		<tr>
			<td><?php echo $scan['id']; ?></td>
			<td><?php echo $scan['book_id']; ?></td>
			<td><?php echo $scan['page_number']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'scans', 'action' => 'view', $scan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'scans', 'action' => 'edit', $scan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'scans', 'action' => 'delete', $scan['id']), null, __('Are you sure you want to delete # %s?', $scan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Scan'), array('controller' => 'scans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
