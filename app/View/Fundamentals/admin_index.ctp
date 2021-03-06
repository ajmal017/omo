<div class="fundamentals index">
	<h2><?php echo __('Fundamentals from Admin'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('instrument_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fundamental_meta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_value'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_date'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fundamentals as $fundamental): ?>
	<tr>
		<td><?php echo h($fundamental['Fundamental']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fundamental['Instrument']['name'], array('controller' => 'instruments', 'action' => 'view', $fundamental['Instrument']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fundamental['FundamentalMeta']['id'], array('controller' => 'fundamental_metas', 'action' => 'view', $fundamental['FundamentalMeta']['id'])); ?>
		</td>
		<td><?php echo h($fundamental['Fundamental']['meta_value']); ?>&nbsp;</td>
		<td><?php echo h($fundamental['Fundamental']['meta_date']); ?>&nbsp;</td>
		<td><?php echo h($fundamental['Fundamental']['created']); ?>&nbsp;</td>
		<td><?php echo h($fundamental['Fundamental']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fundamental['Fundamental']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fundamental['Fundamental']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fundamental['Fundamental']['id']), array(), __('Are you sure you want to delete # %s?', $fundamental['Fundamental']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fundamental'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fundamental Metas'), array('controller' => 'fundamental_metas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fundamental Meta'), array('controller' => 'fundamental_metas', 'action' => 'add')); ?> </li>
	</ul>
</div>
        <div id="UserInfoDiv"></div>
