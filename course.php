
<?php 
error_reporting(0);
session_start();
if(isset($_REQUEST['id1'])){
if(!(isset($_SESSION['user'])))
header('Location:student.php');}
if(isset($_REQUEST['id']))
$_SESSION['detail']=$_REQUEST['id'];
if(!(isset($_SESSION['detail'])))
$_SESSION['detail']=$_REQUEST['id'];
//echo $_SESSION['detail'];
include("db.php");
$query=mysql_query("select * from course_data where `details`='".$_SESSION['detail']."'");
$r=mysql_fetch_row($query);
$query=mysql_query("select * from profile where username='".$r[0]."'");
$r1=mysql_fetch_row($query);
$date=date('d-m-Y');
$query=mysql_query("select * from `visited_today` where `sd_username`='".$_SESSION['user']."' and `date`='".$date."' and `course_name`='".$r[1]."'");
if(mysql_affected_rows()<1)
$query=mysql_query("insert into `visited_today` values('".$_SESSION['user']."','".$r[0]."','".$r[1]."','".$date."')");
//echo "insert into `visited_today` values('".$_SESSION['user']."','".$r[0]."','".$r[1]."','".$date."')";
?>
<?php
$_SESSION['author']=$r1[0];?>
<style>
.cd {
    border-top: 1px solid #D7D7D7;
 //   width:130px;
text-align:justify;
    }
.aa{color: #FFF;
background-color: #4985B8;padding: 10px 16px;
font-size: 18px;
line-height: 1.33;
border-radius: 6px;}
b{
font-size: 18px;
font-weight: 500;}
a{color:#335D82;text-decoration:none;}
body {
    font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
}
h3{
font-weight:500;
font-size:18px;
}
img{
width:120px;
}
h2{
font-size: 30px;
font-weight: 500;
line-height: 1.2px;
margin-top: 30px;
font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
}
img{
	/*-webkit-border-radius: 50em;
	-moz-border-radius: 50em;
	border-radius: 50em;*/
	//margin-left:150px;
	width:200;
	height:150;
}
span{
line-height:2em;
}
.a{-webkit-border-radius: 50em;
	-moz-border-radius: 50em;
	border-radius: 50em;
	width:70px;
	height:60px;
	
}
</style>
<?php if(!(isset($_REQUEST['id1']))){?>
<div style="float:right;margin-right:10%;width:200;line-height:1.5em">
<img src="savefiles/<?php echo $r[11];?>">
<br><br>
Taught by
<?php }?> 
<font ><b><?php  if(!(isset($_REQUEST['id1']))) echo $r1[1]." ".$r1[2]?></b><br><br><?php if(!(isset($_REQUEST['id1']))) echo $r1[6]?>.</font>
</div>
	
<div style="border:0px solid black;width:50%;padding:15px">

<h2><?php echo $r[1]."<br>";?></h2>
<p><?php echo $r[5];?></p>
<?php if(!(isset($_REQUEST['id1']))){?>
<div id="i1">
<div style="float:left">  <a class=aa href='course.php?id1=1'>Start Learning</a></div><div style="float:right"><b>324</b> students enrolled <br>Price: <?php echo $r[9];?>
</div>

<br><br><br><br><div class=cd><br>
<p><?php echo $r[2]."<br>";?> </p></div>
<p><h3>Category of course <a><?php echo $r[3]." / ".$r[4]."<br>";?></a></h3></p>
<div><h3><font>System Requirments of course<br>
<span style="padding-left:15px;"><?php echo $r[6]."<br>";?></span></font></div>
<div><h3><font>Level of course<br><span style="padding-left:15px"><?php echo $r[8]."<br>";?></span></font>
</div>
</div>
</td>
</table>
<div id="load"></div>
<?php }
?>
<?php if(isset($_REQUEST['id1'])){
$q=mysql_query("select * from paid_list where `sd_username`='".$_SESSION['user']."' and `author`='".$r1[0]."' and  `course_name`='".$r[1]."' and `level`='".$r[8]."'");
if($r[10]=="Free")
{
 echo "<iframe src='course_main.php' width=950px height=450px style='margin-top:-60px;'></iframe>";
if(mysql_affected_rows()<1)
$q=mysql_query("insert into paid_list (`sd_username`,`author`,`course_name`,`level`) values('".$_SESSION['user']."','".$r1[0]."','".$r[1]."','".$r[8]."')");
}
else{
$r=mysql_fetch_array($q);
if($r['paid']=="1")
 echo "<iframe src='course_main.php' width=950px height=450px style='margin-top:-60px;'></iframe>";
else if($r['paid']=="0")
echo 0;

}

}
?>
<?php 
if(!(isset($_REQUEST['id1']))){?>
<p><h1>Related Searches</h1></p>
<?php }?>
<table><tr>
<?php
$str=explode(" ",$r[1]);
$q=mysql_query("select * from `course_data` where `details` LIKE '%".$str[0]."%'");
$count=0;
if(!(isset($_REQUEST['id1'])))
while($row=mysql_fetch_array($q)){
//echo $row['details']."<br>";
if($count<=4){
echo "<td>";
?>
<div style="border:1px solid black;width:150px;padding:10px;float:left">
<img src="savefiles/<?php echo $row['image'];?>" style="width:150px;height:75px"><br><?php echo $row['details'];?><br>
price:<?php echo $row['price'];?><font style=float:right>stars</font>
</div>
<?php
$count++;
}
}
?>
</tr>
</table>

</span>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
$("font").click(function(){
    $(this).find('span').slideToggle();
});
});
</script>