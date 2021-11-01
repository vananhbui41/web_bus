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
            <form id="logIn" method="post" action="index.php?c=login&a=signIn">
              <h1>Log in</h1>
              <div>
                <h3 align="left"> Username </h3>
                <input type="text" class="form-control required" placeholder="Username" name="txtUser" autocomplete="off" />
              </div>
              <div>
                <h3 align="left">Password</h3>
                <input type="password" class="form-control required" placeholder="Password" name="txtPassword" />
              </div>
                <a class="reset_pass" href="#" align = "right">Forget password?</a>
                <br></br>
                <button class="btn btn-primary submit" type="submit"><i class="glyphicon glyphicon-log-in"></i> Login</button>

              <div class="clearfix"></div>
                <p class="change_link">or sign up using<br>
                  <a href="#" class="btn btn-lg">
                  <span class="glyphicon glyphicon-envelope"></span>
                  </a> 
                  <a href="#" class="btn btn-lg">
                  <span class="glyphicon glyphicon-envelope"></span>
                  </a> 
                </p>
                <br>
              
                <p class="change_link">or sign up using<br>
                  <br></br>
                <button class="btn btn-primary submit" type="submit"><i class="glyphicon glyphicon-user"></i>Sign Up</button>
                </p>
                <div class="clearfix"></div>
                <br />

                <div>
                  <p>Copyright &copy;  2020. Đại học Bách Khoa Hà Nội</p>
                </div>
              </div>
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