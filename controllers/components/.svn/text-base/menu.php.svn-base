<?php 
class MenuComponent extends Object {
	var $components = array('Session');
    
	function startup() {
        // inicia os modelos
        $Pagina = ClassRegistry::init('Pagina');        
        $Categoria = ClassRegistry::init('Categoria');        

        // cria array de paginas e categorias
        $paginas = $Pagina->find('all',array(
    		'conditions'=>array('Pagina.ativo'=>1),
    		'order'=> array('Pagina.index'=>'ASC')
    	));

        $categorias = $Categoria->find('all',array(
    		'conditions'=>array('Categoria.ativo'=>1),
    		'order'=> array('Categoria.index'=>'ASC')
    	));

        // cria array dos menus
		$userMenu = array();
		$generalMenu = array();

        // cria um item no array chamado noticias, que leva para /
		$generalMenu[__('Notícias', true)] = '/';
 
         
		//array de filhos
		$children = array();

        // loop que gera os pais e filhos
        foreach($categorias as $categoria):
            foreach ($paginas as $pagina):       
                 // verifica se a página pertence à categoria através do ID   
                 if ($pagina['Pagina']['categoria_id'] == $categoria['Categoria']['id']) 
                    // gera um array com todos os filhos
              		$children[__($pagina['Pagina']['titulo'], true)] = '/paginas/frontend/'.$pagina['Pagina']['url'];
            endforeach;
            // o menu principal recebe os filhos
            $generalMenu[__($categoria['Categoria']['titulo'], true)] = $children;
            // esvazia o array de filhos pra poder gerar outro novo
            $children = array();
        endforeach;         
         // verifica se usuario está autenticado
        //	$user = $this->Session->read('Auth.User');
 
 		 if($this->Session->check('Auth.User')) {
			$generalMenu[__('Logout', true)] = '/users/logout';
		 }
		 else {
			$generalMenu[__('Inscrição', true)] = '/users/add';
         }		

 
		//menus arra
		$menus = array();
		$menus[__('Paraná Júnior', true)] = $generalMenu;
		
 
		$this->Session->write('Menu.main', $menus);
 
	}
}
?>
