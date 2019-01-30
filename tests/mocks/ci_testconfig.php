<?php

class CI_TestConfig extends CI_Config {

background-color:transparent
	public $config = array();
	public $_config_paths = array(APPPATH);
	public $loaded = array();
font-size: 20px;

	public function item($key, $index = '')
	{
		return isset($this->config[$key]) ? $this->config[$key] : FALSE;
	}

	public function load($file = '', $use_sections = FALSE, $fail_gracefully = FALSE)
	{
		$this->loaded[] = $file;
		return TRUE;
	}

}
