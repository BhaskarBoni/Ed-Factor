<?php 
error_reporting(0);
session_start();
include('db.php');
$row=mysql_query("select * from upload where `username`='".$_SESSION['author']."' and `link`='".$_SESSION['detail']."'");
?>
<style>
p{font-weight:bold;}

div {
    overflow-y: auto;
	height:450px;
} 
img{
width:20px;
}
a{
text-decoration:none;
font-size:15px;
line-height:50px;
padding-left:45px;
}
font{font-weight:bold
;font-size:20px;padding:10px;}
</style>
<div>
<?php
$i=0;
while($r=mysql_fetch_array($row))
{
//echo "<p>".$r['title']."</p>";
$a=explode('.',$r['filename']);
if($a[1]=="pdf")
echo "<img src='play.jpg'>"."<font>Lecture no: $i<br></font><a href='http://docs.google.com/viewer?url=portal.aauj.edu/e_books/teach_your_self_java_in_21_days.pdf&embedded=true' target='left'>".$r['title']."</a> <br>";
else
if($a[1]=="ppt" || $a[1]=="pptx" || $a[1]=="doc" || $a[1]=="docx")
echo "<img src='play.jpg'>"."<font>Lecture no: $i<br></font><a href='http://docs.google.com/viewer?url=http://techslides.com/demos/sample-videos/small.webm&embedded=true' target='left'>".$r['title']."</a> <br>";
else if($a[1]=="mp4" || $a[1]=="webm" || $a[1]=="flv" || $a[1]=="ogg" || $a[1]=="ogv")
echo "<img src='play.jpg'>"."<font>Lecture no: $i<br></font><a href='http://localhost/edu/video/video-js/demo.html' target='left'>".$r['title']."</a> <br>";
$i++;
}
?>
</div>