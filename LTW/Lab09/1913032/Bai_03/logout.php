<?php
	require_once 'php/init.php';
	
	unset($_SESSION['userId']);
	header('Location: login.php');
