<ul class='pai'>
<li class= 'ultimo'><?php echo $html->link('Paraná Júnior','/noticias/frontendView')?>
            <ul class='filho'>

            <!-- as variáveis $user, $categorias e $paginas vêm todas do app_controller.php -->
            <li><?php if ($user['User']['name']=='admin') echo $html->link("Administrar", array('controller'=>'users', 'action' => 'indexInscricoes'));?> </li>
			<li><?php if ($user) echo  $html->link('Cultural', array('controller'=>'users', 'action' => 'cultural'));?> </li>
			<li><?php if ($user) echo  $html->link('Quartos', array('controller'=>'users', 'action' => 'quartos'));?> </li>
          
            <li><?php echo $html->link('Notícias', array('controller'=>'noticias', 'action'=>'frontendViewAll'));?></li>
			<li><?php if(!$user) //echo $html->link('Inscrições', array('controller'=>'users', 'action'=>'add'));?></li>
            <!-- Loop simples que exibe uma categoria e suas respectivas páginas no menu -->
            <?php foreach($categorias as $categoria):?>
            <li><?php echo $categoria['Categoria']['titulo'] ?></li>            
                    <?php foreach($paginas as $pagina):?>
		               <li><?php if ($pagina['Pagina']['categoria_id'] == $categoria['Categoria']['id'])
		                        echo $html->link($pagina['Pagina']['titulo'], '/paginas/frontend/'.$pagina['Pagina']['url'],null,false,false) ?></li>
	                <?php endforeach;?>
                <?php endforeach;?>
          <li><?php echo $html->link('Organizadores', array('controller'=>'pages', 'action'=>'organizadores')); ?></li>
		   <li><?php echo $html->link('Apoiadores', array('controller'=>'pages', 'action'=>'apoiadores')); ?></li>
		    </ul>
    </li>

</ul>
