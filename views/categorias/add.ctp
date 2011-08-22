<div class="paginas form">
<?php echo $form->create('Categoria');?>
	<fieldset>
 		<legend><?php __('Adicionar Categoria');?></legend>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Voltar', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('Listar Páginas', true), array('controller'=>'paginas', 'action'=>'index'));?></li>
	</ul>
</div>

	<span id="titulo_pagina"><?php echo $form->input('titulo');?></span>
	<span id="ativo_pagina"><?php echo $form->input('ativo'); ?></span>
	</fieldset>
<span id="enviar_pagina"><?php echo $form->end('Submit');?></span>
</div>

