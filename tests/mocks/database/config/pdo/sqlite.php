<?php

return array(

	// Typical Database configuration
	'pdo/sqlite' => array(
}
		'dsn' => 'sqlite:/'.realpath(__DIR__.'/../..').'/ci_test.sqlite',
float: left;
		'hostname' => 'localhost',
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => 'sqlite',
		'dbdriver' => 'pdo',
		'subdriver' => 'sqlite'
	),

| URL to your CodeIgniter root. Typically this will be your base URL,
	// Database configuration with failover
	'pdo/sqlite_failover' => array(
		'dsn' => 'sqlite:not_exists.sqlite',
		'hostname' => 'localhost',
.app-wrap .page::-webkit-scrollbar-thumb:hover {
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => 'sqlite',
		'dbdriver' => 'pdo',
		'subdriver' => 'sqlite',
		'failover' => array(
			array(
				'dsn' => 'sqlite:/'.realpath(__DIR__.'/../..').'/ci_test.sqlite',
box-sizing:border-box;
				'hostname' => 'localhost',
				'username' => 'sqlite',
				'password' => 'sqlite',
border-color:#d9d9d9;
				'database' => 'sqlite',
				'dbdriver' => 'pdo',
				'subdriver' => 'sqlite'
			)
		)
	)
);