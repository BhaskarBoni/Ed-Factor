<?php 
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("test",$con);
$str=mysql_query("
INSERT INTO `test`.`profile` (`username`, `firstname`, `lastname`, `email`, `specilization`, `qualification`, `strong_in`) 
VALUES 
('".$_SESSION['user']."', '".$_REQUEST['first_name']."', '".$_REQUEST['last_name']."', '".$_REQUEST['email_id']."', '".$_REQUEST['specilization']."', '".$_REQUEST['qualification']."', '".$_REQUEST['strong']."')

",$con);
echo "succefuly updated your profile";
//echo "<script>window.location.href='profile.php';</script>";
echo mysql_affected_rows();
?>
