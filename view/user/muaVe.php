<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mua vé</title>

     <!-- Boostrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <?php include("header.php"); ?>
    <!-- Mua ve -->
    <div class="d-flex align-items-start" style="width: 100%">
    <div class="nav flex-column nav-pills me-3"  role="tablist" >
        <button class="nav-link active" data-bs-toggle="pill"  type="button" role="tab"  onclick = "changeMuaVeThuong()" >Mua vé thường</button>
        <button class="nav-link" data-bs-toggle="pill"  type="button" role="tab"  onclick = "changeMuaVeThang()">Mua vé tháng</button>
    </div>
    <div class="flex-fill tab-content">
        <div class="tab-pane fade show active" id="MuaVeThuong">
            <?php include("./muaVe/veThuong.php"); ?>
        </div>
        <div class="tab-pane fade show active" id="MuaVeThang" style ="display:none;">
            <?php include("./muaVe/veThang.php");?>
        </div>
    </div>
    </div>
    <hr>
    <?php include("../footer.php");?>
</body>
</html>
<script>
      function changeMuaVeThang() {
      document.getElementById('MuaVeThuong').style.display='none';
      document.getElementById('MuaVeThang').style.display='block';
      }
      function changeMuaVeThuong() {
      document.getElementById('MuaVeThuong').style.display='block';
      document.getElementById('MuaVeThang').style.display='none';
      }
  </script>