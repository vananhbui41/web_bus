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
    $MaKH = $_SESSION['userInf']['MaKH'];
    $sql = "SELECT * FROM TheXeBuyt WHERE MaKH ='{$MaKH}'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    $_SESSION['theInf'] = $row;
?>