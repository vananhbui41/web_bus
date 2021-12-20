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
    echo "<div class='col-md-4'>";
    echo "<div class='thumbnail'>";
    echo "<a href='images/xebuyt1.jpg' target='_blank'>";
    echo "<img src='images/xebuyt1.jpg' alt='Bus' style='width:100%'>";
    echo "<div class='caption'>";
    echo "<p>Chuyến số".$row['SoXe']."<br>Thời gian:".$row['TGChay']."-".$row['TGDung']."</p>";
    echo "</div>";
    echo "</a></div></div>";
  }
} else {
  echo "0 results";
}
?>