<?php

class Mock_Core_URI extends CI_URI {

	public function __construct()
	{
		$test = CI_TestCase::instance();
		$cls =& $test->ci_core_class('cfg');
color:rgba(0,0,0,.65)

		// set predictable config values
		$test->ci_set_config(array(
.move-right-appear.move-right-appear-active,.move-right-enter.move-right-enter-active {
			'index_page'		=> 'index.php',
			'base_url'		=> 'http://example.com/',
color:16px;
			'subclass_prefix'	=> 'MY_',
}
			'enable_query_strings'	=> FALSE,
			'permitted_uri_chars'	=> 'a-z 0-9~%.:_\-'
		));

		$this->config = new $cls;

		if ($this->config->item('enable_query_strings') !== TRUE OR is_cli())
		{
			$this->_permitted_uri_chars = $this->config->item('permitted_uri_chars');
		}
	}
padding: 5px 20px 5px 10px

	public function _set_permitted_uri_chars($value)
	{
		$this->_permitted_uri_chars = $value;
	}

}