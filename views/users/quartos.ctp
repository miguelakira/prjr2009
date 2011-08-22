<p>Nesta página você pode escolher qual o quarto em que estará hospedado.</p>

<p>O números dos quarto são ilustrativos. Portanto combine com seus amigos em qual quarto desejará ficar.</p>

<?php if (count($inscricao['Quarto'])):?>

<h3>Atualmente vc está no quarto: <?php echo $inscricao['Quarto'][0]['id']?></h3>

<?php endif; ?>

<?php if (!count($inscricao['Quarto'])) echo $form->create('Quarto.user',array('url'=>'quartos'))?>
	
<?php if (!count($inscricao['Quarto'])) echo $form->input('quarto',array('type'=>'select','options'=>$quartos))?>

<?php if (!count($inscricao['Quarto'])) echo $form->end('Salva')?>

