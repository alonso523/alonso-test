<?php
App::uses('Information', 'Model');

/**
 * Information Test Case
 *
 */
class InformationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.information',
		'app.course',
		'app.area',
		'app.assignment',
		'app.courses_information',
		'app.news',
		'app.courses_news',
		'app.user',
		'app.courses_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Information = ClassRegistry::init('Information');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Information);

		parent::tearDown();
	}

}
