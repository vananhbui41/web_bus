<?php
$conn = new mysqli("localhost", "root", "", "bus");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql= "SELECT * FROM VeThang";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $MaVe = $row['MaVe'];
    $MaTuyen = $row['MaTuyen'];
    $MaKH = $row['MaKH'];
    $ThoiGian = $row['ThoiGian'];
    $Thang = $row['Thang'];
    $TrangThai = $row['TrangThai'];
    ?>
   <tbody><tr>
    <td><?php echo $MaVe; ?></td>
    <td><?php echo $MaTuyen; ?></td>
    <td><?php echo $MaKH; ?></td>
    <td><?php echo $ThoiGian; ?></td>
    <td><?php echo $Thang; ?></td>
    <td><?php if($TrangThai==1) echo "Chưa sử dụng"; else echo "Đã sử dụng"; ?></td>
    <td><form method = "post"><button type = "submit" name = "<?php echo $MaVe; ?>"> Duyệt </button></form></td>
    </tr>
    </tbody>
    <?php
  if(isset($_POST[$MaVe])){
    $sql = "UPDATE VeThang SET TrangThai = 0 WHERE MaVe = '{$MaVe}' ";
    if (mysqli_query($conn, $sql)) {
      echo "Update thành công";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } 
  }
}
} else {
  echo "0 results";
} 
?>