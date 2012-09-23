<div class="coursesNews form">
<?php echo $this->Form->create('CoursesNews'); ?>
	<fieldset>
		<legend><?php echo __('Edit Courses News'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('course_id');
		echo $this->Form->input('news_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CoursesNews.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CoursesNews.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Courses News'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
