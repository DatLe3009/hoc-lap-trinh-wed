<?php
	require_once 'php/init.php';

	$checkLogin = true;
  if(isset($_POST['btnLogin'])) {
    $userInput = $_POST['txtUsername'];
    $passwordInput = $_POST['txtPassword'];
    $resultFindUser = findUserByUsername($userInput);
    if($resultFindUser == false) {
	    $checkLogin = false;
    }
    else {
      if($passwordInput != $resultFindUser['password']) {
	      $checkLogin = false;
      }
      else {
	      $_SESSION['userId'] = $resultFindUser['username'];
	      header('Location: info.php');
      }
    }
  }
?>

<?php include 'php/header.php'; ?>
    
<h1 class="text-center">Đăng nhập</h1>
<?php if(!$checkLogin): ?>
<div class="alert alert-danger text-center">
  <strong>Đăng nhập thất bại!</strong> Tên tài khoản hoặc mật khẩu không chính xác!
</div>
<?php endif; ?>
<form class="frmLogin" action="" method="POST">
  <div class="form-group row">
    <label class="col-form-label col-3 text-right" for="username">Tên tài khoản:</label>
    <input type="text" class="form-control col-9" onfocus="this.placeholder=''" onblur="this.placeholder='Nhập tên tài khoản'" placeholder="Nhập tên tài khoản" id="username" name="txtUsername">
  </div>
  <div class="form-group row">
    <label class="col-form-label col-3 text-right" for="pwd">Mật khẩu:</label>
    <input type="password" class="form-control col-9" onfocus="this.placeholder=''" onblur="this.placeholder='Nhập mật khẩu'" placeholder="Nhập mật khẩu" id="pwd" name="txtPassword">
  </div>
  <div class="form-group row">
    <button type="submit" class="btn btn-primary offset-3" name="btnLogin">Đăng nhập</button>
  </div>
</form>

<?php include 'php/footer.php'; ?>