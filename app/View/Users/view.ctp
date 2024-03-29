<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['school_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Graduation Year'); ?></dt>
		<dd>
			<?php echo h($user['User']['graduation_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Date Registered'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_date_registered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record Update Date'); ?></dt>
		<dd>
			<?php echo h($user['User']['record_update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Designation'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_designation']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
