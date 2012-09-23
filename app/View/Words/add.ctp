<div class="words form">
<?php echo $this->Form->create('Word'); ?>
	<fieldset>
		<legend><?php echo __('Add Word'); ?></legend>
	<?php
		echo $this->Form->input('word');
		echo $this->Form->input('meaning');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Words'), array('action' => 'index')); ?></li>
	</ul>
</div>
