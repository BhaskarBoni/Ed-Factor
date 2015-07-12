<?php 
error_reporting(0);
include('db.php');
$q=mysql_query("select * from course_data");
?>
<table>
<?php 
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
echo "</div>
<div>
<img src='New_Ajax_Image_Upload/".$r['image']."' style='padding-left:10%;height:150px;width:220'>
</div>
<div>
<p style='float:left;padding-left:10px'>Price: ".$r['price']." </font><p style='float:right;padding-right:15px'>234 enrolled</font>
</div>
</div>
</td>";$count++;}
?>
</tr>
</table>