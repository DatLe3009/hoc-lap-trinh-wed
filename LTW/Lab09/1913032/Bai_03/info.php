<?php
	require_once 'php/init.php';
	
	global $currentUser;
	if($currentUser == null) {
		header('Location: login.php');
		exit();
	}
	$birthday = strtotime($currentUser['birthday']);
?>

<?php include 'php/header.php'; ?>

<h1 class="text-center">Thông tin cá nhân</h1>
<ul>
  <li>Tên tài khoản: <?php echo $currentUser['username']; ?></li>
  <li>Tên hiển thị: <?php echo $currentUser['displayName']; ?> </li>
  <li>Ngày sinh: <?php echo date('d/m/Y', $birthday); ?> </li>
  <li>Giới tính: <?php echo (($currentUser['sex'] == 1) ? 'Nam' : 'Nữ'); ?> </li>
  <li>Địa chỉ: <?php echo $currentUser['address']; ?> </li>
</ul>

<?php include 'php/footer.php'; ?>