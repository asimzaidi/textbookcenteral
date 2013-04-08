<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('school_name');
		echo $this->Form->input('graduation_year');
		echo $this->Form->input('user_name');
		echo $this->Form->input('user_password', array('type' => 'password'));
		echo $this->Form->input('user_date_registered');
		echo $this->Form->input('record_update_date');
		echo $this->Form->input('user_designation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
    <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
