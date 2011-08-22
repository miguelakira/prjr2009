<?php
class Categoria extends AppModel {

	var $name = 'Categoria';
	var $validate = array(
		'titulo' => array('notempty'),
		'index' => array('notempty')
	);

    var $actsAs = array('Ordered' => array(
                            'field'=> 'index'
		            ) 
    );
    var $hasMany = array('Pagina' => array('className' => 'Pagina'));
    
    // através do *$this->set('categorias', $this->Pagina->Categoria->find('list'));* em paginasController,
    // este comando irá mostrar o seguinte campo na caixa de seleção em views/paginas/add.ctp:
    var $displayField = "titulo";

}
?>
