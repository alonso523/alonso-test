<div class="coursesInformations form">
<?php echo $this->Form->create('CoursesInformation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Courses Information'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('course_id');
		echo $this->Form->input('information_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CoursesInformation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CoursesInformation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Courses Informations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Information'), array('controller' => 'information', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Information'), array('controller' => 'information', 'action' => 'add')); ?> </li>
	</ul>
</div>
