<div class="syains view">
<h2><?php echo __('Syain'); ?></h2>
	<dl>
		<dt><?php echo __('Syain Id'); ?></dt>
		<dd>
			<?php echo h($syain['Syain']['syain_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($syain['Syain']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($syain['Syain']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($syain['Syain']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Date'); ?></dt>
		<dd>
			<?php echo h($syain['Syain']['create_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create User'); ?></dt>
		<dd>
			<?php echo h($syain['Syain']['create_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($syain['Syain']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update User'); ?></dt>
		<dd>
			<?php echo h($syain['Syain']['update_user']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Syain'), array('action' => 'edit', $syain['Syain']['syain_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Syain'), array('action' => 'delete', $syain['Syain']['syain_id']), array('confirm' => __('Are you sure you want to delete # %s?', $syain['Syain']['syain_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Syains'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Syain'), array('action' => 'add')); ?> </li>
	</ul>
</div>
