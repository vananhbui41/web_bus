<?php
//Khai báo sử dụng session
        require("../model/database.php");
        if (!isset($_POST['LogIn'])){
          die('');
        }
          $SĐT = $_POST['SĐT'];
          $MatKhau = $_POST['MatKhau'];
          $sql = "SELECT * FROM KhachHang WHERE SĐT = '{$SĐT}' AND MatKhau = '{$MatKhau}'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          echo "Thành công";
          //Lưu tên đăng nhập
          $row = $result->fetch_assoc();
          echo $row['HoTen'];
          $_SESSION['userInf']=$row;
          echo $_SESSION['userInf']['HoTen'];
          // output data of each row
          header('Location: user/home.php');
          } else {
            echo "Tên tài khoản hoặc mật khẩu không chính xác!!!";
          }
          $conn->close();
?>