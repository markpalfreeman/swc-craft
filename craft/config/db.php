<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

	// Server or IP address (usually 'localhost' or '127.0.0.1')
	'server' => 'localhost',
	'user' => 'homestead',
	'password' => 'secret',
	'database' => 'swctest',

	// The prefix to use when naming tables. 5-char max.
	'tablePrefix' => 'craft',


	// '*' => array(
 //    'tablePrefix' => 'craft',
 //  ),
	// 'live' => array(
	// 	'server' => '',
	// 	'user' => '',
	// 	'password' => '',
	// 	'database' => '',
	// ),
	// 'staging' => array(
	// 	'server' => '',
	// 	'user' => '',
	// 	'password' => '',
	// 	'database' => '',
	// ),
	// 'dev' => array(
	// 	'server' => 'craft.dev',
	// 	'user' => 'homestead',
	// 	'password' => 'secret',
	// 	'database' => 'swc_dev',
	// ),
);
