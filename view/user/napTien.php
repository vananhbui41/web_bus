<html><head>
<meta charset="UTF-8">
<title>Nạp thẻ</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
<div class="row" style="margin-top: 50px;">
<div class="col-md-8" style="float:none;margin:0 auto;">
<form method="POST" id="nap_form" action="">
<div class="form-group">
<label>Tên nhân vật:</label>
<input type="text" class="form-control" name="username" placeholder="Phân biệt chữ Hoa và chữ thường">
</div>
<div class="form-group">
<label>Loại thẻ:</label>
<select class="form-control" name="card_type">
<option value="">Chọn loại thẻ</option>
<option value="1">Viettel</option>
<option value="2">Mobifone</option>
</select>
</div>
<div class="form-group">
<label>Mệnh giá:</label>
<select class="form-control" name="card_amount">
<option value="">Chọn mệnh giá</option>
<option value="10000">10.000</option>
<option value="20000">20.000</option>
<option value="30000">30.000</option>
<option value="50000">50.000</option>
<option value="100000">100.000</option>
<option value="200000">200.000</option>
<option value="300000">300.000</option>
<option value="500000">500.000</option>
</select>
</div>
<div class="form-group">
<label>Số seri:</label>
<input type="number" class="form-control" name="serial">
</div>
<div class="form-group">
<label>Mã thẻ:</label>
<input type="number" class="form-control" name="pin">
</div>
<div class="form-group">
</div>
<div class="form-group">
<button type="submit" class="btn btn-success btn-block" id="nap_button" name="submit">NẠP THẺ</button>
</div>
</form>
</div>
</div>
</div>
<div id="loading" style="display: none;">
<center>
<p><font color="red"></font></p><h2><font color="red">Đang xử lý...</font></h2><p></p>
<img src="loading.gif" width="60/">
</center>
</div>
<script>
$("#nap_button").click(function() {
$(".container").hide();
$("#loading").show();
});
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body></html>