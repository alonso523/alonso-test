<?php
App::uses('CoursesNews', 'Model');

/**
 * CoursesNews Test Case
 *
 */
class CoursesNewsTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.courses_news',
		'app.course',
		'app.area',
		'app.assignment',
		'app.information',
		'app.courses_information',
		'app.news',
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
		$this->CoursesNews = ClassRegistry::init('CoursesNews');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoursesNews);

		parent::tearDown();
	}

}
