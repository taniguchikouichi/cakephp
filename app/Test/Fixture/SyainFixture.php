<?php
/**
 * Syain Fixture
 */
class SyainFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'syain_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gender' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'birthday' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'create_date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 19, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'create_user' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'update_date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 19, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'update_user' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'syain_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'syain_id' => 'Lorem ',
			'name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit ame',
			'birthday' => 'Lorem ip',
			'create_date' => 'Lorem ipsum dolor',
			'create_user' => 'Lorem ip',
			'update_date' => 'Lorem ipsum dolor',
			'update_user' => 'Lorem ip'
		),
	);

}
