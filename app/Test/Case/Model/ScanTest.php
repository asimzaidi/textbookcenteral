<?php
App::uses('Scan', 'Model');

/**
 * Scan Test Case
 *
 */
class ScanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.scan',
		'app.book'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Scan = ClassRegistry::init('Scan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Scan);

		parent::tearDown();
	}

}
