<div class="syains index">
	<h2><?php echo __('Syains'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('社員ID'); ?></th>
			<th><?php echo $this->Paginator->sort('氏名'); ?></th>
			<th><?php echo $this->Paginator->sort('性別'); ?></th>
			<th><?php echo $this->Paginator->sort('生年月日'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($syains as $syain): ?>
	<tr>
		<td><?php echo h($syain['Syain']['syain_id']); ?>&nbsp;</td>
		<td><?php echo h($syain['Syain']['name']); ?>&nbsp;</td>
		<td><?php echo h($syain['Syain']['gender']); ?>&nbsp;</td>
		<td><?php echo h($syain['Syain']['birthday']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $syain['Syain']['syain_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $syain['Syain']['syain_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $syain['Syain']['syain_id']), array('confirm' => __('Are you sure you want to delete # %s?', $syain['Syain']['syain_id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Syain'), array('action' => 'add')); ?></li>
	</ul>
</div>
