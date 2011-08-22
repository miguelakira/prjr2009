<?php
class Noticia extends AppModel {

	var $name = 'Noticia';
    
	var $actsAs = array(
				'Sluggable',
				'Upload' => array(
						'image' => array(
							'path'=>':webroot/upload/noticias',
							'styles'=>array(
									'small'=>'200x150')
								),
						'download' =>array(
							'path'=>':webroot/upload/noticias',
				))
				); 
	
	
	var $validate = array(
		'titulo' => array('notEmpty'),
		'texto' => array('notEmpty')
	);
}
?>
