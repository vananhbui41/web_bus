<?php
//Khai báo sử dụng session
        // require("../model/database.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
        if (isset($_POST['CreateBus'])){
          $MaTuyen = $_POST['MaTuyen'];
          $SoXe = $_POST['SoXe'];
          $TGChay = $_POST['TGChay'];
          $TGDung = $_POST['TGDung'];
          $TGGianCach = $_POST['TGGianCach'];
          $GiaVe = $_POST['GiaVe'];
          if (!$MaTuyen|| !$SoXe || !$TGChay || !$TGGianCach || !$TGDung || !$GiaVe){
            echo "Nhập thông tin đầy đủ";
          } else {
          $sql = "INSERT INTO TuyenXe (MaTuyen, SoXe, TGChay, TGDung, TGGianCach, GiaVe) VALUES ( '{$MaTuyen}', '{$SoXe}', '{$TGChay}', '{$TGDung}', '{$TGGianCach}', '{$GiaVe}')";
          if (mysqli_query($conn, $sql)) {
            echo "Tạo tuyến xe thành công";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          }
          $conn->close();
         }
?>