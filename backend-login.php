<?php
require_once "db.php";
$link = new mysqli($Hn , $User , $Pass , $Db );
$Ur = $_POST['username'];
$pass = $_POST['pass'];
$passQuery = "SELECT Password FROM User WHERE Name='$Ur'";
$results = $link->query($passQuery);
$data=$results->fetch_array(MYSQLI_NUM);
if (password_verify($pass, $data[0])) {
    session_start();
    setcookie('logged' , $Ur , time()+3600);
    $_SESSION['UserName'] = $Ur;
    include_once "index.php";
}else {
    echo 'wrong password';
}
?>
