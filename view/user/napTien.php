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
    <!-- main nạp tiền -->
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
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h4 class="mb-2 text-primary">Nạp tiền vào thẻ xe bus</h4>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="bankcardNum">Mã thẻ ngân hàng</label>
                            <input type="text" class="form-control" id="bankcardNum" placeholder="Enter bank card number">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputMoney">Số tiền (đ)</label>
                            <input type="text" class="form-control" id="inputMoney" placeholder="Enter the amount">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="button" class="btn btn-secondary"><a href="quanLyThe.php" class="link-light">Hủy</a></button>
                            <button type="button" class="btn btn-primary">Nạp tiền</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>

    <?php include("../footer.php") ?>
</body>
</html>