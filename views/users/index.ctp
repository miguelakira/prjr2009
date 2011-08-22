<div class="users index">
<h2><?php __('Usuários');?></h2>

<div class="users form">
<?php echo $form->create('User',array('action'=>'search'));?>
        <fieldset>
                <h2><?php __('Pesquisar Usuário');?></h2>
        <span id="user_names">
             <span id="user_nome"><?php   echo $form->input('Search.name',array('label'=>'Nome'));?></span>
             <span id="user_username"><?php  echo $form->input('Search.username',array('label'=>'Login'));?></span>
        </span>
		<span id="üser_checks">
			 <span id="user_ativo"><?php   echo $form->input('Search.active',array('empty'=>__('Ambos',true),'options'=>array(0=>__('Inativos',true),1=>__('Ativos',true))));?></span>
             <span id="user_submit"><?php   echo $form->submit('Buscar');?></span>
        </span>
		</fieldset>
<?php echo $form->end();?>
</div>

<?php $paginator->options(array('url' => $this->passedArgs)); ?>

<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>

<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('username');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('email');?></th>
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
			<?php echo $user['User']['username']; ?>
		</td>
		<td>
			<?php echo $user['User']['name']; ?>
		</td>
		<td>
			<?php echo $user['User']['email']; ?>
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
