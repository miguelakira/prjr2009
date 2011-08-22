<div class="paginas index">
<h2><?php __('Categorias');?></h2>

<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Nova Categoria', true), array('action'=>'add')); ?></li>
	</ul>
</div>
<br />
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('titulo');?></th>
	<th><?php echo $paginator->sort('index');?></th>
	<th><?php echo $paginator->sort('ativo');?></th>		
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($categorias as $categoria):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $categoria['Categoria']['id']; ?>
		</td>
		<td>
			<?php echo $categoria['Categoria']['titulo']; ?>
		</td>
		<td>
			<?php echo $categoria['Categoria']['index']; ?>
		</td>
		<td>
			<?php echo $categoria['Categoria']['ativo']; ?>
		</td>

		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $categoria['Categoria']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $categoria['Categoria']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $categoria['Categoria']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $categoria['Categoria']['id'])); ?>
			<?php echo $html->link(__('MoveUp', true), array('action'=>'moveUp', $categoria['Categoria']['id'])); ?>
			<?php echo $html->link(__('MoveDown', true), array('action'=>'moveDown', $categoria['Categoria']['id'])); ?>
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

