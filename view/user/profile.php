<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

     <!-- Boostrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
    <?php include("header.php"); ?>

    <!-- User Info -->
    <div>
    <div class="container">
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                        </div>
                        <h5 class="user-name"><?php echo $_SESSION['userInf']['HoTen']; ?></h5>
                        <h6><?php echo $_SESSION['userInf']['SĐT']; ?></h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <form method = "post">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Thông tin</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="fullName">Họ và tên</label>
                            <input type="text" class="form-control" id="fullName" name="HoTen" placeholder="Enter full name">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="Giới Tính">Giới tính</label>
                            <br>
                            <select name="GioiTinh" id="GioiTinh">
                                <option value="0" selected="selected">Nam</option>
                                <option value="1">Nữ </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="adddr">Địa chỉ</label>
                            <input type="name" class="form-control" id="addr" name="DiaChi" placeholder="Enter Address">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="birth">Ngày sinh</label>
                            <input type="url" class="form-control" id="birth" name="NgaySinh" placeholder="yyyy/mm/dd">
                        </div>
                    </div>
                </div>
                
                <br>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                            <button type="button" name="Update" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        </div>
        </div>
    </div>
    </div>
    <hr>
    <?php include("../footer.php"); ?>
</body>
</html>