<?php
	require 'dbModel.php';

	db = new dbModel();
	$failed = false;

	$email = $_POST['email'].value;
	$pwd = $_POST['pwd'].value;

	//make query to db to check uname and $pwd
	$emailQuery = "SELECT uid FROM TABLE User WHERE email = \"" + $email + "\""
	+ "AND password = \"" + $pwd + "\"";

	$uid = db.findData($emailQuery);

	if($uid == null) {
		// throw error back to login page
		$failed = true;
		header("Location: loginPage.html");
	}
		// load user page for uid
		header("Location: userPage.html");
?>
