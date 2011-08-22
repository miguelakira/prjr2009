<div class="paginas index">
<h2><?php __('Páginas');?></h2>

<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Nova Página', true), array('action'=>'add')); ?></li>
        <li><?php echo $html->link(__('Listar Categorias', true), array('controller'=>'categorias', 'action'=>'index')); ?></li>
        <li><?php echo $html->link(__('Nova Categoria', true), array('controller'=>'categorias', 'action'=>'add')); ?></li>
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
	<th><?php echo $paginator->sort('url');?></th>
    <th><?php echo $paginator->sort('index');?></th>	
    <th><?php echo $paginator->sort('categoria');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('ativo');?></th>

	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($paginas as $pagina):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $pagina['Pagina']['id']; ?>
		</td>
		<td>
			<?php echo $pagina['Pagina']['titulo']; ?>
		</td>
		<td>
			<?php echo $pagina['Pagina']['url']; ?>
		</td>
		<td>
			<?php echo $pagina['Pagina']['index']; ?>
		</td>
		<td>
			<?php echo $pagina['Categoria']['titulo']; ?>
		</td>
		<td>
			<?php echo $pagina['Pagina']['created']; ?>
		</td>
		<td>
			<?php echo $pagina['Pagina']['ativo']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Ver', true), array('action'=>'view', $pagina['Pagina']['id'])); ?>
			<?php echo $html->link(__('Editar', true), array('action'=>'edit', $pagina['Pagina']['id'])); ?>
			<?php echo $html->link(__('Deletar', true), array('action'=>'delete', $pagina['Pagina']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pagina['Pagina']['id'])); ?>
			<?php echo $html->link(__('MoveUp', true), array('action'=>'moveUp', $pagina['Pagina']['id'])); ?>
			<?php echo $html->link(__('MoveDown', true), array('action'=>'moveDown', $pagina['Pagina']['id'])); ?>
			
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
