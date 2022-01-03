<div class="syains form">
<?php echo $this->Form->create('Syain'); ?>
	<fieldset>
		<legend><?php echo __('Edit Syain'); ?></legend>
	<?php
		echo $this->Form->input('syain_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Syain.syain_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Syain.syain_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Syains'), array('action' => 'index')); ?></li>
	</ul>
</div>
