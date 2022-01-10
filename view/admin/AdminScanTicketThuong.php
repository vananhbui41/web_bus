<table id="user" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Mã vé</th>
      <th>Mã Tuyến</th>
      <th>Mã Khách Hàng</th>
      <th>Thời Gian</th>
      <th>Trạng Thái</th>
      <th> Duyệt </th>
    </tr>
  </thead>
  <?php
    require('../../controller/AdminScanTicketThuong.php');
  ?>            
</table>
<br>
</br>
<h2>Nhập Mã Vé </h2>
<form method = "post">
<input type="number" name="MaVe">
<br></br>
<button class="w- btn btn-lg btn-primary" type="submit" name="Duyet">Duyệt</button>
<br>
</form>
<?php
if(isset($_POST["Duyet"])){
  $conn = new mysqli("localhost", "root", "", "bus");
  $MaVe = $_POST['MaVe'];
  $sql = "SELECT TrangThai FROM VeThuong WHERE MaVe = '{$MaVe}'";
  $result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $TrangThai = $row['TrangThai'];
    if($TrangThai==1){
      $sql = "UPDATE VeThuong SET TrangThai = 0 WHERE MaVe = '{$MaVe}' ";
      if (mysqli_query($conn, $sql)) {
        echo "Update thành công";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      } 
    } else {
      echo "Vé đã sử dụng";
    }
    }
  }
?>