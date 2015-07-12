<style>
h3{margin-top:150px;text-align:center}
</style>
<?php 
session_start();
//print_r($_SESSION);
include('db.php');
mysql_select_db("test");
$row=mysql_query("select * from upload where `username`='".$_SESSION['author']."' and `link`='".$_SESSION['detail']."'");
?>
<?php
$r=mysql_fetch_array($row);
if(mysql_affected_rows()){
echo $r['filename'];
$a=explode(".",$r['filename']); 
if($a[1]=="pdf")
echo "<script>window.location.href='http://docs.google.com/viewer?url=portal.aauj.edu/e_books/teach_your_self_java_in_21_days.pdf&embedded=true';</script>";
else
if($a[1]=="ppt" || $a[1]=="pptx" || $a[1]=="doc" || $a[1]=="docx")
echo "<script>window.location.href='http://docs.google.com/viewer?url=http://techslides.com/demos/sample-videos/small.webm&embedded=true';</script>";
else if($a[1]=="mp4" || $a[1]=="webm" || $a[1]=="flv" || $a[1]=="ogg" || $a[1]=="ogv")
echo "<script>window.location.href='http://localhost/edu/video/video-js/demo.html';</script>";
}
else
echo "<h3>Sorry no Lectures were added by instructor</h3>";
?>
