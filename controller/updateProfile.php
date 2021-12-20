<?php
//Khai báo sử dụng session
        require("../../model/database.php");
        if (!isset($_POST['Update'])){
          die('');
        }
        $HoTen = $_POST['HoTen'];
        $GioiTinh = $_POST['GioiTinh'];
        $DiaChi = $_POST['DiaChi'];
        $NgaySinh = $_POST['NgaySinh'];
        if (!$HoTen|| !$GioiTinh || !$DiaChi || !$NgaySinh){
        echo "Vui lòng nhập đầy đủ thông tin";
        } else {
        $MaKH = $_SESSION['userInf']['MaKH'];
        $sql = "UPDATE KhachHang SET HoTen='{$HoTen}', GioiTinh='{$GioiTinh}', DiaChi='{$DiaChi}', NgaySinh='{$NgaySinh}' WHERE MaKH=$MaKH";
        if (mysqli_query($conn, $sql)) {
            echo "Update thành công";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
       }
?>