<div style="width: 40%; float:left">
    <form method="post">
        <legend><h1>Mua vé thường</h1></legend>
        <div class="mb-3">
        <label for="Select" class="form-label">Chọn tuyến xe</label>
        <select id="tuyenXe" name="tuyenxe" class="form-select">
            <?php 
            $conn = new mysqli("localhost", "root", "", "bus");
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql= "SELECT * FROM TuyenXe";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            $MaTuyen = $row['MaTuyen'];
            ?>
            <option value="<?php echo $MaTuyen?>"><?php echo $MaTuyen?></option>";
            <?php
            }
            }
            ?>
        </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
    </form>
</div>

<div style="width: 50%; float:right">
        <h1>Giá vé: 
        <?php
     if(isset($_POST['submit'])){ 
      $MaTuyen = $_POST['tuyenxe'];
      $sql = "SELECT GiaVe FROM TuyenXe WHERE MaTuyen='{$MaTuyen}'";
      $result = mysqli_query($conn,$sql);
      if (mysqli_num_rows($result) > 0){
          $row = mysqli_fetch_assoc($result);
          $_SESSION['GiaVe'] = $row['GiaVe'];
          echo $row['GiaVe'].' đồng'; 
      }
     }
    ?>
        </h1>
    <form method="post">
    <button type="submit" name="ThanhToan" class="btn btn-primary">Thanh toán</button>
    </form>
    <?php
        if(isset($_POST['ThanhToan'])) {
            $MaKH = $_SESSION['userInf']['MaKH'];
            $ThoiGian = date("h:i:s");
            $sql = "SELECT SoDu FROM TheXeBuyt WHERE MaKH = '{$MaKH}'";
            $result = mysqli_query($conn,$sql);
            if ($result != null){
                $row = mysqli_fetch_assoc($result);
                $SoDu = $row['SoDu'] - $_SESSION['GiaVe'];
                if ($SoDu > 0) {
                $sql = "UPDATE TheXeBuyt SET SoDu = '{$SoDu}'";
                mysqli_query($conn, $sql);
                $sql = "INSERT INTO VeThuong(MaTuyen, MaKH, ThoiGian, TrangThai) VALUES ('{$MaTuyen}','{$MaKH}','{$ThoiGian}',1)";
                    if (mysqli_query($conn, $sql)) {
                        echo "Mua vé thành công";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                } else {
                echo "Không đủ tiền để thanh toán";
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    ?>
</div>