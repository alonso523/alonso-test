<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Añadir usuario'); ?></legend>
	<?php
		echo $this->Form->input('cedula');
		echo $this->Form->input('name', array('label' => 'Nombre'));
		echo $this->Form->input('rol_id');
		echo $this->Form->input('username', array('label' => 'Usuario', 'type' => 'email'));
		echo $this->Form->input('password', array('label' => 'Contraseña'));
		echo $this->Form->input('phone', array('label' => 'Teléfono'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrarse')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Iniciar sesión'), array('controller'=> 'Users','action' => 'login')); ?></li>
	</ul>
</div>
