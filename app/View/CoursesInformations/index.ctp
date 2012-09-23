<div class="coursesInformations index">
	<h2><?php echo __('Courses Informations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th><?php echo $this->Paginator->sort('information_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($coursesInformations as $coursesInformation): ?>
	<tr>
		<td><?php echo h($coursesInformation['CoursesInformation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($coursesInformation['Course']['name'], array('controller' => 'courses', 'action' => 'view', $coursesInformation['Course']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($coursesInformation['Information']['name'], array('controller' => 'information', 'action' => 'view', $coursesInformation['Information']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coursesInformation['CoursesInformation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coursesInformation['CoursesInformation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coursesInformation['CoursesInformation']['id']), null, __('Are you sure you want to delete # %s?', $coursesInformation['CoursesInformation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Courses Information'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Information'), array('controller' => 'information', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Information'), array('controller' => 'information', 'action' => 'add')); ?> </li>
	</ul>
</div>
