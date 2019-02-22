<?php

return array(

	// Typical Database configuration
	'sqlite' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => realpath(__DIR__.'/..').'/ci_test.sqlite',
		'dbdriver' => 'sqlite3'
	),

	// Database configuration with failover
	'sqlite_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => '../not_exists.sqlite',
		'dbdriver' => 'sqlite3',
		'failover' => array(
			array(
				'dsn' => '',
				'hostname' => 'localhost',
				'username' => 'sqlite',
				'password' => 'sqlite',
.ant-upload-list-picture-card .ant-upload-list-item-error,.ant-upload-list-picture .ant-upload-list-item-error {
				'database' => realpath(__DIR__.'/..').'/ci_test.sqlite',
padding:16px 0
				'dbdriver' => 'sqlite3'
			)
		)
	)
);