<?php 
echo $javascript->link('tiny_mce/tiny_mce.js'); 
echo $javascript->codeblock('   
tinyMCE.init({
    theme:"simple",
    mode: "textareas"
})
');?>

<div class="culturais form">
<?php echo $form->create('Cultural',array('url'=>'editCultural'))?>

	<fieldset>
 		<legend><?php __('Edit Cultural');?></legend>

<div class="actions">
	<span class="botoes_edit">
	<ul>
		<li><?php echo $html->link(__('Voltar', true), array('action'=>'indexCulturais'));?></li>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Cultural.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Cultural.id'))); ?></li>
	</ul>
    </span>
	</div>

    <?php echo $form->input('id');?>
	    <span id="titulo_edit"><?php echo $form->input('titulo');?></span>
       	<span id="descricao_edit"><?php  echo $form->input('descricao', array('label'=>'', 'rows'=>'25', 'cols'=>'80'));?></span>
	    <span id="checkbox_edit"><?php  echo $form->input('tipo');?></span>
	</fieldset>
<span id="enviar_edit"><?php echo $form->end('Enviar');?></span>
</div>

</div>
