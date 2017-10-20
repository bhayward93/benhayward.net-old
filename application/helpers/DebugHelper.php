<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BlogController extends CI_Model
{
	/**
	 * Created by IntelliJ IDEA.
	 * User: nemo
	 * Date: 17/10/17
	 * Time: 19:54
	 */

	//https://stackoverflow.com/questions/4323411/how-can-i-write-to-console-in-php
	/*
	 * Sends debug output to console.
	 */
	function debug_to_console($data)
	{
		$output = $data;
		if (is_array($output))
			$output = implode(',', $output);

		echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
	}

	/*
	 * Enables the showing of all errors, programmatically.
	 */
	function showAllErrors()
	{
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}

	/*
	 * Simple utility to test that Echo works as intended (e.g. it is displayed in the correct place).
	 */
	function echoTest()
	{
		echo "Echo working as intended.";
	}
}
