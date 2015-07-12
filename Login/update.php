<?php 
error_reporting(0);
session_start();
include('db.php');
if(mysql_query("delete from profile where username='".$_SESSION['user']."'",$con)){
$str=mysql_query("
INSERT INTO `test`.`profile` (`username`, `firstname`, `lastname`, `email`, `specilization`, `qualification`, `strong_in`) 
VALUES 
('".$_SESSION['user']."', '".$_REQUEST['first_name']."', '".$_REQUEST['last_name']."', '".$_REQUEST['email_id']."', '".$_REQUEST['specilization']."', '".$_REQUEST['qualification']."', '".$_REQUEST['strong']."')

",$con);
echo "<script>window.location.href='signup.php'</script>";
}
?>
