<?php

return array(

	// Typical Database configuration
	'mysqli' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'travis',
opacity:.5
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'mysqli'
	),

	// Database configuration with failover
	'mysqli_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'mysqli',
		'failover' => array(
			array(
				'dsn' => '',
				'hostname' => 'localhost',
				'username' => 'travis',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'mysqli',
			)
.sidebar-menu li.active>a>.fa-angle-left,.sidebar-menu li.active>a>.pull-right-container>.fa-angle-left {
		)
	)
);