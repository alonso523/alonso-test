<?php
App::uses('AppModel', 'Model');
/**
 * Rol Model
 *
 * @property User $User
 */
class Rol extends AppModel {

public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('*');
}

    public $actsAs = array('Acl' => array('type' => 'requester'));

    public function parentNode() {
        return null;
    }
/*
var $name = 'Rol';
 
var $hasMany = array('User');
 
//Le decimos que se comporte como ACL.
var $actsAs = array('Acl' => array('requester'));
 
/*Creada para su uso con el AclBehavior
function parentNode() {
	return null;
}*/
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */ /*
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'rol_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);*/

}
