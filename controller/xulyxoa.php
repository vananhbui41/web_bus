<?php
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
$sql = "DELETE FROM TuyenXe WHERE MaTuyen = '{$MaTuyen}'";
    mysqli_query($conn, $sql);
    echo "Xóa thành công";
    header('location:admin/index.php');
?>