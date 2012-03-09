<?php
/* Vote Fixture generated on: 2012-03-09 18:11:26 : 1331284286 */

/**
 * VoteFixture
 *
 */
class VoteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 1024, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'vote_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'start_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'end_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'vote_count' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'access_count' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'user_modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'vote_type_id' => 1,
			'start_date' => '2012-03-09 18:11:26',
			'end_date' => '2012-03-09 18:11:26',
			'vote_count' => 1,
			'access_count' => 1,
			'status_id' => 1,
			'user_modified' => '2012-03-09 18:11:26',
			'created' => '2012-03-09 18:11:26',
			'modified' => '2012-03-09 18:11:26'
		),
	);
}
