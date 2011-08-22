<div class="users form">
<?php if (isset($confirm) && $confirm ): ?>
	<?php echo $form->create('User',array('url'=>'https://shopline.itau.com.br/shopline/shopline.asp')) ?>
	
	<script language="JavaScript">
	<!--
	function carregabrw()
	{
	window.open('', 'SHOPLINE', 'toolbar=yes,menubar=yes,resizable=yes,status=no,scrollbars=yes,width=675,height=485');
	}
	//-->
	</script>
	
<?php else: ?>
	<?php echo $form->create('User');?>
<?php endif;?>


<fieldset>
<?php if (isset($confirm) && $confirm): ?>
	<h3><?php __('Dados salvos.');?></h3>
	
	<?php
		echo "<input type='hidden' name='DC' value=$itauDC />";
	?>
	
<?php else: ?>
	<h3><?php __('Inscrição');?></h3>
	<h2>ATENÇÃO:<h2>
		<p>Lembre-se de gerar seu boleto no momento de sua inscrição e salvá-lo para uso posterior. Atente-se também para colocar seus dados corretamente, inscrições com dados incorretos serão excluídas e no caso de o pagamento já ter sido efetuado não haverá remuneração.</p>
<table class="tabela_precos">
                               <thead>
                                       <tr >
                                               <th
class="" rowspan="3">Cotas</th>
                                               <th
class="" colspan="4">Preços</th>
                                       </tr>
                                       <tr>
                                               <th
class="" colspan="2">FEDERADOS</th>
                                               <th
class="" colspan="2">NÃO FEDERADOS</th>
                                       </tr>
                                       <tr>
                                               <th
class="">Com Alojamento</th>
                                               <th
class="">Sem Alojamento</th>
                                               <th
class="">Com Alojamento</th>
                                               <th
class="">Sem Alojamento</th>
                                       </tr>
                               </thead>
                               <tbody>
                                       <tr>
                                               <td>Nova Cota</td>
                                               <td>133,00</td>
                                               <td>118,00</td>
                                               <td>148,00</td>
                                               <td>128,00</td>
                                       </tr>
					           </tbody>
                       </table>
               </td>
       </tr>
</table>
	<?php
	echo $form->input('name', array('label'=>'Nome'));
	echo $form->input('username', array('label'=>'Login'));
	echo $form->input('password', array('label'=> 'Senha'));
	echo $form->input('sexo', array('type'=>'select', 'options' => array( '0' => 'Masculino','1' => 'Feminino')));
	echo $form->input('rg', array('label'=>'RG'));
	echo $form->input('cpf', array('label'=>'CPF'));
	echo $form->input('telefone');
	echo $form->input('celular');
	echo $form->input('data_nasc', array('label' => 'Nascimento','dateFormat'=>'DMY','maxYear'=>1993,'minYear'=>1950));
	echo $form->input('email');
	echo $form->input('ies', array('label'=> 'Universidade'));
	echo $form->input('federacao', array('label'=>'Federacao', 'type'=>'select', 'options'=>array('0'=>'Federada', '1'=>'Não Federada')));
	echo $form->input('camiseta',array('type'=>'select','options'=>$camiseta,'empty'=>''));
	echo $form->input('localizacao',array('type'=>'select','options'=>array(0=>'Paraná', 1=>'Sul', 2=>'Outros'),'label'=>'Região','empty'=>true));
	echo $form->input('hotel',array('label'=>'Desejo pacote com hospedagem'));
	?>	
<?php endif ?>
<?php

	echo $form->hidden("confirm",array(
		'value'=> ( isset($confirm) && $confirm ) ? '1' : '0'
		)
	);
?>
</fieldset>

<?php if (isset($confirm) && $confirm): ?>
	<p>Clique no botão abaixo para gerar seu boleto.</p>
	<?php echo $form->submit('shopline.gif') ?>
<?php else: ?>
		<?php echo $form->end('Enviar') ?>
<?php endif ?>