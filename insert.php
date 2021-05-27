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
        require "connect.php";
        
    // define variables and set to empty values
        $masv = $tensv = $gioitinh = $ngaysinh = $quequan = $sdt = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $masv = $_POST["masv"];
            $tensv = $_POST["tensv"];
            $gioitinh = $_POST["gioitinh"];
            $ngaysinh = $_POST["ngaysinh"];
            $quequan = $_POST["quequan"];
            $sdt = $_POST["sdt"];
    }
        $sql = "insert into sinhvien values ('$masv','$tensv','$gioitinh','$ngaysinh','$quequan','$sdt')";
        
        if($conn->query($sql)){
            session_start();
            $_SESSION["message"] = 'ok';
            var_dump($_SESSION);
            header('Location: index.php');
            exit;
        }else{
            echo "<h1>Add unsuccessful!</h1>";
        }
    
    ?>
    
</body>
</html>