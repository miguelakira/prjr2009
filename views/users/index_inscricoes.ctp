<div class="users index">
	<span id="legenda_camisetas">
			<h3>Legenda camisetas</h3>
			<p>1 => Babylook P,         2 => Babylook M,        3 => Babylook G</p>
			<p>4 => Camiseta P,         5 => Camiseta M,        6 => Camiseta G</p>
	</span>
<h2><?php __('Usuários');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('email');?></th>
    <th><?php echo $paginator->sort('active');?></th>
	<th><?php echo $paginator->sort('telefone');?></th>		
	<th><?php echo $paginator->sort('federacao');?></th>
	<th><?php echo $paginator->sort('sexo'); ?></th>
	<th><?php echo $paginator->sort('ies');?></th>
	<th><?php echo $paginator->sort('localizacao');?></th>	
	<th><?php echo $paginator->sort('camiseta'); ?></th>
	<th><?php echo $paginator->sort('hotel'); ?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($users as $user):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $user['User']['name']; ?>
		</td>
		<td>
			<?php echo $user['User']['email']; ?>
		</td>
		<td>
			<?php echo $user['User']['active'] ? 'Sim' : 'Não' ; ?>
		</td>
		<td>
			<?php echo $user['User']['telefone']; ?>
		</td>	
		<td>
			<?php echo $user['User']['federacao']==0 ? 'Sim' : 'Não' ; ?>
		</td>
		<td>
			<?php echo $user['User']['sexo']==0 ? 'Masculino': 'Feminino' ; ?>
		</td>
		<td>
			<?php echo $user['User']['ies']; ?>
		</td>
		<td>
				<?php echo $form->input('User.localizacao',array(
					'options'=>array('0'=>'Parana','1'=>'Sul','2'=>'Outros'),
					'type'=>'select',
					'label'=>false,
					'div'=>false,
					'empty'=>true,
					'id'=>'localizacao_'.$user['User']['id'],
					'class'=>'select_localizacao',
					'selected'=>$user['User']['localizacao']));
				?>
		<td>
			<?php echo $user['User']['camiseta']; ?>
		</td>
		<td>
			<?php echo $user['User']['hotel'] ? 'Sim' : 'Não' ; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $user['User']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>