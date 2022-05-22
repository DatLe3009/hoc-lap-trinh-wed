<?php
    $num_a = $num_b = $operator = $result = "";
    if(isset($_POST["btnCulculate"])) {
        $num_a      = $_POST["num_a"];
        $num_b      = $_POST["num_b"];
        $operator   = $_POST["operator"];
        switch ($operator) {
            case '+':
                $result = $num_a + $num_b;
                break;
            case '-':
                $result = $num_a - $num_b;
                break;
            case '*':
                $result = $num_a * $num_b;
                break;
            case '/':
                $result = $num_a / $num_b;
                break;
            case '^':
                $result = pow($num_a, $num_b);
                break;
            case '!':
                $result = "a = " . $num_b . ", b = " . $num_a;
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 06 - Bài 05 </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <form id="culculator" method="POST" action="index.php">
        <div class="form-group row">
            <label for="num_a" class="col-sm-2 col-form-label">Số a:</label>
            <div class="col-sm-10">
                <input value="<?php if(!empty($num_a)) echo $num_a; ?>" type="text" class="form-control" name="num_a" id="num_a" onfocus="this.placeholder=''" onblur="this.placeholder='Nhập số a'" placeholder="Nhập số a">
            </div>
        </div>

        <div class="form-group row">
            <label for="num_b" class="col-sm-2 col-form-label">Số b:</label>
            <div class="col-sm-10">
                <input value="<?php if(!empty($num_b)) echo $num_b; ?>" type="text" class="form-control" name="num_b" id="num_b" onfocus="this.placeholder=''" onblur="this.placeholder='Nhập số b'" placeholder="Nhập số b">
            </div>
        </div>

        <div class="form-group row">
            <label for="operator" class="col-sm-2 col-form-label">Phép toán:</label>
            <div class="col-sm-10">
                <select class="custom-select my-1 mr-sm-2" name="operator" id="operator">
                    <option value="+" <?php if($operator == '+') echo "selected"; ?>>+</option>
                    <option value="-"  <?php if($operator == '-') echo "selected"; ?>>-</option>
                    <option value="*"  <?php if($operator == '*') echo "selected"; ?>>*</option>
                    <option value="/"  <?php if($operator == '/') echo "selected"; ?>>/</option>
                    <option value="^"  <?php if($operator == '^') echo "selected"; ?>>^</option>
                    <option value="!"  <?php if($operator == '!') echo "selected"; ?>>Nghịch đảo</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-2">
                <button name="btnCulculate" class="btn btn-primary" style="width: 100px;">Tính</button>
            </div>
        </div>

        <div class="form-group row">
            <label for="result" class="col-sm-2 col-form-label">Kết quả:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly id="result" value="<?php echo $result; ?>">
            </div>
        </div>
    </form>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>