<h3><?php echo $noticia['Noticia']['titulo'] ?> </h3>
<fieldset>
<span class="noticia_texto"><?php echo $noticia['Noticia']['texto'] ?></span>

<?php if ( $noticia['Noticia']['ativo'] == 1 && $noticia['Noticia']['download_file_name'] ):?>
	<p class="arquivo">Download: <a href="<?php echo $html->url('/upload/noticias/'.$noticia['Noticia']['download_file_name'],true);?>"><?php echo $noticia['Noticia']['download_file_name']?></a></p>
<?php endif; ?>

<span class="voltar"><?php echo $html->link(__('Voltar', true), array('action'=>'frontendView')); ?></span>
</fieldset>
