<?php
//Columns FirstName LastName UserName Email Location Password
require_once "db.php";
$un=$_POST['name'];
$Email=$_POST['email'];
$pass=password_hash($_POST['password'] , PASSWORD_DEFAULT);
$link = new mysqli($Hn , $User , $Pass , $Db );
$submit = "INSERT INTO `user` (`Name` , `Email` ,`Password`) VALUES ('$un' , '$Email' , '$pass')";
$link->query($submit);
$link->close();
include "login.php";
?>