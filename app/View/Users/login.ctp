<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('user_name');
        echo $this->Form->input('user_password', array('type' => 'password'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>