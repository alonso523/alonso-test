<div class="courses view">
<h2><?php  echo __('Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo $this->Html->link($course['Area']['name'], array('controller' => 'areas', 'action' => 'view', $course['Area']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($course['Course']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assignments'), array('controller' => 'assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignment'), array('controller' => 'assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Information'), array('controller' => 'information', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Information'), array('controller' => 'information', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Assignments'); ?></h3>
	<?php if (!empty($course['Assignment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['Assignment'] as $assignment): ?>
		<tr>
			<td><?php echo $assignment['id']; ?></td>
			<td><?php echo $assignment['course_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'assignments', 'action' => 'view', $assignment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'assignments', 'action' => 'edit', $assignment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'assignments', 'action' => 'delete', $assignment['id']), null, __('Are you sure you want to delete # %s?', $assignment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Assignment'), array('controller' => 'assignments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Information'); ?></h3>
	<?php if (!empty($course['Information'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['Information'] as $information): ?>
		<tr>
			<td><?php echo $information['id']; ?></td>
			<td><?php echo $information['name']; ?></td>
			<td><?php echo $information['type']; ?></td>
			<td><?php echo $information['created']; ?></td>
			<td><?php echo $information['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'information', 'action' => 'view', $information['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'information', 'action' => 'edit', $information['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'information', 'action' => 'delete', $information['id']), null, __('Are you sure you want to delete # %s?', $information['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Information'), array('controller' => 'information', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related News'); ?></h3>
	<?php if (!empty($course['News'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['News'] as $news): ?>
		<tr>
			<td><?php echo $news['id']; ?></td>
			<td><?php echo $news['name']; ?></td>
			<td><?php echo $news['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'news', 'action' => 'view', $news['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'news', 'action' => 'edit', $news['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'news', 'action' => 'delete', $news['id']), null, __('Are you sure you want to delete # %s?', $news['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($course['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rol Id'); ?></th>
		<th><?php echo __('Cedula'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['rol_id']; ?></td>
			<td><?php echo $user['cedula']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['phone']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
