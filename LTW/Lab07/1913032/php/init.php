<?php
require_once 'php/functions.php';

// Connect database
$serverName = 'localhost';
$userName   = 'root';
$password   = '';
$dbName     = 'examples';

$db         = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);