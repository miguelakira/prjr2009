<?php
class NoticiasController extends AppController {

	var $name = 'Noticias';
	var $helpers = array('Html', 'Form', 'Javascript', 'Time');
    var $layout = 'admin';

    function beforeFilter() {
        parent::beforeFilter(); 
        $this->Auth->allowedActions = array('frontendViewAll', 'frontendView', 'frontend');
}
	function index() {
		$this->Noticia->recursive = 0;
		$this->set('noticias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Noticia.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('noticia', $this->Noticia->read(null, $id));
	}

	function add($id = NULL) {
		if(!$id == NULL)
		{
			$this->data = $this->Noticia->read(null, $id);
		}
		else
		{
			if (!empty($this->data)) {
				$this->Noticia->create();
				if ($this->Noticia->save($this->data)) {
					$this->Session->setFlash(__('The Noticia has been saved', true));
					$this->redirect(array('action'=>'index'));
				} else {
					$this->Session->setFlash(__('The Noticia could not be saved. Please, try again.', true));
				}
			}
		}
	}
	
	

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Noticia', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Noticia->save($this->data)) {
				$this->Session->setFlash(__('The Noticia has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Noticia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Noticia->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Noticia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Noticia->del($id)) {
			$this->Session->setFlash(__('Noticia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

    function frontendView() {	
        $this->set('noticias', $this->Noticia->find( 'all', array('order' => array('Noticia.created' => 'DESC'), 'limit' => 5)));        
      	$this->_setLayoutFrontEnd();
	}

    function frontendViewAll() {
		$this->Noticia->recursive = 0;
		$this->paginate = array(
							'limit' => 4,
							'order'=> array('Noticia.created'=>'DESC')
							);
		$this->set('noticias', $this->paginate());
      	$this->_setLayoutFrontEnd();
        }

function frontend($url)
	{
		$noticia = $this->noticia = $this->Noticia->findByUrl($url);
		
		if (!$noticia)
		{
			$this->flash('Página não encontrada','/');
		}

		$this->set('noticia',$noticia);
      	$this->_setLayoutFrontEnd();
	}


}
?>
