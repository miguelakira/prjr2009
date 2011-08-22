<div class="paginas view">
<h2><?php  __('Página');?></h2>
<br />
<div id="paginas_conteudo">
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagina['Pagina']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Texto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagina['Pagina']['texto']; ?>
			&nbsp;
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagina['Pagina']['created']; ?>
			&nbsp;
		</dd>
		</dd>
	</dl>
</div>
</div>
<div class="actions">
	<div id="paginas_li">
	<ul>
		<li><?php echo $html->link(__('Voltar', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('Editar Pagina', true), array('action'=>'edit', $pagina['Pagina']['id'])); ?> </li>
		<li><?php echo $html->link(__('Deletar Pagina', true), array('action'=>'delete', $pagina['Pagina']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pagina['Pagina']['id'])); ?> </li>
		<li><?php echo $html->link(__('Listar Paginas', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('Nova Pagina', true), array('action'=>'add')); ?> </li>
	</ul>
	</div>
</div>
