<div style="width: 40%; float:left">
    <form>
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
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <label for="Select" class="form-label">Chọn tuyến xe</label>
                    <select id="tuyenXe" class="form-select">
                    <?php 
            // require "../../../controller/Bus2.php"; 
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
            echo "<option name='$MaTuyen'>".$row['MaTuyen']."</option>";
            }
            }
            ?>
                    </select>

                    <label for="Select" class="form-label">Ngày nhận vé</label>
                    <input type="date" class="form-control" id="ticketday" name="NgayNhanVe" placeholder="mm/dd/yyyy">
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <label for="Select" class="form-label">Ngày nhận vé</label>
                    <input type="date" class="form-control" id="ticketday" name="NgayNhanVe" placeholder="mm/dd/yyyy">
                </div>
            </div>

        
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

<div style="width: 50%; float:right">
        <h1>Giá vé: </h1>
        <button type="submit" class="btn btn-primary">Thanh toán</button>
</div>