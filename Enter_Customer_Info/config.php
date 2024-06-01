<?php
	define("DB_USER", "user1");
	define("DB_PASSWORD", "Test678!");
	define("DB_DATABASE", "test");
	define("DB_HOST", "localhost");

	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
?>