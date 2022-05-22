<?php
// Khởi tạo mảng chứa các lỗi
$arrErr = array();

// Kiểm tra First name và Last Name
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
if(strlen($firstName) < 2 || strlen($firstName) > 30) {
    array_push($arrErr, "First name phải có từ 2 - 30 kí tự");
}
if(strlen($lastName) < 2 || strlen($lastName) > 30) {
    array_push($arrErr, "Last name phải có từ 2 - 30 kí tự");
}

// Kiểm tra Email
$email = $_POST["email"];
$check = preg_match("/^.*@.*\..*/i", $email);
if($check == 0) {
    array_push($arrErr, "Email chưa đúng định dạng sth@sth.sth");
}

// Kiểm tra Password
$password = $_POST["password"];
if(strlen($password) < 2 || strlen($password) > 30) {
    array_push($arrErr, "Password phải có từ 2 - 30 kí tự!");
}

// Kiểm tra Birthday
if(!isset($_POST["day"]) || !isset($_POST["month"]) || !isset($_POST["year"])) {
    array_push($arrErr, "Bạn chưa nhập Birthday!");
}
else {
    $day    = $_POST["day"];
    $month  = $_POST["month"];
    $year   = $_POST["year"];
    $checkDate = checkdate($month, $day, $year);
    if(!$checkDate) {
        array_push($arrErr, "Birthday không hợp lệ!");
    }
}

// Kiểm tra About
$about = $_POST["about"];
if(strlen($about) > 10000) {
    array_push($arrErr, "About phải ít hơn 10.000 kí tự!");
}