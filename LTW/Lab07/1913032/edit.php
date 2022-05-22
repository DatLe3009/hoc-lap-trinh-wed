<?php
	require_once('php/init.php');
	
	$id = $name = $year = '';
	$check = true;
	if(!isset($_POST['btn-edit'])) {
		$id = $_POST['car_id'];
		$name = $_POST['car_name'];
		$year = $_POST['car_year'];
  }
	else {
		$id_new = $_POST['id-edit'];
		$name_new = $_POST['name-edit'];
		$year_new = $_POST['year-edit'];
		$pattern1 = "/^[0-9]+$/i";
		if(preg_match($pattern1, $id_new) && strlen($name_new) >= 5 && strlen($name_new) <= 40 && preg_match($pattern1, $year_new) && $year_new >= 1990 && $year_new <= 2015) {
			editCar($id_new, $name_new, $year_new);
			header('Location: index.php');
		}
		else $check = false;
	}
?>

<!doctype html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
  <title>Chỉnh sửa</title>
</head>
<body>
	<div class="container">
		<?php if(!$check): ?>
      <div class="alert alert-danger">
        <strong>Thất bại!</strong> Vui lòng kiểm tra dữ liệu đã nhập
      </div>
		<?php endif; ?>
		<form class="formEdit" action="" method="POST">
			<div class="form-group row">
				<label class="col-3 text-right col-form-label" for="id-edit">ID:</label>
				<input type="number" class="form-control col-7" id="id-edit" name="id-edit" value="<?php echo $id; ?>">
			</div>
			<div class="form-group row">
				<label class="col-3 text-right col-form-label" for="name-edit">Nhập Tên:</label>
				<input type="text" class="form-control col-7" id="name-edit" name="name-edit" value="<?php echo $name; ?>">
			</div>
			<div class="form-group row">
				<label class="col-3 text-right col-form-label" for="year-edit">Nhập Năm:</label>
				<input type="number" class="form-control col-7" id="year-edit" name="year-edit" value="<?php echo $year; ?>">
			</div>
			<div class="form-group row">
				<div class="offset-3">
					<button name="btn-edit" class="btn btn-secondary" style="submit">Sửa</button>
				</div>
			</div>
		</form>
	</div>
	
	<script src="js/fun.js"></script>
</body>
</html>