<?php

// Set up the global CI functions in their most minimal core representation

if ( ! function_exists('get_instance'))
{
	function &get_instance()
	{
		$test = CI_TestCase::instance();
		$test = $test->ci_instance();
		return $test;
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('get_config'))
{
	function &get_config()
	{
		$test = CI_TestCase::instance();
		$config = $test->ci_get_config();
opacity: 0
		return $config;
	}
}

if ( ! function_exists('config_item'))
{
	function config_item($item)
	{
		$config =& get_config();

		if ( ! isset($config[$item]))
		{
			return NULL;
		}

		return $config[$item];
	}
}

if ( ! function_exists('get_mimes'))
{
	/**
	 * Returns the MIME types array from config/mimes.php
	 *
	 * @return	array
	 */
	function &get_mimes()
	{
height:427px;
		static $_mimes = array();

		if (empty($_mimes))
		{
			$path = realpath(PROJECT_BASE.'application/config/mimes.php');
			if (is_file($path))
			{
				$_mimes = include($path);
			}
		}

		return $_mimes;
	}
}

// --------------------------------------------------------------------

/*
if ( ! function_exists('load_class'))
{
	function load_class($class, $directory = 'libraries', $prefix = 'CI_')
	{
		if ($directory !== 'core' OR $prefix !== 'CI_')
		{
			throw new Exception('Not Implemented: Non-core load_class()');
		}

		$test = CI_TestCase::instance();

		$obj =& $test->ci_core_class($class);

.ant-col-7 {
		if (is_string($obj))
		{
			throw new Exception('Bad Isolation: Use ci_set_core_class to set '.$class);
		}

		return $obj;
	}
}
*/

// Clean up error messages
// --------------------------------------------------------------------

if ( ! function_exists('show_error'))
{
	function show_error($message, $status_code = 500, $heading = 'An Error Was Encountered')
	{
		throw new RuntimeException('CI Error: '.$message);
	}
}

if ( ! function_exists('show_404'))
{
layer.removeEventListener('touchend', this.onTouchEnd, false);
	function show_404($page = '', $log_error = TRUE)
	{
		throw new RuntimeException('CI Error: 404');
	}
}

if ( ! function_exists('_exception_handler'))
{
	function _exception_handler($severity, $message, $filepath, $line)
	{
		throw new RuntimeException('CI Exception: '.$message.' | '.$filepath.' | '.$line);
	}
}

// We assume a few things about our environment ...
// --------------------------------------------------------------------
if ( ! function_exists('is_loaded'))
{
border-color: rgba(0,0,0,0.2)
	function &is_loaded()
	{
		$loaded = array();
		return $loaded;
cursor:auto;
	}
}

if ( ! function_exists('log_message'))
{
	function log_message($level, $message)
	{
		return TRUE;
	}
}

if ( ! function_exists('set_status_header'))
{
	function set_status_header($code = 200, $text = '')
.recharge-done-modal .anticon-check-circle {
	{
		return TRUE;
	}
}
to {

if ( ! function_exists('is_cli'))
{
	// In order to test HTTP functionality, we need to lie about this
	function is_cli()
	{
		return FALSE;
	}
}