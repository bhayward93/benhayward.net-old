<?php
/**
 * Created by Ben Hayward
 * User: Ben Hayward
 * Date: 16/10/17
 * Time: 00:58
 */

//Based upon code @ http://www.freecontactform.com/email_form.php
include '../helpers/DebugHelper.php';

DebugHelper::showAllErrors(); 		   //Sets errors to be shown
DebugHelper::debug_to_console("init"); //test console
DebugHelper::echoTest(); 			   //test echo output
if(isset($_POST['email'])) { 	   //if email posted
	$email_to = "benhayward93@hotmail.com";
	$email_subject = "BenHayward.net";
	print_r(error_get_last()); //Temporary

	DebugHelper::debug_to_console("last error: ".error_get_last());
	function died($error) {
		// your error code can go here
		echo "Errors appear below.<br /><br />"; //change this to reload page and display errors in html.
		echo $error."<br /><br />";
		DebugHelper::debug_to_console("Error! : ".$error);
		die();
	}

	// valida	tion expected data exists
	if(!isset($_POST['first_name']) ||
		!isset($_POST['last_name']) ||
		!isset($_POST['email']) 	||
		!isset($_POST['telephone']) ||
		!isset($_POST['comments'])) {
		died('There seems to be problem(s) with the form you submitted.');
	}


	$first_name = $_POST['first_name']; // required
	$last_name = $_POST['last_name'];   // required
	$email_from = $_POST['email']; 	    // required
	$telephone = $_POST['telephone'];   // not required
	$comments = $_POST['comments'];     // required

	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'Invalid Email Address<br />';
	}

	$string_exp = "/^[A-Za-z .'-]+$/";

	if(!preg_match($string_exp,$first_name)) {
		$error_message .= 'Invalid First Name<br />';
	}

	if(!preg_match($string_exp,$last_name)) {
		$error_message .= 'Invalid Last Name<br />';
	}

	if(strlen($comments) < 2) {
		$error_message .= 'Invalid Comments<br />';
	}

	if(strlen($error_message) > 0) {
		died($error_message);
	}

	$email_message = "Details:.\n\n";


	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}

	$email_message .= "First Name: ".clean_string($first_name)."\n";
	$email_message .= "Last Name: ".clean_string($last_name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Telephone: ".clean_string($telephone)."\n";
	$email_message .= "Comments: ".clean_string($comments)."\n";

	// create email headers
	$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);
	//Success HTML.
	DebugHelper::debug_to_console("Email Sent, script finished");
	DebugHelper::debug_to_console("Last error: ".error_get_last());
}
