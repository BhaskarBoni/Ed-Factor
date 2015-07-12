
<style>
#leftcolumn
{
	//height:170px;
}
#leftcolumn {
     width: 250px;
     background-color: #336CA6;
     float:left;
}
#rightcolumn {
     width: 750px;
     background-color: white;
     float:left;
border:1px solid black;
}
li{
color:white;

}
a{text-decoration:none;color:white;text-align:center;font-size:18px;}
</style>
<div id="wrapper">
    <div id="leftcolumn"><br>
        <center><p><a href="profile.php" target="right">Profile</a></p><hr>
	<p id="sub"><a  target="right">Courses</a></p>
	<ul><li><a href="add_course.php" target="right"> Add course</a></li><br>
	<li><a href="category_list.php?l=modify" target="right"> Modify course</a></li><br>
	<li><a href="category_list.php?l=delete" target="right"> Delete course</li></ul>
	<hr>
	
	<p><a href="Login/change.php" target="right">Change Pass</a></p>
	
    </div>
</div>
<script src="jquery.min.js"></script>
</script>
<script>
$(document).ready(function(){
$("ul").hide(0);
$("#sub").click(function(){
$("ul").toggle(1000);
});
});
</script>