<div class="metaGroups form">
<?php echo $this->Form->create('MetaGroup'); ?>
	<fieldset>
		<legend><?php echo __('Edit Meta Group'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('group_key');
		echo $this->Form->input('group_description');
		echo $this->Form->input('group_created');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MetaGroup.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('MetaGroup.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Meta Groups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Metas'), array('controller' => 'metas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meta'), array('controller' => 'metas', 'action' => 'add')); ?> </li>
	</ul>
</div>
