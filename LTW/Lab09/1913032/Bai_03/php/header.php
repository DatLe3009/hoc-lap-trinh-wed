<?php
	require_once 'php/init.php';
	$currentPage = detectPage();
	global $currentUser;
	
	// Đặt title page
  $title = '';
  switch($currentPage) {
    case 'login':
      $title = 'Login';
      break;
    case 'info':
      $title = 'Info';
      break;
    default:
      $title = 'Lab 09';
      break;
  }
?>

<!doctype html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Lab 09</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<?php if(!$currentUser): ?>
          <a class="nav-item nav-link <?php if($currentPage == 'login') echo 'active'; ?>" href="login.php">Đăng nhập</a>
				<?php endif; ?>
				<a class="nav-item nav-link <?php if($currentPage == 'info') echo 'active'; ?>"" href="info.php">Thông tin cá nhân</a>
				<?php if($currentUser): ?>
        <a class="nav-item nav-link" href="logout.php">Đăng xuất</a>
        <?php endif; ?>
			</div>
		</div>
	</nav>