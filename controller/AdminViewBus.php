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
$sql= "SELECT * FROM TuyenXe";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $MaTuyen = $row['MaTuyen'];
    echo "<tbody><tr>";
    echo "<td>".$row['MaTuyen']."</td>";
    echo "<td>Bến xe Giáp Bát,Đại học Bách Khoa,</td>";
    echo "<td>".$row['TGChay']."-".$row['TGDung']."</td>";
    echo "<td>".$row['TGGianCach']." phút</td>";
    echo "<td>".$row['GiaVe']."</td>";
    echo "<td>".$row['SoXe']."</td>";
    echo "<td>Sửa</td>";
    echo "<td><form method ='post'><button type='submit' name = '{$MaTuyen}'>Xóa</button></form></td>";
    echo "</tr>";
    echo "</tbody>";
  if(isset($_POST[$MaTuyen])){
    $sql = "DELETE FROM TuyenXe WHERE MaTuyen = '{$MaTuyen}'";
    mysqli_query($conn, $sql);
    echo "Xóa thành công";
  }
}
} else {
  echo "0 results";
}
?>