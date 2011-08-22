<?php
class AppController extends Controller
{
	var $components = array('Acl', 'Auth'); //adicionar 'Menu' para usar o menu dropdown
	var $uses = array('Pagina', 'Categoria', 'Cultural'); // para usar o model Pagina.php e Categoria.php, lá em _carregaMenu
    // var $helpers = array('Menu'); (nao está usando)
	function beforeRender() {
	    $this->set('user', $this->Auth->user());
	}


	function beforeFilter()
	{
        
        $this->Auth->allowedActions = array('display');
        //serve para autenticar o usuário somente se ele estiver ativo
        $this->Auth->userScope = array('User.active' => true);
        // um dos 4 tipos de autorização do ACL. Para mais informações sobre os outros tipos,
        // visitar http://book.cakephp.org/view/396/authorize
        $this->Auth->authorize = 'crud';
        // se o login estiver errado, mostrar esta mensagem
        $this->Auth->loginError = 'Usuário ou senha incorretos';
        // Após login e logout,redirecionar para estes endereços:
        $this->Auth->loginRedirect = array('controller' => 'noticias', 'action' => 'frontendView');
        $this->Auth->logoutRedirect = array('controller' => 'noticias', 'action' => 'frontendView');
		$this->Auth->actionPath = 'controllers/';
        // Serve para autorizar ou negar acesso para actions que nao sao padrão.
        // Neste caso, eu dou permissões do tipo "read" para 'indexInscricoes", etc.
		$this->Auth->mapActions(
        	array(
		'update' => array('moveUp', 'moveDown', 'editCultural', 'deleteCultural', 'listCulturais', 'listQuartos'),
		'read' => array('indexInscricoes', 'search', 'indexCulturais')
	)
);

		
	    if($this->layout == 'default')
       	{
       		$this->_setLayoutFrontEnd();
       	}

	}


    function _setLayoutFrontEnd()
    {
    	$this->layout = 'default';
        $this->_carregaMenu();
    }


    // vai setar a variavel $paginas e $categorias que serão usados em views\elements\menu.ctp
    function _carregaMenu()
    {
        	$paginas = $this->Pagina->find('all',array(
    		'conditions'=>array('Pagina.ativo'=>1),
    		'order'=> array('Pagina.index'=>'ASC')
    	));
    	
    	$this->set('paginas',$paginas);
    	
       	$categorias = $this->Categoria->find('all',array(
       		'conditions'=>array('Categoria.ativo'=>1),
       		'order'=> array('Categoria.index'=>'ASC')
    	));
    	
    	$this->set('categorias',$categorias);
    }    

    
}
?>
