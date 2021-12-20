<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý thẻ</title>
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <?php include("header.php"); ?>
    <!-- main -->

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
                        <h5 class="user-name">Bui Van Anh</h5>
                        <h6 class="user-email">vananhbui41@gmail.com</h6>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h6 class="mb-2 text-primary">Thông tin thẻ xe buýt</h6>
            </div>
            <table class="table">
                <tr>
                    <th scope="row">Mã thẻ: </th>
                    <td colspan="2">12345678</td>
                </tr>
                <tr>
                    <th scope="row">Ngày đăng kí: </th>
                    <td colspan="2">13/10/2021</td>
                </tr>
                <tr>
                    <th scope="row">Số dư:</th>
                    <td colspan="2">100000</td>
                </tr>
                <tr>
                    <th scope="row">Thẻ liên kết:</th>
                    <td colspan="2">ABC Bank</td>
                </tr>
            </table>

            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                        <button type="button" id="submit" name="submit" class="btn btn-secondary"><a href="home.php" class="link-light">Thoát</a></button>
                        <button type="button" id="submit" name="submit" class="btn btn-primary"><a href="napTien.php" class="link-light">Nạp tiền</a></button>
                    </div>
                </div>
            </div>

            </div>
        </div>
        </div>
        </div>
    </div>
    <hr>
    <?php include("../footer.php") ?>
</body>
</html>