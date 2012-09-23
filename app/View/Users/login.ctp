<h2>Login</h2>
<?php
echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->end('Login');
?>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Registrarse'), array('controller'=> 'Users','action' => 'add')); ?></li>
	</ul>
</div>
