<?php
	/**
	* _________________________________________________________________________________________
	* 
	*  Require Resources
	* _________________________________________________________________________________________
	**/
	require("../../Config/Config.php");

	/**
	* _________________________________________________________________________________________
	* 
	*  Call User class
	* _________________________________________________________________________________________
	**/
	$user = new Models\User;

	/**
	* _________________________________________________________________________________________
	* 
	*  Start Session
	* _________________________________________________________________________________________
	**/
	if(isset($_POST["username"]) AND isset($_POST["password"]) AND !empty($_POST["username"]) AND !empty($_POST["password"])) {

		$user->login($_POST["username"], $_POST["password"]);

	}


?>