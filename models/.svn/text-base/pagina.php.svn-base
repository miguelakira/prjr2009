<?php
class Pagina extends AppModel {

	var $name = 'Pagina';
    var $actsAs = array('Sluggable', 'Ordered' => array(
                            'field'=> 'index',
    	                    'foreign_key' 	=> 'categoria_id'   // <- este campo faz com que uma página de categoria X não invada
		                            )                           // a ordenação de outras páginas de categoria Y.
		                );                                      // Desse modo, cada categoria possui sua numeração de ordenação
                                                                // própria.
	var $validate = array(
		'titulo' => array('notempty'),
		'texto' => array('notempty'),
        'categoria_id' => array('notempty'),
        'ativo' => array('boolean'),
	);
    var $belongsTo = array('Categoria' => array('className' => 'Categoria'));


}
?>
