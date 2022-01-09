<div style="width: 100%; float:left">
              <h4>Vé thường</h4>
              <div class="mb-3">
                <form method ="post">
                <label for="tuyến" class="form-label">Mã Tuyến:</label>
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
              <div class="mb-3">
                  <label for="formGiaThuong" class="form-label">Giá vé</label>
                  <input type="number" class="form-control" id="formGiaThuong" name= "GiaThuong" placeholder="VNĐ/lượt">
              </div>
              <br>
              <button class="w- btn btn-lg btn-primary" type="submit" name ="updateThuong">Cập nhật</button>
              </form>
              <?php
                if(isset($_POST['updateThuong'])){
                  $MaTuyen = $_POST['tuyenxe'];
                  $GiaVe = $_POST['GiaThuong'];
                  $sql = "UPDATE TuyenXe SET GiaVe='{$GiaVe}' WHERE MaTuyen= '{$MaTuyen}'";
                  if (mysqli_query($conn, $sql)) {
                    echo "<br>Update thành công";
                  } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                }
              ?>
            </div>


            <div style="width: 100%; float: right;">
              <h4>Vé tháng</h4>
              <div class="mb-3">
                <form method="post">
                <label for="form1tuyen" class="form-label">Một tuyến</label>
                <input type="number" class="form-control" id="form1tuyen" name="GiaMotTuyen" placeholder="VNĐ/tháng">
                <br>
                <button class="w- btn btn-lg btn-primary" type="submit" name ="updateMotTuyen">Cập nhật</button>
                </form>
                <?php
                if(isset($_POST['updateMotTuyen'])){
                  $GiaVe = $_POST['GiaMotTuyen'];
                  $sql = "UPDATE LoaiVeThang SET GiaVe='{$GiaVe}' WHERE MaLoaiVe= 1";
                  if (mysqli_query($conn, $sql)) {
                    echo "<br>Update thành công";
                  } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                }
              ?>
              </div>
              <div class="mb-3">
                <form method="post">
                <label for="formLienTuyen" class="form-label">Liên tuyến</label>
                <input type="text" class="form-control" id="formLienTuyen" name="GiaLienTuyen" placeholder="VNĐ/tháng">
                <br>
              <button class="w- btn btn-lg btn-primary" type="submit" name ="updateLienTuyen">Cập nhật</button>
              </form>
              <?php
                if(isset($_POST['updateLienTuyen'])){
                  $GiaVe = $_POST['GiaLienTuyen'];
                  $sql = "UPDATE LoaiVeThang SET GiaVe='{$GiaVe}' WHERE MaLoaiVe= 2";
                  if (mysqli_query($conn, $sql)) {
                    echo "<br>Update thành công";
                  } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                }
              ?>
              </div>
            </div>