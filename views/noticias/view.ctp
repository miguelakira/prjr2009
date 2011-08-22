<div class="noticias view">
<h2><?php  __('Noticia');?></h2>
<div id="view_conteudo">
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $noticia['Noticia']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Texto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $noticia['Noticia']['texto']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $noticia['Noticia']['created']; ?>
			&nbsp;
		</dd>
		</dd>
	</dl>
</div>
</div>
<div class="actions">
	<ul id="noticias_view2">
		<li><?php echo $html->link(__('Voltar', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('Editar Noticia', true), array('action'=>'edit', $noticia['Noticia']['id'])); ?> </li>
		<li><?php echo $html->link(__('Deletar Noticia', true), array('action'=>'delete', $noticia['Noticia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $noticia['Noticia']['id'])); ?> </li>
		<li><?php echo $html->link(__('Nova Noticia', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
