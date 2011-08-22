<?php
class User extends AppModel {

	var $name = 'User';
	var $validate = array(
    	'username' => array(
    	        'required'=>true,
				'rule'=>'notEmpty',
				'message'=>'USERNAME é um campo requerido.',
        ),
		'name' => array(
				'required'=>true,
				'rule'=>'notEmpty',
				'message'=>'NOME é um campo requerido.',
		),
		'sexo' => array(
				'required'=>true,
				'rule'=>'boolean',
				'message'=>'Sexo invalido!'
		),
		'rg' => array(
				'rule'=>'notEmpty',
				'message'=>'RG inválido',
				'required'=>true
		),
		'cpf' => array(
			'unique' => array(
				'rule'=>'isUnique',
				'message'=>'Já existe um usuário cadastrado com este cpf.'
			),
			'validator'=>array(
				'rule'=>array('_validaCpf'),
				'message'=>'CPF inválido.',
			)
		),
		'data_nasc' => array(
			'required'=>true,
			'rule'=>'date',
			'message'=>'DATA inválida.'
		),
		'email' => array(
			'unique'=>array(
				'required'=>true,
				'rule'=>'isUnique',
				'message'=>'Já existe um usuário cadastrado com este email.'
			),
			'email'=>array(
				'rule'=>'email',
				'message'=>'EMAIL inválido.'
						  )
		),
		'ies' => array(
			'rule'=>'notEmpty',
			'message'=>'Universidade é um campo requerido.',
			'required'=>true
		),
		'password' => array(
				'required'=>true,
				'rule'=>'notEmpty',
				'message'=>'Senha é um campo requerido.',
		),
		'camiseta'=>array(
			'required'=>true,
			'rule'=>array('inList',array(1,2,3,4,5,6)),
			'message'=>'CAMISETA inválida.'
		),
		'localizacao'=>array(
			'required'=>true,
			'allowEmpty'=>false,
			'rule'=>array('_validaRegiao'),
			'message'=>'Região não disponível.'
		),
		/*'hotel'=>array(
			'rule' => array('_validaHotel'),
			'message'=>'As vagas para essa opção estão esgotadas.'
		)*/
	);


	function _validaCpf($cpf) {
		$cpf = $cpf['cpf'];
		/*
		*/
		$nulos = array("12345678909","11111111111","22222222222","33333333333",
		               "44444444444","55555555555","66666666666","77777777777",
		               "88888888888","99999999999","00000000000");
		/* Retira todos os caracteres que nao sejam 0-9 */
		$cpf = ereg_replace("[^0-9]", "", $cpf);
		
		/*Retorna falso se houver letras no cpf */
		if (!(ereg("[0-9]",$cpf)))
		    return 0;
		
		/* Retorna falso se o cpf for nulo */
		if( in_array($cpf, $nulos) )
		    return 0;
		
		/*Calcula o penúltimo dígito verificador*/
		$acum=0;
		for($i=0; $i<9; $i++) {
		  $acum+= $cpf[$i]*(10-$i);
		}
		
		$x=$acum % 11;
		$acum = ($x>1) ? (11 - $x) : 0;
		/* Retorna falso se o digito calculado eh diferente do passado na string */
		if ($acum != $cpf[9]){
		  return 0;
		}
		/*Calcula o último dígito verificador*/
		$acum=0;
		for ($i=0; $i<10; $i++){
		  $acum+= $cpf[$i]*(11-$i);
		}  
		
		$x=$acum % 11;
		$acum = ($x > 1) ? (11-$x) : 0;
		/* Retorna falso se o digito calculado eh diferente do passado na string */
		if ( $acum != $cpf[10]){
		  return 0;
		}  
		/* Retorna verdadeiro se o cpf eh valido */
		return 1;
	}
	
	function _validaRegiao($opcao)
	{
		switch($opcao['localizacao'])
		{
			case 0:  //paraná
				$max = 172;
				break;
			case 1:  //sul
				$max = 18;
				break;
			case 2:  //outros
				$max = 49;
				break;
			default:
				return false;
		}
		
		if ($this->find('count',array('conditions'=>array('User.localizacao'=>$opcao['localizacao']))) >= $max)
		{
			return false;
		}
		
		return true;	
	}
		
	
	function getCamiseta($tipo)
	{
		switch($tipo)
		{
			case 1:
				return 'BabyLook - P';
				break;
			case 2:
				return 'BabyLook - M';
				break;
			case 3:
				return 'BabyLook - G';
				break;
			case 4:
				return 'Camiseta - P';
				break;
			case 5:
				return 'Camiseta - M';
				break;
			case 6:
				return 'Camiseta - G';
				break;
		}
		
	}
	
	function _validaHotel($opcao)
	{
		
		switch($opcao['hotel'])
		{
			case 1:  //hospedadas
				$max = 45;
				break;
			case 0:  //não hospedadas
				$max = 5;
				break;
			default:
				return false;
		}
		
		if ($this->find('count',array('conditions'=>array('User.hotel'=>$opcao['hotel']))) >= $max)
		{
			return false;
		}
		
		return true;
	}
	
	function getNumeroPedido($inscrito)
	{	
		return sprintf("%08d", $inscrito);
	}
	
	function getNome($inscrito)
	{	
		$nome = $inscrito['User']['name'];
		return ($nome);
	}
	
	function getPrecoBoleto($inscrito)
	{
		$pacoteCorrenteFederadoHotel = $this->find('count', array('conditions' => array('User.federacao'=>'0', 'User.hotel'=>'1')));
		$pacoteCorrenteNaoFederadoHotel = $this->find('count', array('conditions' => array('User.federacao'=>'1', 'User.hotel'=>'1')));
		$pacoteCorrenteFederado = $this->find('count', array('conditions' => array('User.federacao'=>'0', 'User.hotel'=>'0')));
		$pacoteCorrenteNaoFederado = $this->find('count', array('conditions' => array('User.federacao'=>'1', 'User.hotel'=>'0')));
		
		$federacao = $inscrito['User']['federacao'];

		if($federacao == 1 && $inscrito['User']['hotel'] == 0)
		{
			$preco = 127;
			
			/*if($pacoteCorrenteNaoFederado > 7 && $pacoteCorrenteNaoFederado <= 17)
			{
				$preco = 110;
			}
			elseif($pacoteCorrenteNaoFederado > 17)
			{
				$preco = 127;
			}*/
		}
		
		if($federacao == 0 && $inscrito['User']['hotel'] == 1)
		{
			$preco = 133;
			/*if($pacoteCorrenteFederadoHotel > 20 && $pacoteCorrenteFederadoHotel <= 90)
			{
				$preco = 125;
			}
			elseif($pacoteCorrenteFederadoHotel > 90)
			{
				$preco = 133;
			}*/
		}
		
		if ($federacao == 0 && $inscrito['User']['hotel'] == 0)
		{
			$preco = 117;
			/*
			if($pacoteCorrenteFederado > 8 && $pacoteCorrenteFederado < 23)
			{
				$preco = 100;
			}
			elseif($pacoteCorrenteFederado > 23)
			{
				$preco = 117;
			}*/
			
		}
		
		if ($federacao == 1 && $inscrito['User']['hotel'] == 1)
		{
			$preco = 146;	
			/*
			if($pacoteCorrenteNaoFederadoHotel > 5 && $pacoteCorrenteNaoFederadoHotel <= 20)
			{
				$preco = 140;
			}
			elseif($pacoteCorrenteNaoFederadoHotel > 20)
			{
				$preco = 146;
			}
		
			if (! $inscrito['User']['hotel'])
			{
			$preco = $preco - 5;
			}*/
		}
 
		return "$preco,00";
	}
	
	function beforeFind($query)
	{
		if(is_array($query['conditions']))
			$query['conditions'] = array_merge($query['conditions'] , array('User.active'=>1));
		else
			$query['conditions'] = array('User.active'=>1);
		return $query;
	}
	
	function inativaInscricao($id)
	{
		$this->id = $id;
		$this->saveField('active',0);
		
		return true;
	}

	//The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array('Group');
    var $actsAs = array('Acl' => 'requester');

	function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        $data = $this->data;
        if (empty($this->data)) {
            $data = $this->read();
        }
        if (!$data['User']['group_id']) {
            return null;
        } else {
            return array('Group' => array('id' => $data['User']['group_id']));
        }
    }

	var $hasAndBelongsToMany = array(
		'Cultural' => array(
			'className' => 'Cultural',
			'joinTable' => 'culturais_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' =>'cultural_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
    'Quarto' => array(
            'className' => 'Quarto',
			'joinTable' => 'quartos_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' =>'quarto_id',
        )
	);




}
?>
