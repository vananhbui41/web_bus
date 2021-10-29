<?php 
require "header.php";
?>
	<!-- Phan than -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 text-white">
      <h3> Tìm đường </h3>
      <div class="form-group">
        <label>Điểm đi:</label>
        <input type="text" class="form-control" placeholder="Nhập điểm đi" name="diemdi">
      </div>
      <div class="form-group">
        <label>Điểm đến</label>
        <input type="text" class="form-control" placeholder="Nhập điểm đến" name="diemden">
      </div>
      <br>
      <h3> Tìm địa điểm </h3>
      <br>
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        Điểm bán vé
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#hompage.php">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
      </div>
      <br>
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        Điểm dừng 
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
      </div>
      <br>
    </div>
      <!--phần tiếp-->
    <div class="col-sm-9 bg-dark text-white">
      <h3>Các chuyến tiếp theo <br></h3>
        <div class="row">
        <div class="col-md-4">
        <div class="thumbnail">
         <a href="images/xebuyt1.jpg" target="_blank">
          <img src="images/xebuyt1.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Chuyến số 15<br>Thời gian:7h10</p>
          </div>
         </a>
        </div>
        </div>
        <div class="col-md-4">
        <div class="thumbnail">
        <a href="images/xebuyt1.jpg" target="_blank">
          <img src="images/xebuyt1.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Chuyến số 16<br>Thời gian:7h10</p>
          </div>
        </a>
        </div>
        </div>
        <div class="col-md-4">
        <div class="thumbnail">
        <a href="images/xebuyt3.jpg" target="_blank">
          <img src="images/xebuyt3.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Chuyến số 17<br>Thời gian:7h10</p>
          </div>
        </a>
        </div>
        </div>
        </div>
        <br>
        <h3>Các chuyến đã đi</h3>
        <div class="row">
        <div class="col-md-4">
        <div class="thumbnail">
        <a href="images/xebuyt1.jpg" target="_blank">
          <img src="images/xebuyt1.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Chuyến số 15<br>Thời gian:7h10</p>
          </div>
        </a>
        </div>
        </div>
        <div class="col-md-4">
        <div class="thumbnail">
        <a href="images/xebuyt1.jpg" target="_blank">
          <img src="images/xebuyt1.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Chuyến số 16<br>Thời gian:7h10</p>
          </div>
        </a>
        </div>
        </div>
        <div class="col-md-4">
        <div class="thumbnail">
        <a href="images/xebuyt3.jpg" target="_blank">
          <img src="images/xebuyt3.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Chuyến số 17<br>Thời gian:7h10</p>
          </div>
        </a>
        </div>
        </div>
        </div>
    </div>
</div>
  	<!--footer-->
<?php 
require "footer.php"
?>