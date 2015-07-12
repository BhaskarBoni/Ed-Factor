<?php 
error_reporting(0);
session_start();
if(isset($_POST['password'])){
include('db.php');
$q=mysql_query("Update `fa_registration` set `password`='".$_POST['username']."' where `email`='".$_SESSION['user']."' and `password`='".$_POST['password']."'");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
           <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div>
            <br><br><br><br>
          <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    

                            <form  id=wrapper action="change.php" autocomplete="on" method=post> 
                                <h1>Change Password</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your old username </label>
                                    <input  name="password" required="required" type="password" placeholder="old password"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your new password </label>
                                    <input  name="username" required="required" type="password" placeholder="new password" /> 
                                </p>
				<p style="color:red">
					<?php 
					if(isset($_POST['password']))
					if(mysql_affected_rows())
echo "successfully changed";
else
echo "Sorry old password was wrong";
?>
				</p>
                                <p class="login button"> 
                                    <input type="submit" value="Change password" /> 
								</p>
                            </form>
                        </div>

						
                   
                </div>  
            </section>
        </div>
    </body>
</html>