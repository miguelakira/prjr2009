<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Edit User');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('username', array('label'=>'Login'));
		echo $form->input('password',array('label'=>'Senha'));
		echo $form->input('name',array('label'=>'Nome'));
		echo $form->input('email');
		echo $form->input('sexo', array('type'=>'select', 'options' => array( '0' => 'Masculino','1' => 'Feminino')));
		echo $form->input('rg',array('label'=>'RG'));
		echo $form->input('cpf',array('label'=>'CPF'));
		echo $form->input('telefone');
		echo $form->input('celular');
		echo $form->input('data_nasc',array('label'=>'Data de Nascimento'));
		echo $form->input('ies',array('label'=>'Instituição'));
		echo $form->input('active',array('label'=>'Ativo?'));
		echo $form->input('hotel',array('label'=>'Hospedagem?'));
		echo $form->input('is_cultural',array('label'=>'Programação Cultural?'))    ;
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('User.id'))); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Groups', true), array('controller'=> 'groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Group', true), array('controller'=> 'groups', 'action'=>'add')); ?> </li>
	</ul>
</div>
