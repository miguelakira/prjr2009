<?php 
echo $javascript->link('tiny_mce/tiny_mce.js'); 
echo $javascript->codeblock('   
tinyMCE.init({
    theme:"simple",
    mode: "textareas"
})
');?>

<div class="noticias form">
<?php echo $form->create('Noticia',array('type' => 'file'));?>
<?php echo $form->hidden('id');?>
	
<div class="actions">
	<span class="botoes_edit">
	<ul>
		<li><?php echo $html->link(__('Voltar', true), array('action'=>'index'));?></li>
	</ul>
	</span>
</div>
	<fieldset>
 		<legend><?php __('Adicionar Notícia');?></legend>
			<span id="titulo_add">
				<?php echo $form->input('titulo');?>
			</span>
			<span id="texto_add">
				<?php echo $form->input('texto', array('label'=>'', 'rows'=>'25', 'cols'=>'80'));?>
			</span>
			<span id="checkbox_add">
				<?php echo $form->input('ativo');?>
			</span>
			<span id="noticia_arquivo">
				<?php echo $form->input('Noticia.download',array('type'=>'file','label'=>'Arquivo'));?>
			</span>
	</fieldset>
	<span id="enviar_add">
	<?php echo $form->end('Publicar');?>
	</span>
</div>

