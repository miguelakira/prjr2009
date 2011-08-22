<div class="noticias index">
<h2><?php __('Notícias');?></h2>

<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Nova Noticia', true), array('action'=>'add')); ?></li>
	</ul>
</div>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Pagina %page% de %pages%, mostrando %current% dados de um total de %count%, começando em %start%, terminando em %end%', true)
));
?>
<p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('titulo');?></th>
	<th><?php echo $paginator->sort('ativo');?></th>
	<th><?php echo $paginator->sort('url');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($noticias as $noticia):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $noticia['Noticia']['titulo']; ?>
		</td>
		<td>
			<?php echo $noticia['Noticia']['ativo']; ?>
		</td>
		<td>
			<?php echo $noticia['Noticia']['url']; ?>
		</td>
		<td>
			<?php echo $noticia['Noticia']['created']; ?>
		</td>


		<td class="actions">
			<?php echo $html->link(__('Ver', true), array('action'=>'view', $noticia['Noticia']['id'])); ?>
			<?php echo $html->link(__('Editar', true), array('action'=>'edit', $noticia['Noticia']['id'])); ?>
			<?php echo $html->link(__('Deletar', true), array('action'=>'delete', $noticia['Noticia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $noticia['Noticia']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

</div>

<p>
<div class="paging">
	<span class="prev"><?php echo $paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?></span>
  	<?php echo $paginator->numbers();?>
	<span class="next"><?php echo $paginator->next(__('proximo', true).' >>', array(), null, array('class'=>'disabled'));?></span>
</div>
