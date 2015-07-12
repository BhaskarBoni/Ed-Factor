<?php 
error_reporting(0);
session_start();
include('db.php');
$q=mysql_query("select * from course_data where `username`='".$_SESSION['user']."'");
?>
<table>
<?php 
if(mysql_affected_rows()<1)
echo "sorry no courses are available to modify/delete";
$count=0;
echo "<tr>";
while($r=mysql_fetch_array($q)){
if($count==3)
echo "<tr>";
echo "<td>
<div style='border:1px solid black;width:280px;height:260px;margin-left:50px;background-color:#EEEEEE'>
<div>
<br>
<font style='padding-left:10px'>".$r['details']."</font>";
if($_REQUEST['l']=="delete")
echo "<a style='float:right;margin-right:10px;margin-bottom:10px;padding:10px;border:1px solid black;border-radius:10px;background-color:#4985B8;color:#fff' href='delete_course.php?id=".$r['details']."' onclick='s()'>Delete</a>";
if($_REQUEST['l']=="modify")
echo "<a style='float:right;margin-right:10px;margin-bottom:10px;padding:10px;border:1px solid black;border-radius:10px;background-color:#4985B8;color:#fff' href='modify_course.php?id=".$r['details']."' onclick='s()'>Modify</a>";
echo "</div>
<div>
<img src='savefiles/".$r['image']."' style='padding-left:10%;height:150px;width:220'>
</div>
<div>
<p style='float:left;padding-left:10px'>Price: ".$r['price']." </font><p style='float:right;padding-right:15px'>234 enrolled</font>
</div>
</div>
</td>";$count++;}
?>
</tr>
</table>