<div class="pageLayouts form">
<?php echo $this->Form->create('PageLayout'); ?>
	<fieldset>
		<legend><?php echo __('Add Page Layout'); ?></legend>
	<?php
		echo $this->Form->input('scope');
		echo $this->Form->input('type');
		echo $this->Form->input('lang');
		echo $this->Form->input('space_type');
		echo $this->Form->input('page_id');
		echo $this->Form->input('is_display_header');
		echo $this->Form->input('is_display_left');
		echo $this->Form->input('is_display_right');
		echo $this->Form->input('is_display_footer');
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

		<li><?php echo $this->Html->link(__('List Page Layouts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
