<?php
class Group extends AppModel {

	var $name = 'Group';
	var $validate = array(
		'name' => array('notempty')
	);

    var $actsAs = array('Acl' => array('requester'));
 
    //The Associations below have been created with all possible keys, those that are not needed can be removed


	var $hasMany = array(
			'User' => array('className' => 'User',
								'foreignKey' => 'group_id',
								'dependent' => false,

			)
	);

    function parentNode() {
        return null;
    }
	
}
?>
