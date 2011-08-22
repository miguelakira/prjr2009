<div class="paginas view">
<h2><?php  __('Categoria');?></h2>
<div id="paginas_conteudo">
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $categoria['Categoria']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $categoria['Categoria']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Index'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $categoria['Categoria']['index']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $categoria['Categoria']['ativo']; ?>
			&nbsp;
		</dd>		
		
		
	</dl>
</div>
</div>
<div class="actions">
	<div id="paginas_li">
	<ul>
		<li><?php echo $html->link(__('Edit Categoria', true), array('action'=>'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Categoria', true), array('action'=>'delete', $categoria['Categoria']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Categorias', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Categoria', true), array('action'=>'add')); ?> </li>
	</ul>
    </div>
</div>
