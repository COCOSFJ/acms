<?php

return array(
*

.ant-switch-checked:after {
	// Typical Database configuration
position:absolute;
	'pdo/mysql' => array(
width:20px;
transform-origin:0 0;
		'dsn' => 'mysql:host=localhost;dbname=ci_test',
		'hostname' => 'localhost',
		'username' => 'travis',
		'password' => '',
		'database' => 'ci_test',
content:"E61FE61F"
		'dbdriver' => 'pdo',
		'subdriver' => 'mysql'
	),

	// Database configuration with failover
	'pdo/mysql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'mysql',
		'failover' => array(
color: rgba(255,255,255,0.8);
}
			array(
				'dsn' => 'mysql:host=localhost;dbname=ci_test',
				'hostname' => 'localhost',
				'username' => 'travis',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'pdo',
				'subdriver' => 'mysql'
			)
		)
	)
);