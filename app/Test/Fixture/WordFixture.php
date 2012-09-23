<?php
/**
 * WordFixture
 *
 */
class WordFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'word' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'meaning' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'word' => 'Lorem ipsum dolor sit amet',
			'meaning' => 'Lorem ipsum dolor sit amet'
		),
	);

}
