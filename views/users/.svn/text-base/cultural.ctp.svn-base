<h3>Escolha da programa cultural</h3>

<?php $count = 0;
      if ($user_cultural['User']['is_cultural']): ?> 

            <p>Você escolheu a seguinte programação cultural: </p>            
            <?foreach($user_cultural['Cultural'] as $cultural):?>
                <?php echo '(' . $count . ')' . $cultural['titulo'] . "<br>" ; ?>
                <?php $count++; ?>
            <?php endforeach; ?>
    <?php endif; ?>

<?php echo $form->create('Cultural.user',array('url'=>'cultural'))?>

	<?php if(!$user_cultural['User']['is_cultural']): ?>
        <p>Atenção, escolha atentamente. Não será possível alterar sua escolha no futuro.</p>
        <?foreach($culturais as $id => $cursos):?>
		<?php 
			echo $form->input('Cultural.'.$id,array(
				'type'=>'select',
				'options'=> $cursos,
				'label'=>'')
			)
		?>
	<?php endforeach;?>
    <?php echo $form->end('Salvar'); ?>
    <?php endif;?>
	

