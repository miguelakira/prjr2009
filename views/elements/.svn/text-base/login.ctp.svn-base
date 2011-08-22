<div class="login">
       <div class = 'l1'> 
          <?php if ($user) echo "Logado como "?>
          <?php if ($user) echo $user['User']['username']; ?>
          <?php if ($user) echo $html->link("Sair", array('controller'=>'users', 'action' => 'logout'));?>
          <?php if ($user['User']['name']=='admin') echo $html->link("Administrar", array('controller'=>'paginas', 'action' => 'index'));?>
        </div>
          <?php if ($session->check('Message.auth')) $session->flash('auth'); ?>
          <?php if (!$user) echo $form->create('User', array('action' => 'login')); ?>
          <?php if (!$user) echo $form->input('username', array('label'=>'Nome', 'div'=>false, 'class'=>'input')); ?>
          <?php if (!$user) echo $form->input('password',array('type'=>'password', 'label'=>'Senha', 'div'=>false, 'class'=>'input')); ?>
          <?php if (!$user) echo $form->submit('ok',array('div'=>false, 'class' => 'submit')); ?>
          <?php if (!$user) echo $form->end();?> 
</div> 
