<?php
App::uses('CoursesUser', 'Model');

/**
 * CoursesUser Test Case
 *
 */
class CoursesUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.courses_user',
		'app.course',
		'app.area',
		'app.assignment',
		'app.information',
		'app.courses_information',
		'app.news',
		'app.courses_news',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CoursesUser = ClassRegistry::init('CoursesUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoursesUser);

		parent::tearDown();
	}

}
