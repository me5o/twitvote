<?php
/* Vote Test cases generated on: 2012-03-09 18:11:26 : 1331284286*/
App::uses('Vote', 'Model');

/**
 * Vote Test Case
 *
 */
class VoteTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.vote', 'app.user', 'app.vote_type', 'app.status', 'app.entry');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Vote = ClassRegistry::init('Vote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vote);

		parent::tearDown();
	}

}
