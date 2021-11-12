<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Bus</title>
	<link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="public/assets/css/myCss.css">
	<link rel="stylesheet" href="public/assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap-datepicker.min.css">
	<script type="text/javascript" src="public/assets/js/jquery-3.2.1.min.js"></script>
	<style type="text/css">
		.error{
			color: red; font-style: italic; font-size: 12px;
		}
		body{
			background-color: #fafafa;
		}
		.bg1 {
			background-image: url("images/bg1.jpg");
		}
		.bg2 {
			background-color: black;
		}
	</style>
</head>
<body>
	<div class="container bg-default">
	<div class=" bg-default">
		<div class="row">
			<ul id="menu">
				<li>
					<i class="glyphicon glyphicon-earphone"></i>
					Liên hệ: 0985020034
				</li>
				<li>
					<i class="glyphicon glyphicon-map-marker" style="color: red;"></i>
					Đại học bách khoa Hà Nội
				</li>
				<li>
					<a href="https://www.facebook.com" id="fb">
						<i class="fa fa-facebook" ></i>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com" id="googlep">
						<i class="fa fa-google-plus" ></i>
					</a>
				</li>
				<li>
					<a href="https://www.skype.com/" id="skype">
						<i class="fa fa-skype" ></i>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/?lang=vi" id="tw">
						<i class="fa fa-twitter" ></i>
					</a>
				</li>
			</ul>
		</div>
		<div class="bg1">
			<div class="row">
				<div class="col-md-3">
					<br>
					<a href="index.php"><abbr title="Trang chu" style="border: none; cursor: pointer;"><img src="images/logo.png" alt="logo" width="180" height="70" style="padding-left: 40px;" /></abbr></a>
				</div>
				<div class="col-md-6">
					<br>
					<form class="input-group pd" method="post">
						<input type="hidden" name="c" value="">
          				<input type="text" class="form-control" placeholder="Bạn muốn tìm gì?" name="txtSearch">
          				<span class="input-group-btn">
        					<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
        				</span>
      				</form>
				</div>
				<div class="col-md-3" style="padding-top: 40px; padding-right: 40px">
					<ul class="nav nav-pills navbar-right">
						<li>
                        	<a href="signup.php" class="bg-primary"><i class="glyphicon glyphicon-user"></i>Đăng kí</a>
                        </li>
						<li>
                        	<a href="login.php" class="bg-primary"><i class="glyphicon glyphicon-log-in"></i>Đăng nhập</a>
                        </li>
                    </ul>
				</div>
			</div>
			<div class="row container-fluid">
				<div class="navbar-collapse bg2" id="bs-example-navbar-collapse-1">
					<ul class="nav nav-pills nav-justified"> 
						<li role="presentation">
							<a href="homepage.php">Trang chủ</a>
						</li>
						<li role="presentation">
							<a href="?c=home&a=about" class="bg-menu">Mua vé</a>
						</li>
						<li role="presentation">
							<a href="?c=home&a=about" class="bg-menu">Tìm buýt</a>
						</li>
						<li role="presentation">
							<a href="?c=home&a=about" class="bg-menu">Góp ý</a>
						</li>						
	        			<li role="presentation">
							<a href="?c=home&a=about"class="bg-menu">Giới thiệu</a>
						</li>
	        			
					</ul>
				</div>
			</div>
		</div>
	</div>
<hr>