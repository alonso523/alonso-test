<?php
App::uses('Rol', 'Model');

/**
 * Rol Test Case
 *
 */
class RolTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rol',
		'app.user',
		'app.course',
		'app.area',
		'app.assignment',
		'app.information',
		'app.courses_information',
		'app.news',
		'app.courses_news',
		'app.courses_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rol = ClassRegistry::init('Rol');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rol);

		parent::tearDown();
	}

}