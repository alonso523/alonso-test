<div class="words view">
<h2><?php  echo __('Word'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($word['Word']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Word'); ?></dt>
		<dd>
			<?php echo h($word['Word']['word']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meaning'); ?></dt>
		<dd>
			<?php echo h($word['Word']['meaning']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Word'), array('action' => 'edit', $word['Word']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Word'), array('action' => 'delete', $word['Word']['id']), null, __('Are you sure you want to delete # %s?', $word['Word']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Words'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Word'), array('action' => 'add')); ?> </li>
	</ul>
</div>
