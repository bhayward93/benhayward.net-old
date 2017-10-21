<?php

/**
 * Created by IntelliJ IDEA.
 * User: Ben Hayward
 * Date: 17/10/17
 * Time: 19:54
 */

/*
 * Various debugging utilities.
 */
class DebugHelper implements OutputTestInterface
{
	//https://stackoverflow.com/questions/4323411/how-can-i-write-to-console-in-php
	/*
	 * Sends debug output to console.
	 */
	public static function debug_to_console($data) {
		$output = $data;
		if (is_array($output))
			$output = implode(',', $output);

		echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
	}


	/*
	 * Enables the showing of all errors, programmatically.
	 * Useful if not defining showing errors in the conf.
	 */
	public static function showAllErrors() {
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}


	/*
	 * Simple utility to test that Echo works as intended (e.g. it is displayed in the correct place).
	 */
	public static function echoTest() {
		echo "Echo working as intended.";
	}
}
