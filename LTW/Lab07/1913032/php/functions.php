<?php
	
	/* Lấy tất cả dữ liệu trong bảng Cars */
	function getCars() {
		global $db;
		$stmt = $db->query("SELECT * FROM Cars");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	/* Thêm dữ liệu mới vào bảng Cars */
	function addCar($id, $name, $year) {
		global $db;
		$stmt = $db->prepare("INSERT INTO Cars (id, name, year) VALUES (?, ?,?)");
		$stmt->execute(array($id, $name, $year));
		return $db->lastInsertId();
	}
	
	/* Xóa 1 dòng dữ liệu của bảng Cars */
	function deleteCar($id) {
		global $db;
		$stmt = $db->prepare("DELETE FROM Cars WHERE id = ? ");
		$stmt->execute(array($id));
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	/* Chỉnh sửa 1 dòng dữ liệu Car */
	function editCar($id, $name, $year) {
		global $db;
		$stmt = $db->prepare("UPDATE Cars SET name = ?, year = ? WHERE id = ? ");
		$stmt->execute(array($name, $year, $id));
		echo $name;
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}