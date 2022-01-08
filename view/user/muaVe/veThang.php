<div>
<div style="width: 40%; float:left">
        <legend><h1>Mua vé tháng</h1></legend>
        <div class="mb-3">
            
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Một tuyến</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Liên tuyến</button>
            </li>
        </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- // một tuyến -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form method = "post">
                    <label for="Select" class="form-label">Chọn tuyến xe</label>
                    <select name ="tuyenxe" class="form-select">
                        <?php 
                            $conn = new mysqli("localhost", "root", "", "bus");
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
                                    ?>
                                    <option value="<?php echo $MaTuyen?>"><?php echo $MaTuyen?></option>";
                                    <?php
                                }
                            }
                        ?>
                    </select>
                    <label for="Select" class="form-label">Tháng</label>
                    <select name="Thang" class = "form-select">
                    <?php for($i=1;$i<=12; $i++){?>
                        <option value="<?php echo $i; ?>"> Tháng <?php echo $i; ?></option>
                    <?php } ?>
                    </select>
                    <br></br>
                    <button type="submit" name="MuaMotTuyen" onclick="changeMuaVeThang()" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- // liên tuyến -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <form method = "post">
                    <label for="Select" class="form-label">Tháng</label>
                    <select name="Thang" class = "form-select">
                    <?php for($i=1;$i<=12; $i++){?>
                        <option value="<?php echo $i; ?>"> Tháng <?php echo $i; ?></option>
                    <?php } ?>
                    </select>
                    <br></br>
                    <button type="submit" name="MuaLienTuyen" onclick="changeMuaVeThang()" class="btn btn-primary">Submit</button>
                </form>                               
                </div>
            </div>

        
        </div>
    </div>

<div style="width: 50%; float:right">
        <h1>Giá vé: 
            <?php
            if(isset($_POST['MuaMotTuyen'])) {
                $GiaVe = 50000;
                $_SESSION['GiaVe']=$GiaVe;
                $Thang = $_POST['Thang'];
                $_SESSION['Thang'] = $Thang;
                $MaTuyen = $_POST['tuyenxe'];
                $_SESSION['MaTuyen'] = $MaTuyen;
                echo $GiaVe.' đồng';            
            }
            if(isset($_POST['MuaLienTuyen'])) {
                $GiaVe = 100000;
                $_SESSION['GiaVe']=$GiaVe;
                $Thang = $_POST['Thang'];
                $_SESSION['Thang'] = $Thang;
                $MaTuyen = null;
                $_SESSION['MaTuyen'] = $MaTuyen;
                echo $GiaVe.' đồng';             
            }
            ?>
        </h1>
        <form method="post">
    <button type="submit" name="ThanhToan2" class="btn btn-primary" onclick="changeMuaVeThang()">Thanh toán</button>
    </form>
    <?php
        if(isset($_POST['ThanhToan2'])) {
            $MaKH = $_SESSION['userInf']['MaKH'];
            $ThoiGian = date("h:i:s");
            $Thang = $_SESSION['Thang'];
            $MaTuyen = $_SESSION['MaTuyen'];
            $sql = "SELECT SoDu FROM TheXeBuyt WHERE MaKH = '{$MaKH}'";
            $result = mysqli_query($conn,$sql);
            if ($result != null){
                $row = mysqli_fetch_assoc($result);
                $SoDu = $row['SoDu'] - $_SESSION['GiaVe'];
                if ($SoDu > 0) {
                $sql = "UPDATE TheXeBuyt SET SoDu = '{$SoDu}'";
                mysqli_query($conn, $sql);
                $sql = "INSERT INTO VeThang(MaTuyen, MaKH, ThoiGian, Thang) VALUES ('{$MaTuyen}','{$MaKH}','{$ThoiGian}', '{$Thang}')";
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
<script>
      function changeMuaVeThang() {
      document.getElementById('MuaVeThuong').style.display='none';
      document.getElementById('MuaVeThang').style.display='block';
      }
      function changeMuaVeThuong() {
      document.getElementById('MuaVeThuong').style.display='block';
      document.getElementById('MuaVeThang').style.display='none';
      }
  </script>
  </div>