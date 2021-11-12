<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Log in</title>
  <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="public/assets/css/myCss.css">
  <link rel="stylesheet" href="public/assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap-datepicker.min.css">
  <script type="text/javascript" src="public/assets/js/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="public/assets/css/myCss.css">

    <!-- Custom Theme Style -->
    <link href="public/assets/admin/build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="login">
    <div>
     <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="logIn" method="post" action="<?php echo $gopage ; ?> ">
              <h1 >Đăng nhập <img src="images/logo.png" alt="logo" width="130" height="50" style="padding-left: 20px;" /></abbr></a></h1>
              <div>
                <h3 align="left"> Tài khoản </h3>
                <input type="text" class="form-control required" placeholder="Username" name="txtUser" autocomplete="off" />
              </div>
              <div>
                <h3 align="left">Mật khẩu</h3>
                <input type="password" class="form-control required" placeholder="Password" name="txtPassword" />
              </div>
                <a class="reset_pass" href="#" align = "right">Bạn quên mật khẩu?</a>
                <br></br>
                <button class="btn btn-primary submit" type="submit"><i class="glyphicon glyphicon-log-in"></i> Đăng nhập </button>

              <div class="clearfix"></div>
                <h5 class="change_link">hoặc đăng nhập bằng<br>
                  <a href="https://www.facebook.com" id="fb">
                      <i class="fa fa-facebook btn-lg" ></i>
                  </a>
                  <a href="https://www.facebook.com" id="googlep">
                     <i class="fa fa-google-plus" ></i>
                  </a> 
                </h5>
                <p class="change_link">hoặc đăng kí một tài khoản<br></p>
                <button class="btn btn-primary submit" type="submit"><a href="signup.php" class="bg-primary"><i class="glyphicon glyphicon-user"></i>Đăng kí</a></button>
                <div class="clearfix"></div>
                <br />

                <div>
                  <p>Copyright &copy;  2020. Đại học Bách Khoa Hà Nội</p>
                </div>
              </div>
              <?php
              if(isset($_POST["txtUser"]) || isset($_POST["txtPassword"])){
                $gopage='';
                $Username=$_POST["txtUser"];
                $Password=$_POST["txtPassword"];
                if(($Username=='username')||($Password=='userpass')){
                    $gopage='/Project%20LTW/web_bus/view/home/homepage.php';

                }
                elseif(($Username=='admin')||($Password=='adminpass')){
                    $gopage='/Project%20LTW/web_bus/view/admin/adminpage.php';
                }
                else {
                  echo "Sai tài khoản hoặc mật khẩu";
                }
                echo $gopage ;
              }
              ?>
            </form>
          </section>
        </div>
    <script type="text/javascript" src="public/assets/js/jquery-3.2.1.min.js"></script>

    <script type="text/javascript" src="public/assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="public/assets/js/bootstrap-datepicker.vi.js"></script>
    <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap-datepicker.min.css">

    <script type="text/javascript" src="public/assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="public/assets/js/messages_vi.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#signUp").validate({

          rules: {
          cpassword1: {
            equalTo: "#txtPassword1"
          }
        }
        });
        $("#logIn").validate();
      });
    </script>
    <script>
      $(document).ready(function(){
        $.fn.datepicker.defaults.language = 'vi';
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        var date_input=$('input[name="txtBirthDay"]');
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
          format: 'dd/mm/yyyy',
          container: container,
          todayHighlight: true,
          autoclose: true,
        })
      })
    </script>
    
  </body>
</html>