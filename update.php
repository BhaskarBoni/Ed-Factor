<?php 
error_reporting(0);
session_start();
include('db.php');
$str="UPDATE `profile` SET `firstname`='".$_REQUEST['first_name']."',`lastname`='".$_REQUEST['last_name']."',
`email`='".$_REQUEST['email_id']."',`specilization`='".$_REQUEST['specilization']."',`qualification`='".$_REQUEST['qualification']."',`strong_in`='".$_REQUEST['strong']."' WHERE `username`='".$_SESSION['user']."'";
echo $str;
mysql_query($str);
echo "updated";
echo "<script>window.location.href='profile.php'</script>";
?>
