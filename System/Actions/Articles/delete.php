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
	*  Call Article class
	* _________________________________________________________________________________________
	**/
	$article = new Models\Article;

	/**
	* _________________________________________________________________________________________
	* 
	*  Delete Post
	* _________________________________________________________________________________________
	**/
	if (isset($_POST["id"])) {
		$article->delete($_POST["id"]);
		echo 1;
	}

?>