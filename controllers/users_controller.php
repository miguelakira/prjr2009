<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form', 'Javascript');
    var $layout = 'admin';
	var $uses = array('User','Cultural', 'Quarto', 'QuartosUser');
	
    function beforeFilter() {
        parent::beforeFilter(); 
        $this->Auth->allowedActions = array('logout', 'login', 'cultural', 'quartos');
}
    function login() { 
           $this->redirect('/');
    }
    
    function logout() {
    	$this->Session->setFlash('logout');
		$this->redirect($this->Auth->logout());
    }
    
    function beforeRender() {
	    parent::beforeRender();
    }
	
	function read($nome){
		$this->set("dados", $this->User->findByUsername($nome));
	}
	function index() {
		
		
		        // the elements from the url we set above are read  
                // automagically by cake into $this->passedArgs[]
                // eg:
                // $passedArgs['Search.keywords'] = mykeyword
                // $passedArgs['Search.tag_id'] = 3

                // required if you are using Containable
                // requires Post to have the Containable behaviour
                //$contain = array();  

                // we want to set a title containing all of the
                // search criteria used (not required)         
                // $title = array();
               
                // filter by name
                //
                if(isset($this->passedArgs['Search.name'])) {
                        $this->paginate['conditions'][]['User.name LIKE'] = str_replace('*','%',$this->passedArgs['Search.name']);
                        $this->data['Search']['name'] = $this->passedArgs['Search.name'];
                        // $title[] = __('Name',true).': '.$this->passedArgs['Search.name'];
                }

                //
                // filter by username
                //
                if(isset($this->passedArgs['Search.username'])) {
                        $this->paginate['conditions'][]['User.username LIKE'] = str_replace('*','%',$this->passedArgs['Search.username']);
                        $this->data['Search']['username'] = $this->passedArgs['Search.username'];
                        // $title[] = __('Username',true).': '.$this->passedArgs['Search.username'];
                }

                //
                // filter by active
                //
                if(isset($this->passedArgs['Search.active'])) {
                        $this->paginate['conditions'][]['User.active'] = ($this->passedArgs['Search.active'])?1:0;
                        $this->data['Search']['active'] = $this->passedArgs['Search.active'];
                       //  $title[] = ($this->passedArgs['Search.active']) ? __('Active Users',true) : __('Inactive Users',true);
                }
               

                // get posts           
                //$this->Post->contain($contain); // required if you are using Containable
                //$this->paginate['reset']=false; // required if you are using Containable
                $users = $this->paginate();
                $this->set(compact('users'));

        }
		
		

    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid User.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		
		if (!empty($this->data)) {
			
			$this->User->create();
			
			if ( $this->User->save($this->data) )
			{
				$this->set(array('itauDC'=>$this->_getItauDC()));
				$this->set(array('confirm'=>true));
			}
			else {
					$this->Session->setFlash(__('Não foi possível salvar sua inscrição, tente novamente.', true));
			}
		}
		else
		{	
			$this->set(array("confirm"=>false));
			
		}		
		$camiseta = array(
			1 => 'Babylook - P',
			2 => 'Babylook - M',
			3 => 'Babylook - G',
			4 => 'Camiseta - P',
			5 => 'Camiseta - M',
			6 => 'Camiseta - G',
		);
		
		$this->set('camiseta',$camiseta);
		
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
      	$this->_setLayoutFrontEnd();
	}
	
	function cultural($id=null)
	{
		//if ($this->Cultural->UsuarioFezInscricao($this->Auth->user()))
		//{
			//$this->flash('Você já fez suas escolhas','/');
		$this->_setLayoutFrontEnd();
        $user = $this->Auth->user();
		$user_cultural = $this->User->findById($user['User']['id']);
        $this->set('user_cultural',$user_cultural);
		//}
		
	
		if (! empty($this->data))
		{
			if ($this->Cultural->saveCultural($this->data,$this->Auth->user(),$this->Auth->user('id')))
			{   
				$this->flash('Agenda Cultural salva com sucesso!','/');
			}
		}
		
		$this->set('culturais',$this->Cultural->getCulturaisPorTipo());	
	}
	
	function indexCulturais() {
		$this->Cultural->recursive = 0;
		$this->set('culturais', $this->paginate('Cultural'));

	}

	function relacaoQuartos()
	{		
		$this->set('relacao',$this->Quarto->getRelacaoQuartos());
	}


	function quartos()
	{
		$user = $this->Auth->user();
		$this->_setLayoutFrontEnd();
		$inscricao = $this->User->findById($user['User']['id']);

		if (!empty($this->data))
		{
			$quarto = $this->Quarto->findById($this->data['user']['quarto']);

			if ($quarto['Quarto']['leitos'] == count($quarto['User']))
			{
				$this->flash('Quarto lotado!','quartos');
			}
			else
			{
				$conditions = array('QuartosUser.user_id'=>$inscricao['User']['id']);

				$this->QuartosUser->deleteAll($conditions);

				$this->Quarto->habtmAdd('User',$this->data['user']['quarto'], $inscricao['User']['id']);
                $this->flash('Quarto escolhido!', 'quartos');
			}
		}
		else
		{   
			if($inscricao['User']['hotel'] == 0)
			{
				$this->flash('Você não escolheu uma inscricao com hotel.','/');
			}
			$this->Quarto->bindModel(array(
				'hasAndBelongsToMany'=>array('User'))
			);
			$quartos = $this->Quarto->getAllQuartosForSelect();

			$this->set('quartos',$quartos);			
		}
		$this->set('inscricao',$inscricao);
	}

	function createQuartos()
	{
		$quarto_triplo = array(
			'leitos' => 3
		);
		
		for($i = 0; $i < 36; $i++)
		{
			$this->Quarto->save($quarto_triplo);
			$this->Quarto->create();
		}
	
	}



   function listCulturais(){
        
        $this->set('users', $this->paginate());
    }

   function listQuartos(){
        
        $this->set('users', $this->paginate());
    }


    function editCultural($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Cultural', true));
			$this->redirect(array('action'=>'indexCultural'));
		}
		if (!empty($this->data)) {
			if ($this->Cultural->save($this->data)) {
				$this->Session->setFlash(__('The Cultural has been saved', true));
				$this->redirect(array('action'=>'indexCultural'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cultural->read(null, $id);
		}
	}
	
	function deleteCultural($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Cultural', true));
			$this->redirect(array('action'=>'indexCulturais'));
		}
		if ($this->Cultural->del($id)) {
			$this->Session->setFlash(__('Cultural deleted', true));
			$this->redirect(array('action'=>'indexCulturais'));
		}
	}


	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid User', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for User', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->inativaInscricao($id)) {
			$this->Session->setFlash(__('Inscricao deletada', true));
			$this->redirect(array('action'=>'indexInscricoes'));
		}
	}
	
	function indexInscricoes() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	
	// funcao utilizada pelo index, para efetuar busca
	function search() {
	        // the page we will redirect to
                $url['action'] = 'index';
               
                // build a URL will all the search elements in it
                // the resulting URL will be
                // example.com/cake/posts/index/Search.keywords:mykeyword/Search.tag_id:3
                foreach ($this->data as $k=>$v){
                        foreach ($v as $kk=>$vv){
                                $url[$k.'.'.$kk]=$vv;
                        }
                }

                // redirect the user to the url
                $this->redirect($url, null, true);

    }

	function _getItauDC()
	{
		App::import('Vendor', 'itaucripto');
	
		$cripto = new Itaucripto ();
		
		$dados = $cripto->geraDados
		(
		    $codEmp = 'J0026155870001790000011319',
			$pedido = $this->User->getNumeroPedido($this->User->getLastInsertId()),
		    $valor = $this->User->getPrecoBoleto($this->data),
		    $observacao = '',
		    $chave = 'K1A9T8O8I2G4O2R0',
		    $nomeSacado = $this->User->getNome($this->data),
		    $codigoInscricao = '1',
		    $numeroInscricao = '',
		    $enderecoSacado = '',
		    $bairroSacado = '',
		    $cepSacado = '',
		    $cidadeSacado = '',
		    $estadoSacado = 'UF',
		    $dataVencimento = date('dmY', strtotime('+3 day')),
		    $urlRetorna = '',
		    $obsAd1 = '',
		    $obsAd2 = '',
		    $obsAd3 = ''
		);
		
		$cripto->decripto($dados, $chave);
	
		return $dados;		
	}
	      
	function _itauSend()
	{
			$host = "https://shopline.itau.com.br/shopline/shopline.asp";
			$path = "/";
			$data = "DC=".$this->_getItauDC();
			$data = urlencode($data);
			
			header("POST $path HTTP/1.1\r\n" );
			header("Location: $host\r\n" );
			header("Content-type: application/x-www-form-urlencoded\r\n" );
			header("Content-length: " . strlen($data) . "\r\n" );
			header("Connection: close\r\n\r\n" );			
	}

}
?>
