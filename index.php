<?php
//	include("loginfunction.php");
//	$msg="";
//	if(isset($_POST['submit'])){
//		$msg = login_here();
//	}
//?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Oyo State Community and Social Develoment Agency</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/screen.css" />
<link rel="icon" href="img/logo.png" />
<script src="js/jquery-1.8.2.min.js"></script>
 <script src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js"></script>
</head>

<body>
<div class="container instaFade">
	<?php include( "header.php"); ?>
    <div class="body quickFade">
    	<p class="loginheader">Log in Authentication</p>
    	<form action="home.php" method="POST">
        	<label class="quickFade delayFour">Username:</label><!--<label><font color="#900">//<?php echo $msg;?></font></label>-->
        	<p class="quickFade delayFour"><input type="text" required="required" name="username" placeholder="Input your Username here" /></p>
            <label class="quickFade delayFour">Password:</label>
        	<p class="quickFade delayFour"><input type="password" required="required" name="password" placeholder="Input your Password here" /></p>

            <button class="quickFade delayTwo" type="submit" name="submit">Log in</button>
            
        </form>
    
    
    </div>
    <?php include( "footer.php"); ?>
    



</div>
</body>
</html>
