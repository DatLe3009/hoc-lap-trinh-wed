<?php
  require_once('php/init.php');
  
  // Lấy tất cả dữ liệu từ bảng Cars
  $cars = getCars();
  
  // Thêm Car vào bảng Cars
  $check = true;
  if(isset($_POST['btnOk'])) {
    $check = true;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $year = $_POST['year'];
	  $pattern1 = "/^[0-9]+$/i";
    if(preg_match($pattern1, $id) && strlen($name) >= 5 && strlen($name) <= 40 && preg_match($pattern1, $year) && $year >= 1990 && $year <= 2015) {
	    addCar($id, $name, $year);
	    header("Refresh:0");
    }
    else $check = false;
  }
  
  // Xóa car
  if(isset($_POST['btnDel'])) {
    $id = $_POST['car_id'];
    deleteCar($id);
	  header("Refresh:0");
  }
?>

<!doctype html>
<html lang="vi">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab 07 - 1513804 - Nguyễn Xuân Trực</title>
  </head>
  <body>
    <div class="container">
      <button class="btn btn-primary btnAddNew">Thêm mới</button>
      <?php if(!$check): ?>
      <div class="alert alert-danger">
        <strong>Thất bại!</strong> Vui lòng kiểm tra dữ liệu đã nhập
      </div>
      <?php endif; ?>
      <form class="formAddNew d-none" action="" method="POST">
        <div class="form-group row">
          <label class="col-3 text-right col-form-label" for="name">Nhập ID:</label>
          <input type="text" class="form-control col-7" id="id" name="id" onfocus="this.placeholder=''" onblur="this.placeholder='Thuộc kiếu số nguyên'" placeholder="Thuộc kiếu số nguyên">
        </div>
        <div class="form-group row">
          <label class="col-3 text-right col-form-label" for="name">Nhập Tên:</label>
          <input type="text" class="form-control col-7" id="name" name="name" onfocus="this.placeholder=''" onblur="this.placeholder='Thuộc kiểu chuỗi, độ dài 5 - 40 kí tự'" placeholder="Thuộc kiểu chuỗi, độ dài 5 - 40 kí tự">
        </div>
        <div class="form-group row">
          <label class="col-3 text-right col-form-label" for="year">Nhập Năm:</label>
          <input type="text" class="form-control col-7" id="year" name="year" onfocus="this.placeholder=''" onblur="this.placeholder='Thuộc kiểu số nguyên'" placeholder="Thuộc kiểu số nguyên">
        </div>
        <div class="form-group row">
          <div class="offset-3">
            <button name="btnOk" class="btn btn-secondary">OK</button>
          </div>
        </div>
      </form>
      <table class="table table-hover">
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>YEAR</th>
          <th>THAO TÁC</th>
        </tr>
		    <?php foreach($cars as $car): ?>
        <tr>
          <td><?php echo $car['id']; ?></td>
          <td><?php echo $car['name']; ?></td>
          <td><?php echo $car['year']; ?></td>
          <td class="d-flex">
            <form action="" method="POST">
              <input type="text" value="<?php echo $car['id']; ?>" name ="car_id" hidden>
              <button name="btnDel" type="submit" class="btn btn-outline-danger btn-sm">Xóa</button>
            </form>
            <form action="edit.php" method="POST">
              <input type="text" value="<?php echo $car['id']; ?>" name ="car_id" hidden>
              <input type="text" value="<?php echo $car['name']; ?>" name ="car_name" hidden>
              <input type="text" value="<?php echo $car['year']; ?>" name ="car_year" hidden>
              <button name="btnEdit" type="submit" class="btn btn-outline-info btn-sm">Sửa</button>
            </form>
          </td>
        </tr>
		    <?php endforeach; ?>
      </table>
    </div>
  
    <script src="js/fun.js"></script>
  </body>
</html>