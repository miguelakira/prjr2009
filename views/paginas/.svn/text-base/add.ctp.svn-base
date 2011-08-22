<?php 

echo $javascript->link('tiny_mce/tiny_mce.js'); 
echo $javascript->codeblock('   
tinyMCE.init({
    theme:"simple",
    mode: "textareas"
})
');?>


<?php
if ($session->check('Message.flash')) {
  $session->flash();
}
?>

<div class="paginas form">
<?php echo $form->create('Pagina');?>
	<fieldset>
 		<legend><?php __('Adicionar Pagina');?></legend>
<div class="actions">

	<ul>
		<span id="voltar"><li><?php echo $html->link(__('Voltar', true), array('action'=>'index'));?></li></span>
		<span id="listar categorias"><li><?php echo $html->link(__('Listar Categorias', true), array('controller'=>'categorias', 'action'=>'index'));?></li></span>
	</ul>

</div>

<?php $options = array(0 => "Não", 1 => "Sim"); ?>

<table cellpadding="0" cellspacing="0">

	<span id="titulo_pagina"><?php echo $form->input('titulo'); ?></span> 
	<span id="texto_pagina"><?php echo $form->input('texto', array('label'=>'', 'rows'=>'25', 'cols'=>'80')); ?></span> 
    <span id="ativo_pagina"><?php echo $form->input('ativo', array('options'=> $options)); ?>
    <span id="categoria_pagina"><?php echo $form->input('categoria_id'); ?> 
	</fieldset>

<span id="enviar_pagina"><?php echo $form->end('Enviar');?></span> 
</div>
