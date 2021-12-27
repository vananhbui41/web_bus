
<div id="ViewBus" style="display: block;">
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
                <tr>
                    <th>Tuyến xe</th>
                    <th>Điểm dừng</th>
                    <th>Thời gian hoạt động</th>
                    <th>Thời gian giãn cách</th>
                    <th>Giá vé</th>
                    <th>Số xe vận hành</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
</thead>
<?php
require('../../controller/AdminViewBus.php');
?>
</table>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
            </ul>
            <button class="w- btn btn-lg btn-primary" type="button" onclick= "changeBus1()">Thêm tuyến</button>
            
</div>
</div>
<div id="EditBus" style="display: none;">
<h2> Hello</h2>
</div>
<div id="ThemBus" style="display: none;">
<form method="post">
  <div class="form-group">
      <label>Mã Tuyến</label>
      <input type="text" class="form-control" id="fullName" name="MaTuyen" placeholder="Enter MaTuyen">
  </div>
  <br>
  <div class="form-group">
      <label>Số xe</label>
      <input type="number" class="form-control" name="SoXe" placeholder="Enter SoXe">
  </div>
  <br>
  <div class="form-group">
      <label>Thời Gian Chạy</label>
      <input type="time" class="form-control" name="TGChay" placeholder="Tgian">
  </div>
  <br>
  <div class="form-group">
      <label>Thời Gian Dừng</label>
      <input type="time" class="form-control"name="TGDung" placeholder="Tgian">
  </div>
  <br>
  <div class="form-group">
      <label>Thời Gian Giãn Cách</label>
      <input type="number" class="form-control"name="TGGianCach" placeholder="phút">
  </div>
  <br>
  <div class="form-group">
      <label>Giá Vé</label>
      <input type="number" class="form-control"name="GiaVe" placeholder="đồng">
  </div>
  <br>
  <button class="w- btn btn-lg btn-primary" onclick= "changeBus2()" type="submit">Hủy</button> 
  <button class="w- btn btn-lg btn-primary" name="CreateBus" type="submit">Thêm tuyến</button>           
</form>
<?php
require('../../controller/Bus.php');
?>