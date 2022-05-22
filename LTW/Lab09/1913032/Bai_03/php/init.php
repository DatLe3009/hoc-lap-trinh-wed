<?php
	require_once 'functions.php';
	
	// Always display errors
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	// Start session
	session_start();

	// Connect database
	$serverName = 'localhost';
	$userName   = 'root';
	$password   = '';
	$dbName     = 'dblab09';
	
	$db         = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
	
	// Detect login
	$currentUser = null;
	if (isset($_SESSION['userId'])) {
		$currentUser = findUserByUsername($_SESSION['userId']);
	}