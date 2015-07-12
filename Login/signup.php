<?php 
error_reporting(0);
session_start();
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
    </head>
    <body>
<?php 
include('db.php');
$query=mysql_query("select * from profile where username='".$_SESSION['user']."'",$con);
$row=mysql_fetch_array($query);
echo $_COOKIE['user'];
?>
                    <div id="wrapper">
                        <div id="login" class="animate form">
     				   <?php if(isset($row['firstname']))
					echo "<form  action='update.php' autocomplete='on'>"; 
					else
					echo "<form  action='login.php' autocomplete='on'>";
					?>
                                <h1> Your Profile </h1> 
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
                                    <label for="usernamesignup" class="uname" data-icon="u">About Me</label>
                                    <?php echo "  <input id='usernamesignup' name='strong' required='required' type='text' placeholder='my last name' value='".$row['strong_in']."'>";?>
                                </p>
				
				 <p class="signin button"> 
									<input type="submit" value="update"/> 
								</p>
                                
                            </form>

                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>