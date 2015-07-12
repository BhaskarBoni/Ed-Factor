<?php
$con = mysql_connect("localhost","root","");
if($con) 
echo "connected";
mysql_select_db("test",$con);?>