<?php
error_reporting(0);
session_start();
$session_id='1'; //$session id
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
        }); 
</script>

    </head>
    <body>


<?php 
if(isset($_SESSION['user'])){
include('db.php');
//echo $_COOKIE['user'];
$query=mysql_query("select * from profile where username='".$_SESSION['user']."'",$con);
$row=mysql_fetch_array($query);
//echo $_COOKIE['user'];
}
else
{
echo "<script>window.location.href='instructor.php';</script>";
}
?>
                
         <div style="width:37%;">
<h1 style="font-size: 48px;
	color: rgb(6, 106, 117);
	//padding: 2px 0 10px 0;
	font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;
	font-weight: bold;
	text-align:center;
	padding-bottom: 30px;margin-left:0px;margin-top:0px;">Personal Details</h1>
                       
<table style="margin-left:100px"><tr><td>
     				   <?php if(isset($row['firstname']))
					echo "<form  id='wrapper' action='update.php' autocomplete='on'>"; 
					else
					echo "<form  id='wrapper' action='login.php' autocomplete='on'>";
					?>
                      
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Firstname</label>
                                  <?php 
echo "<input id='usernamesignup' name='first_name' required='required' type='text' placeholder='My first name' value='".$row['firstname']."'>";
?>
                                </p>
				<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Lastname</label>
                               <?php echo "   <input id='usernamesignup' name='last_name' required='required' type='text' placeholder='my last name' value='".$row['lastname']."'>";?>
                                </p>

                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                <?php echo "    <input id='emailsignup' name='email_id' required='required' type='email' placeholder='mysupermail@mail.com' value='".$row['email']."'>";?>
                                </p>
                               <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Industry Exp</label>
                                   <?php echo "   <input id='usernamesignup' name='specilization' required='required' type='text' placeholder='My first name' value='".$row['specilization']."'>";?>
                                </p>
				<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Qualification</label>
                                   <?php echo "   <input id='usernamesignup' name='qualification' required='required' type='text' placeholder='my last name' value='".$row['qualification']."'>";?>
                                </p>
				<p> 
                                    About Me
                                   <br><textarea name='strong' style=padding:5px;width:100% > <?php echo $row['strong_in'];?></textarea>
                                </p>
				
				 <p class="signin button"> 
									<input type="submit" value="update"/> 
								</p>
                                
                            </form>
</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><table border=0><tr><td><p id='preview' style="position:abolsute;margin-top:0px;"><img src="uploads/<?php echo $row['image'];?>"></p><form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
Upload your image <input type="file" name="photoimg" id="photoimg" />
</form>
<tr style="height:450px"><td></td></tr></table></td></tr></table>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>