<?php 
error_reporting(0);
include('db.php');
$str=mysql_query(" select * from fa_registration where `username`='".$_REQUEST['username1']."'and `password`='".$_REQUEST['password1']."'",$con);
if(mysql_affected_rows())
{
$row=mysql_fetch_array($str);
echo $row['code'];
if($row['code']==1){
echo "loged in succefully";
setcookie("user",$_REQUEST['username1'],time()+3600);
}
else
echo "please verify mail sent to you";
}
else 
echo "wrng username/password";
?>
