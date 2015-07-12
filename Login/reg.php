<?php 
error_reporting(0);
session_start();

include('db.php');
if(isset($_REQUEST['username_login']))
{
$query=mysql_query("select * from fa_registration where `email`='".$_REQUEST['username_login']."' and `password`='".$_REQUEST['password_login']."'");
$row=mysql_fetch_array($query);
if(mysql_affected_rows()<1){
?>
<table border=3 height=150 width=400 style=border-radius:10px;>
<tr>
<td align='center'>Incorrect username /password combinations<br>
<a style=color:blue Href='index4.php'>click here to login</a>
</td>
</tr></table>
<?php
}
else{
if($row['code']!="1"){
?>
<table border=3 height=150 width=400 style=border-radius:10px;>
<tr>
<td align="center">Your E-mail verification is not done<br>
</td>

</tr>
</table>
<?php
}
else
{	

	$_SESSION['user']=$_REQUEST['username_login'];
		$_SESSION['type']="instructor";
	echo "<script>parent.location.href='../main.php';</script>";
}
}
}
else{
if(isset($_REQUEST['username'])){
$code=MD5($_POST['username']);
//echo $code;
$query=mysql_query("select * from `fa_registration` where `email`='".$_POST['email']."'");
if(mysql_affected_rows()<1){
$query="INSERT INTO `fa_registration` (`username`, `email`, `password`, `code`) VALUES 
('".$_POST['username']."', '".$_POST['email']."', '".$_POST['password']."', '".$code."')";
mysql_query($query,$con);
$query="INSERT INTO `profile` (`username`,`image`) values ('".$_POST['username']."','') ";
mysql_query($query);
echo "Please check your mail verification mail was sent to your email address\n<a target=parent href='../instructor.php'>CLick to login</a>";
$n="../instructor.php?id=".$code;
}
?>
<?php 
$message = "Thanks for Registering click on below link to verify\n".$n;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
$email=$_POST['email'];
mail($email, 'My Subject', $message);
}
}
?>
