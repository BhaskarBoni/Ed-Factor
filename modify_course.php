<?php
error_reporting(0);
session_start();
include('db.php');
if(isset($_REQUEST['id']))
$query=mysql_query("select * from course_data where `username`='".$_SESSION['user']."' and `details`='".$_REQUEST['id']."'");
else
$query=mysql_query("select * from course_data where `username`='".$_SESSION['user']."'");
$row=mysql_fetch_row($query);
$q=mysql_query("select * from upload ");
while($row1=mysql_fetch_row($q))
{
	//echo $row1[3];
}
?>
<?php
if(isset($_POST['t'])){
$a=array();

foreach($_POST['t'] as $t1)
{
	array_push($a,$t1);
}
}
if(isset($_FILES['uploadedfile']['tmp_name'])){
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']);  
 $upload_url = './savefiles';  
$temp_name = $_FILES['uploadedfile']['tmp_name'];  
      $file_name=$_FILES['uploadedfile']['name'];  
	if($file_name!="")
	{
	$file_name = MD5($temp_name).$_FILES['uploadedfile']['name'];  
      $file_path = $upload_dir.$upload_url.$file_name;  
      if(move_uploaded_file($temp_name, $file_path)) {
echo "inserted";
$query="UPDATE `course_data` SET `image` = '".$file_name."' WHERE `username` = '".$_SESSION['user']."' AND `details` = '".$row[1]."'";
echo $query;
if($query)mysql_query($query);
}
}
/*else
echo "not inserted";*/
}
$upload_dir= '/savefiles/';    

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
		if($_FILES['userfile']['name'][$i]!=""){
                // copy the file to the specified dir 
                if(@copy($_FILES['userfile']['tmp_name'][$i],$upload_dir.'/'.$_FILES['userfile']['name'][$i]))
                {
                    /*** give praise and thanks to the php gods ***/
                    $messages[] = $_FILES['userfile']['name'][$i].' is uploaded '.$a[$i];
			
			$str=mysql_query("
			Update `test`.`upload` set `filename`='".$_FILES['userfile']['name'][$i]."' where
		`username`='".$_SESSION['user']."' and `link`='".$_REQUEST['details']."' and `title`='".$a[$i]."' 
				");
			if($str)
			{
				echo "inserted to database";
			} 
			else
			echo $str;
   		
                }
                else
                {
                    /*** an error message ***/
                    $messages[] = 'Uploading '.$_FILES['userfile']['name'][$i].' Failed';
                }
		}
            }
}        }

?>

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

<div style='margin-left:10%'>
            <!-- Codrops top bar -->
            <br><br>
          <div style='width:37%;'>

                            <form id='wrapper' enctype='multipart/form-data' action='<?php echo htmlentities($_SERVER['PHP_SELF'])."?id='".$row[1]."'";?>' method='post'> 
                                <h1>Modify Course</h1> 
                              <p> 
                                    Basic course details <?php echo "<input type='text' name='details' value='".$row[1]."'>";?>
				<p>course summary <br><textarea name='summary' style='width:100%;padding: 10px 5px 10px 32px;' rows=6><?php echo $row[2];?></textarea>
					<p>goal & objective <?php echo "<input type='text' name='goal' value=".$row[4].">";?>
 </p>
                           

<p>system requirements <br><textarea name='requirements' style='width:100%;padding: 10px 5px 10px 32px;' rows=6><?php echo $row[6];?></textarea></p>
<p>student pre knowledge on? <?php echo "<input type='text' name='knowledge' value=$row[7]>";?>
<p>Course Level&nbsp;&nbsp;&nbsp;<select><option>Basic</option><option>Intermediate</option><option>Advanced</option></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price 
<select name='level' style='width:20%'><option>Free</option><option>Paid</option></select>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<input type='text' name='price' style='width:10%' value=".$row[9]." placeholder='$0.0'>";?></p>

<p>Course Image
<input type='file' name='uploadedfile'><br>

<p>Course Content
<?php $query=mysql_query("select * from upload where username='sai' and link='php programming'");
while($row=mysql_fetch_array($query))
{
echo "<p>Enter part no: <input type='text' name='t[]' value=".$row['title']." READONLY><input type='file' name='userfile[]'>"."<br>";		
}?>		
<span></span>
<br><!--<p><input  type='button' value='Add more' onclick='s()'></p>-->
<p class='signin button'>
                                    <input type='submit' value='Update' /> </p>
  
                             </form>
                        </div>

                        			
                    </div>
                </div>  
            </section>
        </div>
 