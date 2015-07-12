
<?php
error_reporting(0);
session_start();
if(isset($_POST['username'])){
include('db.php');
$q=mysql_query("Update `fa_registration` set `password`='".$_POST['username']."' where `username`='".$_SESSION['user']." and'`password`='".$POST['password']."'");
}