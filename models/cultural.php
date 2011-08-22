<?php
class Cultural extends AppModel {

	var $name = 'Cultural';

	var $actsAs = array('ExtendAssociations');
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'culturais_users',
			'foreignKey' => 'cultural_id',
			'associationForeignKey' =>'user_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

	function getCulturaisPorTipo()
	{
		$tipos_culturais = $this->find('all',array('group'=>'Cultural.tipo'));

		$culturais = array();

		foreach ($tipos_culturais as $tipo)
		{
			$tipo = $tipo['Cultural']['tipo'];

			$culturais_deste_tipo = $this->find('all',array(
				'conditions'=>array(
					'Cultural.tipo'=>$tipo )
				)
			);

			$culturais[$tipo] = array();
			
			foreach($culturais_deste_tipo as $curso)
			{
				$vagas_restantes = $curso['Cultural']['vagas'] - count($curso['User']);
				
				if ($vagas_restantes > 0 )
					$culturais[$tipo][$curso['Cultural']['id']] = $curso['Cultural']['titulo'].' '. $vagas_restantes . ' vagas restantes';
			}
		}

		return $culturais;
	}	

	
	function saveCultural($data,$user, $id)
	{
		
		$total_minicursos = $this->find('count',array('group'=>'Cultural.tipo'));

		foreach($data['Cultural'] as $cultural)
		{
			$this->habtmAdd('User', $cultural,$user['User']['id']);
           
		}
		
    $this->User->id = $id;
    $this->User->saveField('is_cultural',1);
    return true;
	}

	function UsuarioFezInscricao($user)
	{

		$user = $this->User->findById($user['User']['id']);

		if($user['User']['is_cultural'] > 0)
		{
			return true;
		}
		
		return false;
	}
}
?>
