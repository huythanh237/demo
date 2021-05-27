<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css" >
    <script src="index.js"></script>
    <title>Quản Lý Sinh Viên</title>
</head>
<body>
    <!-- Button trigger modal
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="form">
        <form method="post" action="insert.php">
        <label>Nhập Mã Sinh Viên:</label>
        <input type="text" name="masv" id="masv"><br>
        <label>Nhập Tên Sinh Viên:</label>
        <input type="text" name="tensv" id="tensv"><br>
        <label>Nhập Giới Tính:</label>
        <input type="text" name="gioitinh" id="gioitinh"><br>
        <label>Nhập Ngày Sinh:</label>
        <input type="date" name="ngaysinh" id="ngaysinh"><br>
        <label>Nhập Quê Quán:</label>
        <input type="text" name="quequan" id="quequan"><br>
        <label>Nhập SĐT:</label>
        <input type="number" name="sdt" id="sdt"><br>
        <button type="submit" name="bTnSubmit">Thêm sinh viên</button>
        </form>
        <!-- <?php
            // require "connect.php";
            
            // session_start();
            
            // if(array_key_exists('message',$_SESSION)){
            //     $message = $_SESSION['message'];
            //     echo $message;
            //     $_SESSION['message']= "";

            // }
            // $sql = "select * from sinhvien";

            // $result = $conn->query($sql);
        // ?> 
      <!-- </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --> 
    <div class="form">
        <form method="post" action="insert.php">
        <label>Nhập Mã Sinh Viên:</label>
        <input type="text" name="masv" id="masv"><br>
        <label>Nhập Tên Sinh Viên:</label>
        <input type="text" name="tensv" id="tensv"><br>
        <label>Nhập Giới Tính:</label>
        <input type="text" name="gioitinh" id="gioitinh"><br>
        <label>Nhập Ngày Sinh:</label>
        <input type="date" name="ngaysinh" id="ngaysinh"><br>
        <label>Nhập Quê Quán:</label>
        <input type="text" name="quequan" id="quequan"><br>
        <label>Nhập SĐT:</label>
        <input type="number" name="sdt" id="sdt"><br>
        <button type="submit" name="bTnSubmit">Thêm sinh viên</button>
        </form>
        <?php
            require "connect.php";
            
            session_start();
            
            if(array_key_exists('message',$_SESSION)){
                $message = $_SESSION['message'];
                echo $message;
                $_SESSION['message']= "";

            }
            $sql = "select * from sinhvien";

            $result = $conn->query($sql);
        ?>
    </div> -->
    <div class="content">
        <center><h1>Danh Sách Sinh Viên</h1></center>
        <table width="100%" border="1px" cellpadding="10" cellspacing="0">
            <tr>
                <td>Mã SV</td>
                <td>Tên SV</td>
                <td>Giới Tính</td>
                <td>Ngày Sinh</td>
                <td>Quê Quán</td>
                <td>Số Điện Thoại</td>
                <td>Action</td>
            </tr>
        <?php foreach($result as $item){ ?>
            <tr>
                <td><?php echo $item['masv']?></td>
                <td><?php echo $item['tensv']?></td>
                <td><?php echo $item['gioitinh']?></td>
                <td><?php echo $item['ngaysinh']?></td>
                <td><?php echo $item['quequan']?></td>
                <td><?php echo $item['sdt']?></td>
                <td><a href="edit.php?masv=<?php echo $item['masv']?>">Sửa</a>
                <a href="delete.php?masv=<?php echo $item['masv'];?>" onClick="return confirm('Ban co muon xoa khong?');">Xóa</a></td>
            </tr>
        <?php } ?>
        </table>
    </div>
    
</body>
</html>