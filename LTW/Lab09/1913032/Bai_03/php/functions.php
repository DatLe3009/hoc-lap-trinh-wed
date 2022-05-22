<?php
	
	/* Detect Page Current */
	function detectPage() {
		return basename($_SERVER['PHP_SELF'], '.php');
	}
	
	/* Tìm user bằng username */
	function findUserByUsername($username) {
		global $db;
		$stmt = $db->prepare("SELECT * FROM user WHERE username = ?");
		$stmt->execute(array($username));
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}