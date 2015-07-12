<?php 
error_reporting(0);
session_start();
?>
<div id="topmenu">
                            <div id="topmenulistcont">
                            	
                                <a id="topcartcontainer" href="logout.php">
                                    <span id="totalcartspan">Logout</span> </a>
			 
                               <ul id="topsmallnav" class="">
<?php if(isset($_SESSION['user'])){
include('db.php');
$query=mysql_query("select * from `fa_registration` where `email`='".$_SESSION['user']."'");
$row=mysql_fetch_row($query);
echo "<li id='menu-item-1059' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-1059'><a href='#my-account/'>Hi! ".$row[0]."</a></li>";
}
else
echo "<li id='menu-item-1059' class='menu-item menu-item-typeh-post_type menu-item-object-page menu-item-1059'><a href='#my-account/'>My Account</a></li>";
?>
<li id="menu-item-1061" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1061"><a href="#shop/cart/">My Cart</a></li>
<li id="menu-item-1060" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1060"><a href="#contact-support/">Contact Support</a></li>
</ul>								
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>						
	<ul id="topnav" style="float:right;"><li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9"><a href="index.php" >Home</a></li>
<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-20"><a href="category_main.php" >Course Categories</a>

</li>

<li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a href="instructor.php" >Instructor</a></li>
<li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57"><a href="student.php" >Student</a></li>
</ul>			