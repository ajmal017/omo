<div class="feedbacks index">
	<h2><?php echo __('Feedbacks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('application_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('feedback_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('feedback_user_email'); ?></th>
			<th><?php echo $this->Paginator->sort('feeback_user_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('feedback'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('submitted_at'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($feedbacks as $feedback): ?>
	<tr>
		<td><?php echo h($feedback['Feedback']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($feedback['Application']['id'], array('controller' => 'applications', 'action' => 'view', $feedback['Application']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($feedback['User']['username'], array('controller' => 'users', 'action' => 'view', $feedback['User']['id'])); ?>
		</td>
		<td><?php echo h($feedback['Feedback']['feedback_user_name']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['feedback_user_email']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['feeback_user_contact']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['feedback']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['status']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['submitted_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $feedback['Feedback']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $feedback['Feedback']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $feedback['Feedback']['id']), null, __('Are you sure you want to delete # %s?', $feedback['Feedback']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Feedback'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>