
<?php 
error_reporting(0);
session_start();
include('db.php');
echo $_REQUEST['file']."<br>".$_REQUEST['title'];
$query="delete from upload where username='".$_SESSION['user']."' AND title='".$_REQUEST['title']."' and filename='".$_REQUEST['file']."'";
$str=mysql_query($query,$con);
echo "<script>window.location.href='list.php';</script>";
?>