
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
if(isset($_FILES['uploadedfile']['tmp_name'])){
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']);  
 $upload_url = './savefiles';  
$temp_name = $_FILES['uploadedfile']['tmp_name'];  
      $file_name = $_FILES['uploadedfile']['name'];  
      $file_path = $upload_dir.$upload_url.$file_name;  
      if(move_uploaded_file($temp_name, $file_path)) {
include('db.php');
$query="INSERT INTO `test`.`course_data` (`username`,`details`, `summary`, `goal`, `requirements`, `knowledge`, `level`, `price`,`image`)
 VALUES ('".$_SESSION['user']."','".$_REQUEST['details']."', '".$_REQUEST['summary']."', '".$_REQUEST['goal']."', '".$_REQUEST['requirements']."', '".$_REQUEST['knowledge']."', '".$_REQUEST['level']."', '$".$_REQUEST['price']."', '".$file_name."')";
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
                    $messages[] = $_FILES['userfile']['name'][$i].' is uploaded '.$a[$i];
			
			$str=mysql_query("
			INSERT INTO `test`.`upload` (`username`, `link`,`title`, `filename`) VALUES 
			('".$_SESSION['user']."','".$_REQUEST['details']."', '".$a[$i]."','".$_FILES['userfile']['name'][$i]."')
				",$con);
			if($str)
			{
				echo "inserted to database";
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
  <div>
            <!-- Codrops top bar -->
            <br><br><br><br>
          <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post"> 
                                <h1>Uploading Content</h1> 
                              <p> 
                                    Basic course details <input type="text" name='details'>
				<p>course summary <br><textarea name="summary"></textarea>
					<p>goal & objective <input type="text" name='goal'>
 </p>
                            <!--  <p class="signin button">
                                    <input type="submit" value="Submit" /> </p>-->

<p>system requirements <br><textarea name='requirements'></textarea></p>
<p>student pre knowledge on? <input type="text" name='knowledge'>
<p>course level 
<select><option>Basic</option><option>Intermediate</option><option>Advanced</option></select>
<p>course price<br>
<select name="level"><option>Free</option><option>Paid</option></select><input type="text" name="price" value=0.0>
<p>Course Image
<input type='file' name='uploadedfile'><br>
 <input type="submit" value="Upload" />
                             </form>
                        </div>

                        			
                    </div>
                </div>  
            </section>
        </div>
 </body>
 </html>