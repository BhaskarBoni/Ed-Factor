<?php 
error_reporting(0);
include('db.php');
$str=mysql_query("
INSERT INTO `profile` (`username`, `firstname`, `lastname`, `email`, `specilization`, `qualification`, `strong_in`) 
VALUES 
('".$_COOKIE['user']."', '".$_REQUEST['first_name']."', '".$_REQUEST['last_name']."', '".$_REQUEST['email_id']."', '".$_REQUEST['specilization']."', '".$_REQUEST['qualification']."', '".$_REQUEST['strong']."')

",$con);
echo "succefuly updated your profile";
echo "<script>window.location.href='signup.php';</script>";
echo mysql_affected_rows();
?>
