<?php
class Quarto extends AppModel
{
	var $name = "Quarto";
	var $hasAndBelongsToMany = array(
		'User'
	);
	
	var $actsAs = array(
		'ExtendAssociations'
	);
	
	function getAllQuartosForSelect()
	{
		
		$quartos = $this->find('all');
		
		$ret = array();
		
		foreach($quartos as $quarto)
		{
			$ret[$quarto['Quarto']['id']] = 'Quarto '.$quarto['Quarto']['id'].'('.( $quarto['Quarto']['leitos'] - count($quarto['User']));
			$ret[$quarto['Quarto']['id']] .= ' vagas)';
		}
		
		return $ret;
	}
	
/*	function podeEscolher($created)
	{
		$arr_created = explode('-',$created);
		$ts_created = mktime(0,0,0, $arr_created[1],$arr_created[2],$arr_created[0]);
		
		$primeiraEscolha = mktime(0,0,0,4,18,2009);
		
		$ts_limit = mktime(0,0,0,2,12,2009);
		
		if(time() < $primeiraEscolha)
		{
			if($ts_created < $ts_limit)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		return true;
		
	}*/
	
	function getRelacaoQuartos()
	{
		return $this->find('all');
		
		
	}
}
?>
