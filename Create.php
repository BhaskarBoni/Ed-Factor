<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Create CSS popup with Lightbox effect</title>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#ld").load("copy.php");
  });
});
</script>

<script type="text/javascript">
window.document.onkeydown = function (e)
{
	if (!e){
		e = event;
	}
	if (e.keyCode == 27){
		lightbox_close();
	}
}
function lightbox_open(){
	window.scrollTo(0,0);
	document.getElementById('light').style.display='block';
	document.getElementById('fade').style.display='block';	
}
function lightbox_close(){
	document.getElementById('light').style.display='none';
	document.getElementById('fade').style.display='none';
}
</script>
<style type="text/css">
#fade{
	display: none;
	position: fixed;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 100%;
	background-color: black;
	z-index:1001;
	-moz-opacity: 0.8;
	opacity:.80;
	filter: alpha(opacity=80);
}
#light{
	display: none;
	position: absolute;
	top: 20%;
	left: 40%;
	width: 500px;
	height: 550px;
	margin-left: -150px;
	margin-top: -100px;					
	border: 2px solid #FFF;
	background: #FFF;
	z-index:1002;
	overflow:visible;
}
</style>
</head>

<body>

<button onclick="lightbox_open();">Create Content</button>


<div style="display: none;" id="light">
	<a href="#" onclick="lightbox_close();"><iframe src="addcontent.php" width=100% style="height:550px;border:0px"></iframe></a>
</div>
<div style="display: none;" id="fade" onclick="lightbox_close();"></div>
<div id="ld"></div>


</body></html>