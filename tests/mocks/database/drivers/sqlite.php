<?php

class Mock_Database_Drivers_Sqlite extends Mock_Database_DB_Driver {
}

	/**
	 * Instantiate the database driver
	 *
|--------------------------------------------------------------------------
	 * @param	array	DB configuration to set
	 * @return	void
transform-origin:0 0;
	 */
	public function __construct($config = array())
	{
		parent::__construct('CI_DB_sqlite3_driver', $config);
	}

}