<?php $imgs = array('header_home1.png', 'header_home2.png', 'header_home3.png');?>

<?php echo $html->docType('xhtml-strict') ?>
<html>
<head>
    <title>
        Paraná Júnior 2009
    </title>
    <?php echo $html->charset('utf-8'); ?>
    <?php echo $html->css('header'); ?>
    <?php echo $html->css('menu'); ?>
    <?php echo $html->css('util'); ?>
    <?php echo $html->css('conteudo'); ?>  
	<?php echo $html->css('inscricoes'); ?> 
	<?php echo $html->css('organizadores'); ?> 
</head>
<body>
    <div id='pagina'>
        <div id='header'>
	    <?php echo $html->link("<h1 class='logo'>Paraná Júnior 2009</h1>","/",null,false,false); ?>
            <?php
                /* Estas são setadas em cada action de cada controller como um array
                    de imagens. */
                echo $html->image($imgs[0], array('alt'=>'Imagem do cabeçalho'))
            ?>
            <?php echo $html->image($imgs[1], array('alt'=>'Imagem do cabeçalho')) ?>
            <?php echo $html->image($imgs[2], array('alt'=>'Imagem do cabeçalho')) ?>
            <h2 class='slogan'><span>O</span> <span>U</span>NIVERSITÁRIO POTENCIALIZANDO O <span>S</span>UCESSO <span>E</span>MPRESARIAL</h2>
            <div id='caixa_login'>
				<?php echo $this->element('login');?>
            </div>
            <div class='borda_bottom'></div>
            <div class='borda_diagonal'></div>
            <div class='borda_bottom2'></div>
            <div class='borda_bola'></div>
            <p class='merchan'>*web design desenvolvido por juniordesign ufpr e aplicado por cop-jr uel</p>
        </div>
        <div id='body'>
            <div id='menu'>
                <?php echo $this->element("menu") ?>
            </div>
            <div id='conteudo'>
                <?php echo $content_for_layout ?>
            </div>
            <div class='clear_both'></div>
        </div>
    </div>
</body>
</html>
