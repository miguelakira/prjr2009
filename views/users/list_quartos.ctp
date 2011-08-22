<div class="users index">
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
	<th><?php echo $paginator->sort('rg');?></th>
	<th><?php echo $paginator->sort('cpf');?></th>
	<th><?php echo $paginator->sort('quarto'); ?></th>
</tr>
<?php
$i = 0;
foreach ($users as $user):
	$class = null;
	if ($i++ % 2 == 0 ) {
		$class = ' class="altrow"';
	}
?>
    
	<tr<?php echo $class;?>>
		<td>
			<?php echo $user['User']['name']; ?>
		</td>
		<td>
			<?php echo $user['User']['rg']; ?>
		</td>
		<td>
			<?php echo $user['User']['cpf']; ?>
		</td>

        <td> <?php if ($user['User']['hotel']) foreach($user['Quarto'] as $quarto):?>
			        <?php echo $quarto['id'];?>                 
			        <?php if (!$quarto['id']) echo "Nao selecionou quarto ainda"; ?>
                <?php endforeach; ?>



             <?php if (!$user['User']['hotel']) echo "Inscrição sem hotel"; ?>            
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
