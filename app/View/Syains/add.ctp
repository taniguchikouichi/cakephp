<div class="syains form">
<?php echo $this->Form->create('Syain'); ?>
	<fieldset>
		<legend><?php echo __('Add Syain'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('gender');
		echo $this->Form->input('birthday');
		echo $this->Form->input('create_date');
		echo $this->Form->input('create_user');
		echo $this->Form->input('update_date');
		echo $this->Form->input('update_user');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Syains'), array('action' => 'index')); ?></li>
	</ul>
</div>
