<?php 
echo $javascript->link('tiny_mce/tiny_mce.js'); 
echo $javascript->codeblock('   
tinyMCE.init({
    theme:"simple",
    mode: "textareas"
})
');?>

<div class="noticias form">
<?php echo $form->create('Noticia');?>
	<fieldset>
 		<legend><?php __('Editar Notícia');?></legend>

<div class="actions">
	<span class="botoes_edit">
	<ul>
		<span id="delete">
			<li><?php echo $html->link(__('Deletar', true), array('action'=>'delete', $form->value('Noticia.id')), null, sprintf(__('Voce tem certeza que deseja deletar essa noticia? # %s?', true), $form->value('Noticia.id'))); ?></li>
		</span>
		<span id="voltar"><li>
			<?php echo $html->link(__('Voltar', true), array('action'=>'index'));?></li>
		</span>
	</ul>
	</span>
</div>

	<?php echo $form->input('id');?>
	<span id="titulo_edit">
		<?php echo $form->input('titulo');?>
	</span>
   	<span id="texto_edit">
   		<?php  echo $form->input('texto', array('label'=>'', 'rows'=>'25', 'cols'=>'80'));?>
	</span>
	<span id="checkbox_edit">
		<?php  echo $form->input('ativo');?>
	</span>
	<span id="arquivo">
				<?php echo $form->input('Noticia.download',array('type'=>'file','label'=>'Arquivo'));?>
	</span>
	</fieldset>
<span id = "enviar_edit"><?php echo $form->end('Enviar');?></span>
</div>


