<?php
        
        require "connect.php";
        
        $masv = $_GET['masv'];

        $sql = "delete from sinhvien where masv='$masv'";

        mysqli_query($conn, $sql);

        header('Location: index.php');
