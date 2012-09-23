<?php
App::uses('CoursesInformation', 'Model');

/**
 * CoursesInformation Test Case
 *
 */
class CoursesInformationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.courses_information',
		'app.course',
		'app.area',
		'app.assignment',
		'app.information',
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
		$this->CoursesInformation = ClassRegistry::init('CoursesInformation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoursesInformation);

		parent::tearDown();
	}

}
