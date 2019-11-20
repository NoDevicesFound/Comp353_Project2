<?php
	require 'dbModel.php';

	db = new dbModel();

	$email = $_REQUEST['email'].value;
	$pwd = $_REQUEST['pwd'].value;

	function validate() {
		//make query to db to check uname and $pwd
		$emailQuery = "SELECT uid FROM TABLE User WHERE email = " + $email
		+ "AND password = " + $pwd;

		$uid = db.findData($emailQuery);

		if($uid == null) {
			// throw error back to login page
			header("Location: loginPage.html");
		}
			// load user page for uid
			header("Location: userPage.html");
	}
?>
