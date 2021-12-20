<?php
//Khai báo sử dụng session
        require("../model/database.php");
        if (!isset($_POST['SignUp'])){
          die('');
        }
          $SĐT = $_POST['SĐT'];
          $HoTen = $_POST['HoTen'];
          $MatKhau1 = $_POST['MatKhau1'];
          $MatKhau2 = $_POST['MatKhau2'];
          $sql = "SELECT * FROM KhachHang WHERE SĐT = '{$SĐT}'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              echo "SĐT đã tồn tại!!!!";
          } else {
          if($MatKhau1===$MatKhau2){
          $sql = "INSERT INTO KhachHang (SĐT, MatKhau, HoTen) VALUES ( '{$SĐT}', '{$MatKhau1}', '{$HoTen}' )";
                if (mysqli_query($conn, $sql)) {
                    echo "Tạo tài khoản thành công";
                    header('Location: login.php');
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
          } else {
            echo "Nhập thông tin!!!";
          }
        }
        $conn->close();
?>