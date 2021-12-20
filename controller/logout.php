<?php session_start(); 
 
if (isset($_SESSION['userInf'])){
    unset($_SESSION['userInf']); // xóa session login
}
header('Location: index.php');
?>