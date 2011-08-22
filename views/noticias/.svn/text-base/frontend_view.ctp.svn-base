<div class="noticias index">
<h3><?php __('Notícias');?></h3>
<table cellpadding="0" cellspacing="0">
<?php
$i = 0;
foreach ($noticias as $noticia):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<dl<?php echo $class;?>>
		<dd><?php if ($noticia['Noticia']['ativo'] == 1)
		        echo $html->link($noticia['Noticia']['titulo'], '/noticias/frontend/'.$noticia['Noticia']['url'],null,false,false) ?></li>

		</dd>
		</dd>
		<span id='noticia_data'><dd><?php if ($noticia['Noticia']['ativo'] == 1)
			    echo $time->format('d/m/Y',$noticia['Noticia']['created']); ?>
		</dd></span>

	</dl>
<?php endforeach; ?>
</table>
</div>

<div class="actions">
    <ul>        
        <span class='ver_todas'><li><?php echo $html->link(__('Ver Todas', true), array('action'=>'frontendViewAll')); ?> </li>
    </ul>
</div>
