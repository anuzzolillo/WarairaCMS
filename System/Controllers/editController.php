<?php

	/**
	* _________________________________________________________________________________________
	* 
	*  Require Resources
	* _________________________________________________________________________________________
	**/
	require_once("System/Models/Connection.php");
	require_once("System/Models/Article.php");

	/**
	* _________________________________________________________________________________________
	* 
	*  Call user class
	* _________________________________________________________________________________________
	**/
	$article = new Models\Article;

	/**
	* _________________________________________________________________________________________
	* 
	*  Get user data
	* _________________________________________________________________________________________
	**/
	$data = $article->GetArticleById($_GET["id"]);
	$p = $data->fetch_object();

?>