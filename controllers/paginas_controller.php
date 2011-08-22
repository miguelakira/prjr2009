<?php
class PaginasController extends AppController {

	var $name = 'Paginas';
	var $helpers = array('Html', 'Form', 'Javascript');
    var $layout = 'admin';
    var $paginate = array ('order' => array('categoria_id', 'Pagina.index'));

   function beforeFilter() {
        parent::beforeFilter(); 
        $this->Auth->allowedActions = array('frontend');
}
	function index() {
		$this->Pagina->recursive = 0;
		$this->set('paginas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Pagina.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('pagina', $this->Pagina->read(null, $id));
	}

	function add() {

		if (!empty($this->data)) {
			$this->Pagina->create();
  
			if ($this->Pagina->save($this->data)) {
				$this->Session->setFlash(__('The Pagina has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Pagina could not be saved. Please, try again.', true));
			}
		}
		// vai fazer uma lista das categorias para serem mostradas na view
        $this->set('categorias', $this->Pagina->Categoria->find('list'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Pagina', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pagina->save($this->data)) {
				$this->Session->setFlash(__('The Pagina has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Pagina could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pagina->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Pagina', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pagina->del($id)) {
			$this->Session->setFlash(__('Pagina deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

function frontend($url)
	{
		$pagina = $this->pagina = $this->Pagina->findByUrl($url);
		
		if (!$pagina)
		{
			$this->flash('Página não encontrada','/');
		}

		$this->set('pagina',$pagina);
      	$this->_setLayoutFrontEnd();
	}
	
	
	function moveUp($id)
	{
    
	    $this->Pagina->moveup($id); 	
		$this->redirect('index');
	}
	
	function moveDown($id)
	{
        $this->Pagina->movedown($id); 	
		$this->redirect('index');
	}
	
}
?>
