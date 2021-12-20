<?php
//Khai báo sử dụng session
        require("../../model/database.php");
        if (!isset($_POST['Update'])){
          die('');
        }