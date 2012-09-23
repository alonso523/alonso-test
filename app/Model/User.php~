<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Rol $Rol
 * @property Course $Course
 */
class User extends AppModel {

   public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('*');}

    public $name = 'User';
    public $actsAs = array('Acl' => array('type' => 'requester'));

    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['rol_id'])) {
            $rolId = $this->data['User']['rol_id'];
        } else {
            $rolId = $this->field('rol_id');
        }
        if (!$rolId) {
            return null;
        } else {
            return array('Rol' => array('id' => $rolId));
        }
    }


public function bindNode($user) {
    return array('model' => 'Rol', 'foreign_key' => $user['User']['rol_id']);
}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'rol_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'username' => array(
                       'notempty' => array(
                               'rule' => array('notempty'),
                               'message' => 'Escriba su correo electrónico',
                       ),
                       'email'=>array('rule'=>'email', 'message'=>'Digite su correo electrónico'),
                       'isUnique'=>array('rule'=>'isUnique', 'message'=>'Este usuario ya está registrado')
               ),

		'password' => array(
		       'notempty' => array(
			       'rule' => array('notempty'),
			       'message' => 'Debe digitar su número de identificación / carné'
		       )
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Rol' => array(
			'className' => 'Rol',
			'foreignKey' => 'rol_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Course' => array(
			'className' => 'Course',
			'joinTable' => 'courses_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'course_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
