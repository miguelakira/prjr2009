<?php echo $html->docType("xhtml-strict");?>
<html>
<head>

    <title>Paraná Junior 2009</title>
        <?php echo $html->charset('utf-8'); ?>
        <?php echo $html->css('admin'); ?>
		<?php echo $html->css('util'); ?>
		<?php echo $html->css('noticias'); ?>
		<?php echo $html->css('paginas'); ?>
		<?php echo $html->css('inscricoes'); ?>
		<?php echo $html->css('usuarios'); ?>

</head>

<body>
<?php // faz com que mostre as mensagens do setFlash...precisa ajustar o css
    if ($session->check('Message.flash')) {
      $session->flash();
    }
?>
<div id="pagina">
	<div id="header">
		<span id="titulo">
        <h1 id="header">Paraná Júnior 2009 - Curitiba</h1>
		</span>
		<h3><?php echo $html->link("Sair", array('controller'=>'users', 'action' => 'logout')); ?></h3>
	</div>

    <div id="menu"> 
        <ul>

            <li><?php echo $html->link("Home", array('controller'=>'pages', 'action' => 'index')); ?></li>
            <li><?php echo $html->link("Notícias", array('controller'=>'noticias', 'action' => 'index')); ?></li>
            <li><?php echo $html->link("Páginas", array('controller'=>'paginas', 'action' => 'index')); ?></li>
			<li><?php echo $html->link("Categorias", array('controller'=>'categorias', 'action' => 'index')); ?></li>
			<li><?php echo $html->link("Usuários", array('controller'=>'users', 'action' => 'index')); ?></li>
			<li><?php echo $html->link("Inscrições", array( 'controller' => 'users', 'action'=>'indexInscricoes' )); ?></li>
			<li><?php echo $html->link("Cultural", array( 'controller' => 'users', 'action'=>'indexCulturais' )); ?></li>
			<li><?php echo $html->link("Programação do Usuário", array( 'controller' => 'users', 'action'=>'listCulturais' )); ?></li>
			<li><?php echo $html->link("Quartos", array( 'controller' => 'users', 'action'=>'listQuartos' )); ?></li>
		</ul>
    </div>

    <div id="conteudo">

		<?php echo $content_for_layout?> 
    </div>
    <div class='clear_both'></div>
</body>

</html>
