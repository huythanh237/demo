<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Kết nối Database
require 'connect.php';

$masv=$_GET['masv'];
$query=mysqli_query($conn,"select * from `sinhvien` where masv='$masv'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form">
<h2>Sửa thành viên</h2>
<label>Mã Sinh Viên: <input type="text" value="<?php echo $row['masv']; ?>" name="masv"></label><br/>
<label>Tên Sinh Viên: <input type="text" value="<?php echo $row['tensv']; ?>" name="tensv"></label><br/>
<label>Giới Tính: <input type="text" value="<?php echo $row['gioitinh']; ?>" name="gioitinh"></label><br/>
<label>Ngày Sinh: <input type="date" value="<?php echo $row['ngaysinh']; ?>" name="ngaysinh"></label><br/>
<label>Quê Quán: <input type="text" value="<?php echo $row['quequan']; ?>" name="quequan"></label><br/>
<label>Số Điện Thoại: <input type="number" value="<?php echo $row['sdt']; ?>" name="sdt"></label><br/>
<input type="submit" value="Update" name="update_user">

<?php

if (isset($_POST['update_user'])){
    $masv = $_POST["masv"];
    $tensv = $_POST["tensv"];
    $gioitinh = $_POST["gioitinh"];
    $ngaysinh = $_POST["ngaysinh"];
    $quequan = $_POST["quequan"];
    $sdt = $_POST["sdt"];

 
$sql = "UPDATE `sinhvien` SET tensv='$tensv', gioitinh='$gioitinh', ngaysinh='$ngaysinh', quequan='$quequan', sdt='$sdt' WHERE masv='$masv'";
 
if ($conn->query($sql) === TRUE) {
header("Location: index.php");
} else {
echo "Error updating record: " . $conn->error;
}
 
$conn->close();
}
?>
</form>
    
</body>
</html>