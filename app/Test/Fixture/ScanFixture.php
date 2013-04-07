<?php
/**
 * ScanFixture
 *
 */
class ScanFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 255, 'key' => 'primary'),
		'book_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 55),
		'page_number' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 55),
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
			'id' => '',
			'book_id' => 1,
			'page_number' => 1
		),
	);

}
