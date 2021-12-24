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

//
if(isset($_POST['NapTien'])){
    $SoThe = $_POST['SoThe'];
    $SoTien = $_POST['SoTien'];
    $MaKH = $_SESSION['userInf']['MaKH'];
    $sql = "SELECT * FROM TheXeBuyt WHERE SoThe= '{$SoThe}' AND MaKH ='{$MaKH}'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $SoTienGoc = $row['SoDu'];
    $MaThe = $row['MaThe'];
    if($SoTien>0){
        $SoDu = $SoTienGoc + $SoTien;
        $sql = "UPDATE TheXeBuyt SET SoDu = '{$SoDu}' where MaThe ='{$MaThe}'";
        if (mysqli_query($conn, $sql)) {
            echo "Nạp tiền thành công";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Số tiền nhập vào không hợp lệ";
    }   
} else {
    echo "Số thẻ không chính xác";
}
}
?>