
<?php
error_reporting(0);
session_start();   
if(isset($_POST['t'])){
$a=array();

foreach($_POST['t'] as $t1)
{
	array_push($a,$t1);
}
}
if(!(isset($_FILES['uploadedfile']['tmp_name'])))
echo "sorry you must upload atleast 1 lecture";
if(isset($_FILES['uploadedfile']['tmp_name'])){
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']);  
 $upload_url = '/savefiles/';  
$temp_name = $_FILES['uploadedfile']['tmp_name'];  
      $file_name = $_FILES['uploadedfile']['name'];  
      $file_path = $upload_dir.$upload_url.MD5($temp_name).$file_name;  
      if(move_uploaded_file($temp_name, $file_path)) {
$file_name=MD5($temp_name).$file_name;
include('db.php');
$query="INSERT INTO `course_data` (`username`,`details`, `summary`,`category`, `sub`,`goal`, `requirements`, `knowledge`, `level`, `price`, `price_type`,`image`)
 VALUES ('".$_SESSION['user']."','".$_REQUEST['details']."', '".$_REQUEST['summary']."','".$_REQUEST['category']."','".$_REQUEST['subcategory']."', '".$_REQUEST['goal']."', '".$_REQUEST['requirements']."', '".$_REQUEST['knowledge']."', '".$_REQUEST['level']."', '".$_REQUEST['price']."', '".$_REQUEST['price_type']."','".$file_name."')";
mysql_query($query,$con);   
}
}
$upload_dir= './savefiles';    

 $messages = array();

    if(isset($_FILES['userfile']['tmp_name']))
    {
        /** loop through the array of files ***/
        for($i=0; $i < count($_FILES['userfile']['tmp_name']);$i++)
        {
		
            // check if there is a file in the array
            if(!is_uploaded_file($_FILES['userfile']['tmp_name'][$i]))
            {
                $messages[] = 'No file uploaded';
            }
            else
            {
                // copy the file to the specified dir 
                if(@copy($_FILES['userfile']['tmp_name'][$i],$upload_dir.'/'.$_FILES['userfile']['name'][$i]))
                {
                    /*** give praise and thanks to the php gods ***/
                    $messages[] = $a[$i]." -> ".$_FILES['userfile']['name'][$i].' is uploaded ';
			
			$str=mysql_query("
			INSERT INTO `upload` (`username`, `link`,`title`, `filename`) VALUES 
			('".$_SESSION['user']."','".$_REQUEST['details']."', '".$a[$i]."','".$_FILES['userfile']['name'][$i]."')
				",$con);
			if($str)
			{
				echo "Succefully added course";
			} 
   		
                }
                else
                {
                    /*** an error message ***/
                    $messages[] = 'Uploading '.$_FILES['userfile']['name'][$i].' Failed';
                }
            }
        }
    }

?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
 <title>Multiple File Upload</title>
    <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />

<style>
select {
    padding:3px;
    margin: 0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}
</style>
 </head>

 <body>
 
 <p>
 <?php
    if(sizeof($messages) != 0)
    {
        foreach($messages as $err)
        {
            echo $err.'<br />';
        }
    }
 ?>
  <div style="margin-left:10%">
            <!-- Codrops top bar -->
            <br><br>
          <div style="width:37%;">

                            <form id='wrapper' enctype="multipart/form-data" action="<?php  htmlentities($_SERVER['PHP_SELF']);?>" method="post"> 
                                <h1>Create Course</h1> 
                              <p> 
                                    Basic course details <input type="text" name='details' required="required">
				<p>course summary <br><textarea name="summary" style="width:100%" rows=6 required="required"></textarea>
					<p>goal & objective <input type="text" name='goal' required="required">
 </p>
                           

<p>system requirements <br><textarea required="required" name='requirements' style="width:100%" rows=6></textarea></p>
<p>student pre knowledge on? <input type="text" required="required" name='knowledge'>
<p>Course Level&nbsp;&nbsp;&nbsp;<select name="level"><option>Basic</option><option>Intermediate</option><option>Advanced</option></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price 
<select name="price_type" id="price_type" style="width:20%"><option>Free</option><option>Paid</option></select>&nbsp;&nbsp;&nbsp;&nbsp;<font id="dol">$ &nbsp;</font><input type="text" name="price" id="price1" style="width:10%" placeholder="15" value=0></p>
<p>Course Category&nbsp;&nbsp;&nbsp;<br>
<select id="a1" name=category>
<option>Web Development</option>
<option>Business & Entrepreneurship
</option><option>Sales & Marketing
</option><option>IT & Software
</option><option>Finance & Accounting
</option><option>Project Management
</option><option>Language
</option><option>Test Preparation
</option><option>Media, Fashion & Art</option>
</select>
<select id="a2" name=subcategory>
<option>Web Development</option>
<option>Mobile Apps</option>
<option>Programming Languages</option>
<option>Game Development</option>
<option>Software Engineering</option>
<option>Development Tools</option>
<option>E-commerce</option>
</select>
</p>
<p>Course Image
<input type='file' name='uploadedfile' required="required"><br>
<p>Course Content
<p>Enter part no: <input type='text' name='t[]' required="required"><input type='file' name='userfile[]' required="required"><br>
<span></span>
<br><p><input  type='button' value='Add more' onclick="s()"></p>
   <p class="signin button">
                                    <input type="submit" value="Create" /> </p>
                             </form>
                        </div>

                        			
                    </div>
                </div>  
            </section>
        </div>
 </body>
 <script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#dol").hide(0);
$("#price1").hide(0);
$("#a1").change(function(){
/*var c=$("select").val();
var d=$("#a2").val();
$("a").attr("href", "course_category.php?id="+c+"&&id1="+d);*/
if($("#a1").val()=="Web Development")
$("#a2").html("<option>Web Development</option><option>Mobile Apps</option><option>Programming Languages</option><option>Game Development</option><option>Software Engineering</option><option>Development Tools</option><option>E-commerce</option>");
if($("#a1").val()=="Business & Entrepreneurship")
$("#a2").html("<option>Entrepreneurship</option><option>Communication</option><option>Business Law</option><option>Strategy making</option><option>Management</option><option>Leadership</option><option>Motivation</option>");
if($("#a1").val()=="Sales & Marketing")
$("#a2").html("<option>Digital Marketing</option><option>Search Engine Optimization</option><option>Social Medial Marketing</option><option>Advertising</option><option>Public Relations (PR)</option><option>Content Markting</option><option>Product Marketing</option><option>Startup Marketing</option><option>Marketing Fundamentals</option><option>Mobile Marketing</option><option>Sales</option><option>Online sales</option>");
if($("#a1").val()=="IT & Software")
$("#a2").html("<option>Network & Secutiry</option><option>Excel Training</option><option>PPT Presentation</option><option>Databases</option><option>Microsoft Certification</option><option>Software Testing</option>");
if($("#a1").val()=="Finance & Accounting")
$("#a2").html("<option>General Accounting</option><option>CA/CS/ICWA</option><option>Banking & Insurance</option><option>Capital Market</option><option>Stock Market Analysis</option>");
if($("#a1").val()=="Project Management")
$("#a2").html("<option>PMP</option>");
if($("#a1").val()=="Language")
$("#a2").html("<option>English</option><option>optionish</option><option>German</option><option>French</option><option>Japanese</option><option>Chinese</option><option>Russian</option>");
if($("#a1").val()=="Test Preparation")
$("#a2").html("<option>TOFEL</option><option>GMAT</option><option>GRE</option><option>CAT</option><option>MAT</option><option>Civil Services</option><option>Banking / PO</option><option>PMP Training</option><option>IIT / JEE</option>");
if($("#a1").val()=="Media, Fashion & Art")
$("#a2").html("<option>Mass Media</option><option>Event Management</option><option>Fashion Designing</option><option>Interior Design</option><option>Photography</option>");
});

$("select").change(function(){
if($("#price_type").val()=="Free")
{
$("#dol").hide(0);
$("#price1").hide(0);	
}
if($("#price_type").val()=="Paid")
{
$("#dol").show(0);
$("#price1").show(0);	
}
});
});
function s(){
$( "span" ).append("Enter part no: <input type='text' name='t[]'><input type='file' name='userfile[]'><br>");
}
$("#price1").keyup(function(){
    var val = $(this).val();
    if(isNaN(val)){
         val = val.replace(/[^0-9\.]/g,'');
         if(val.split('.').length>2) 
             val =val.replace(/\.+$/,"");
    }
    $(this).val(val); 
});

</script> </html>