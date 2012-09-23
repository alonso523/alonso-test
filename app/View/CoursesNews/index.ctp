<div class="coursesNews index">
	<h2><?php echo __('Courses News'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th><?php echo $this->Paginator->sort('news_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($coursesNews as $coursesNews): ?>
	<tr>
		<td><?php echo h($coursesNews['CoursesNews']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($coursesNews['Course']['name'], array('controller' => 'courses', 'action' => 'view', $coursesNews['Course']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($coursesNews['News']['name'], array('controller' => 'news', 'action' => 'view', $coursesNews['News']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coursesNews['CoursesNews']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coursesNews['CoursesNews']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coursesNews['CoursesNews']['id']), null, __('Are you sure you want to delete # %s?', $coursesNews['CoursesNews']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Courses News'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
