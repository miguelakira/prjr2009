<div class="noticias index">
<h3><?php __('Notícias');?></h3>
<table cellpadding="0" cellspacing="0">
<fieldset>
<?php
$i = 0;
foreach ($noticias as $noticia):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>

	<dl<?php echo $class;?>>
		<span class="noticia_titulo">
			<dd>
				<strong><?php if ($noticia['Noticia']['ativo'] == 1)
			        echo $noticia['Noticia']['titulo']; ?> 
				</strong>
        	</dd>
		</span>
		<span class='noticia_texto'>
			<dd><?php if ($noticia['Noticia']['ativo'] == 1) 
			        echo $noticia['Noticia']['texto']; ?>         
			</dd>
		</span>
        <span class="noticia_data">
        	<dd>
        		<?php if ($noticia['Noticia']['ativo'] == 1) 
                     echo $time->format('d/m/Y',$noticia['Noticia']['created']); ?>
        	</dd>
		</span>
		<span class="noticia_arquivo">
			<dd>
				<?php if ( $noticia['Noticia']['download_file_name'] && $noticia['Noticia']['ativo'] == 1 ):?>
					<p class="arquivo">Download: <a href="<?php echo $html->url('/upload/noticias/'.$noticia['Noticia']['download_file_name'],true);?>"><?php echo $noticia['Noticia']['download_file_name']?></a></p>
			</dd><?php endif; ?>
		</span>
	</dl>
<?php endforeach; ?>
</table>
</div>
</fieldset>

<div class="paging">
	<span class="prev"><?php echo $paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?></span>
	<span class="numbers"><?php echo $paginator->numbers();?></span>
	<span class="next"><?php echo $paginator->next(__('proximo', true).' >>', array(), null, array('class'=>'disabled'));?></span>
</div>

<div class="actions">
    <ul>
        <span class="ultimas"><li><?php echo $html->link(__('Ver 5 últimas', true), array('action'=>'frontendView')); ?></span> </li>
    </ul>
</div>
