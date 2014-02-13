<div class="userItemAuthorityLinks form">
<?php echo $this->Form->create('UserItemAuthorityLink'); ?>
	<fieldset>
		<legend><?php echo __('Edit User Item Authority Link'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_item_id');
		echo $this->Form->input('user_authority');
		echo $this->Form->input('edit_lower_hierarchy');
		echo $this->Form->input('show_lower_hierarchy');
		echo $this->Form->input('created_user');
		echo $this->Form->input('created_user_name');
		echo $this->Form->input('modified_user');
		echo $this->Form->input('modified_user_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserItemAuthorityLink.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UserItemAuthorityLink.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Item Authority Links'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Items'), array('controller' => 'user_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item'), array('controller' => 'user_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
