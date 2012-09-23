<div class="words form">
<?php echo $this->Form->create('Word'); ?>
	<fieldset>
		<legend><?php echo __('Edit Word'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('word');
		echo $this->Form->input('meaning');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Word.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Word.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Words'), array('action' => 'index')); ?></li>
	</ul>
</div>