<div style="width: 40%; float:left">
    <form>
        <legend><h1>Mua vé thường</h1></legend>
        <div class="mb-3">
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
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

<div style="width: 50%; float:right">
        <h1>Giá vé: </h1>
        <button type="submit" class="btn btn-primary">Thanh toán</button>
</div>