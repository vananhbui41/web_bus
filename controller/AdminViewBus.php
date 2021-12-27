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
    $sql="SELECT * FROM TuyenBuyt 
    INNER JOIN DiemDung on diemdung.MaDiemDung = tuyenbuyt.MaDiemDung 
    and MaTuyen='{$MaTuyen}'";
    $result2 = mysqli_query($conn, $sql);
    echo "<tbody><tr>";
    echo "<td>".$row['MaTuyen']."</td>";
    echo "<td>";
    while($row2 = mysqli_fetch_assoc($result2)){
      echo $row2['DiemDung']."<br>";
    }
    echo"</td>";
    echo "<td>".$row['TGChay']."-".$row['TGDung']."</td>";
    echo "<td>".$row['TGGianCach']." phút</td>";
    echo "<td>".$row['GiaVe']." đồng </td>";
    echo "<td> Xe ".$row['SoXe']."</td>";
    echo "<td><form method ='post'><button type='submit' name = '{$MaTuyen}sua'>Sửa</button></form></td>";
    echo "<td><form method ='post'><button type='submit' name = '{$MaTuyen}xoa'>Xóa</button></form></td>";
    echo "</tr>";
    echo "</tbody>";
  if(isset($_POST[$MaTuyen."xoa"])){
    $sql = "DELETE FROM TuyenXe WHERE MaTuyen = '{$MaTuyen}'";
    mysqli_query($conn, $sql);
    echo "Xóa thành công";
  }
  if(isset($_POST[$MaTuyen."sua"])){
    // $sql = "DELETE FROM TuyenXe WHERE MaTuyen = '{$MaTuyen}'";
    // mysqli_query($conn, $sql);
    // echo "Xóa thành công";
    // echo "<script>";
    // echo "document.getElementById('ViewBus').style.display='none'";
    // echo "document.getElementById('EditBus').style.display='block'";
    // echo "</script>";
  }
}
} else {
  echo "0 results";
}
?>