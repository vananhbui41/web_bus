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
$sql= "SELECT * FROM KhachHang";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tbody><tr>";
    echo "<td>".$row['MaKH']."</td>";
    echo "<td>".$row['HoTen']."</td>";
    echo "<td>".$row['NgaySinh']."</td>";
    echo "<td>".$row['SĐT']."</td>";
    echo "<td>".$row['DiaChi']."</td>";
    echo "<td>null</td>";
    echo "<td>Sửa</td>";
    echo "<td><input type='checkbox'></td>";
    echo "</tr>";
    echo "</tbody>";
  }
} else {
  echo "0 results";
}
?>