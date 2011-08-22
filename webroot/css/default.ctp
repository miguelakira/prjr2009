<?php $imgs = array('header_home1.png', 'header_home2.png', 'header_home3.png');?>

<?php echo $html->docType('xhtml-strict') ?>
<html>
<head>
    <title>
        <?php echo (isset($title_for_layout))? $title_for_layout . ' - ' : '' ?>Paraná Júnior 2009
    </title>
    <?php echo $html->charset('utf-8'); ?>
    <?php echo $html->css('header'); ?>
    <?php echo $html->css('menu'); ?>
    <?php echo $html->css('util'); ?>
   <?php echo $html->css('conteudo'); ?> 
    <?php echo $html->css('socio'); ?>
    <?php echo $html->css('edital'); ?>

</head>
<body>
    <div id='pagina'>
        <div id='header'>
            <h1 class='logo'>Paraná Júnior 2008</h1>
            <?php
                /* Estas são setadas em cada action de cada controller como um array
                    de imagens. */
                echo $html->image($imgs[0], array('alt'=>'Imagem do cabeçalho'))
            ?>
            <?php echo $html->image($imgs[1], array('alt'=>'Imagem do cabeçalho')) ?>
            <?php echo $html->image($imgs[2], array('alt'=>'Imagem do cabeçalho')) ?>
            <h2 class='slogan'><span>T</span>RANSFORMANDO O <span>V</span>ISIONÁRIO EM <span>R</span>EALIZADOR</h2>
            <div id='caixa_login'>
            <?php if($session->read('logado.prjr') == false && $session->read('logado.user') == false): ?>
                    <?php echo $form->create('Login',array('action'=>'logar')); ?>
                        <?php echo $form->input('Login.login', array('type'=>'text', 'div'=>false, 'label'=>array('class'=>'label l1'), 'class'=> 'input')) ?>
                        <?php echo $form->input('Login.senha', array('type'=>'password', 'div'=>false, 'label'=>array('class'=>'label'), 'class'=> 'input')) ?>
                    <?php echo $form->submit('ok', array('div'=>false, 'class' => 'submit')); ?>
                    <?php echo $form->end(); ?>
                <?php else: ?>
                    <?= ($session->read('logado.user') != false ) ? $html->link('perfil', array('controller'=>'inscricaos', 'action'=> 'perfil', $session->read('logado.user') ), array('class'=> 'label', 'style' => 'margin-left: 30px;')): '' ?>
                    <?php echo $html->link('deslogar', array('controller'=>'logins', 'action'=> 'deslogar'), array('class'=> 'label')) ?>
                <?php endIf ?>
            </div>
            <div class='borda_bottom'></div>
            <div class='borda_diagonal'></div>
            <div class='borda_bottom2'></div>
            <div class='borda_bola'></div>
            <p class='merchan'>*web design desenvolvido por juniordesign ufpr</p>
        </div>
        <div id='body'>
            <div id='menu'>
                <?php echo $menu->render($session->read('Menu.main'));?>
            </div>
            <div id='conteudo'>
                <?php echo $content_for_layout ?>
            </div>
            <div class='clear_both'></div>
        </div>
    </div>
</body>
</html>
