<div class="coursesInformations view">
<h2><?php  echo __('Courses Information'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coursesInformation['CoursesInformation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coursesInformation['Course']['name'], array('controller' => 'courses', 'action' => 'view', $coursesInformation['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Information'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coursesInformation['Information']['name'], array('controller' => 'information', 'action' => 'view', $coursesInformation['Information']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Courses Information'), array('action' => 'edit', $coursesInformation['CoursesInformation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Courses Information'), array('action' => 'delete', $coursesInformation['CoursesInformation']['id']), null, __('Are you sure you want to delete # %s?', $coursesInformation['CoursesInformation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses Informations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courses Information'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Information'), array('controller' => 'information', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Information'), array('controller' => 'information', 'action' => 'add')); ?> </li>
	</ul>
</div>
