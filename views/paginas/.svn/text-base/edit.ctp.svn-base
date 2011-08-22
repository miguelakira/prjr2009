<?php 
echo $javascript->link('tiny_mce/tiny_mce.js'); 
echo $javascript->codeblock('   
tinyMCE.init({
    theme:"simple",
    mode: "textareas"
})
');?>

<div class="paginas form">
<?php echo $form->create('Pagina');?>
	<fieldset>
 		<legend><?php __('Edit Pagina');?></legend>

<div class="actions">
	<span class="botoes_edit">
	<ul>
		<li><?php echo $html->link(__('Voltar', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Pagina.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Pagina.id'))); ?></li>
	</ul>
    </span>
	</div>

    <?php echo $form->input('id');?>
	    <span id="titulo_edit"><?php echo $form->input('titulo');?></span>
       	<span id="texto_edit"><?php  echo $form->input('texto', array('label'=>'', 'rows'=>'25', 'cols'=>'80'));?></span>
	    <span id="checkbox_edit"><?php  echo $form->input('ativo');?></span>
	</fieldset>
<span id="enviar_edit"><?php echo $form->end('Enviar');?></span>
</div>

</div>
