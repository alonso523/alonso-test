<div class="coursesNews view">
<h2><?php  echo __('Courses News'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coursesNews['CoursesNews']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coursesNews['Course']['name'], array('controller' => 'courses', 'action' => 'view', $coursesNews['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('News'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coursesNews['News']['name'], array('controller' => 'news', 'action' => 'view', $coursesNews['News']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Courses News'), array('action' => 'edit', $coursesNews['CoursesNews']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Courses News'), array('action' => 'delete', $coursesNews['CoursesNews']['id']), null, __('Are you sure you want to delete # %s?', $coursesNews['CoursesNews']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses News'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courses News'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
