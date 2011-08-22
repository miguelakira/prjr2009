<div class="culturais index">
<h2><?php __('Cultural');?></h2>

<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Novo Cultural', true), array('action'=>'addCultural')); ?></li>
	</ul>
</div>
<br />
<p>	
<?php
echo $paginator->counter(array(
'format' => __('Pagina %page% de %pages%, mostrando %current% dados de um total de %count%, começando em %start%, terminando em %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('titulo');?></th>
	<th><?php echo $paginator->sort('tipo');?></th>
    <th><?php echo $paginator->sort('descricao');?></th>	
    <th><?php echo $paginator->sort('vagas');?></th>

	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($culturais as $cultural):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $cultural['Cultural']['id']; ?>
		</td>
		<td>
			<?php echo $cultural['Cultural']['titulo']; ?>
		</td>
		<td>
			<?php echo $cultural['Cultural']['tipo']; ?>
		</td>
		<td>
			<?php echo $cultural['Cultural']['descricao']; ?>
		</td>
		<td>
			<?php echo $cultural['Cultural']['vagas']; ?>
		</td>


		<td class="actions">
			<?php echo $html->link(__('Editar', true), array('action'=>'editCultural', $cultural['Cultural']['id'])); ?>
			<?php echo $html->link(__('Deletar', true), array('action'=>'deleteCultural', $cultural['Cultural']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cultural['Cultural']['id'])); ?>

		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<span id="prev"><?php echo $paginator->prev('<< '.__('Anterior', true), array(), null, array('class'=>'disabled'));?></span>
  	<span id="numbers"><?php echo $paginator->numbers();?></span>
	<span id="next"><?php echo $paginator->next(__('Proximo', true).' >>', array(), null, array('class'=>'disabled'));?></span>
</div>
