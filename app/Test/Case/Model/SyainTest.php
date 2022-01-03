<?php
App::uses('Syain', 'Model');

/**
 * Syain Test Case
 */
class SyainTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.syain'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Syain = ClassRegistry::init('Syain');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Syain);

		parent::tearDown();
	}

}
