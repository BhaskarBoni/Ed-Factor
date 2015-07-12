<?php 
error_reporting(0);
session_start();
include('db.php');
if(isset($_REQUEST['id1'])){
$q=mysql_query("delete from course_data where `username`='".$_SESSION['user']."' and `details`='".$_REQUEST['id']."'");
if(mysql_affected_rows())
header('Location:category_list.php?l=delete');
else
echo "Sorry No courses to delete";
}
?>
<div>
Do you want to delete course really?
<button id="s">Yes</button> <button>no</button>
</div> <span><?php echo $_REQUEST['id'];?></span>
<script src="jquery.min.js">
</script>
<script>
$(document).ready(function(){
$("#s").click(function(){
var str="delete_course.php?id=";
str+=$("span").html();
str+="&&id1=1";
//alert(str);
window.location.href=str;
});
});
</script>;

