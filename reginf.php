<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Oyo State Payroll System</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/screen.css" />
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css" />
<link rel="icon" href="img/logo.png" />
<link rel="stylesheet" type="text/css" href="date/jquery.datetimepicker.css"/>
<script src="js/jquery-1.8.2.min.js"></script>
 <script src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js"></script>
<link rel="stylesheet" href="css/avatar.css">
<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/styleselect.css" />
<script type='text/javascript' src='js/select_demo2.js'></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>   
<?php
session_name("MyLogin");
session_start();

$DBhost = "localhost"; 
$DBuser = "samson";
$DBpass = "samson"; 
$DBname ="oyocomm";	
$link=mysql_connect($DBhost,$DBuser,$DBpass)or die("Unable to connect to database");   //connect to the database
mysql_select_db($DBname,$link); 

//$infs=array();
//$bens=array();
//$inff="";
//$benn="";

$infs="";
$bens="";

if (isset($_POST['submit'])){
	$commname= $_POST['commname'];
	$query ="SELECT * FROM communities where commName='$commname'";

	$qry_result =  mysql_query($query,$link) or die ("Error Occured ".mysql_error());

	while($row = mysql_fetch_array($qry_result)){
	

		$infs = $row['infrastructure'];
		$bens=$row['beneficiaries'];
		//echo $infs;
		$inff=$_POST['inf'];
		$benn=$_POST['ben'];
		
		$infs=$infs.":".$inff;
		$bens=$bens.":".$benn;
	 
	}
	
	$sql="UPDATE  communities SET infrastructure='$infs',
			beneficiaries='$bens'
			WHERE commName='$commname'";
	$check=mysql_query($sql,$link);
	if(!$check){
		echo "Error occured ".mysql_error();
	}
	
}


	
	/*$inff=$_POST['inf'];
	$benn=$_POST['ben'];
	
	array_push($infs,$inff);
	array_push($bens,$benn);
	
	$inff="";
	$benn="";*/


				
?>


</head>

<body>
<div class="container instaFade">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
    	<p class="regheader">Registration Panel:  <span style="color:#900">Infrastructure</span></p>
		
    	<form action="" method="POST" enctype="multipart/form-data" >
        	<label>Community Name:</label>
			<p><select style="width:95%;" name="commname" onmousemove="ajaxfunction()" onblur="ajaxfunction()" onclick="ajaxfunction()" id="commname">
				<?php
					$query = "SELECT * FROM communities";

					$runing = mysql_query($query,$link);

					while($data = mysql_fetch_assoc($runing)){

						$comms = $data['commName'];
			?>

					<option name="$comms"><?php echo $comms; ?> </option><br>
				<?php } ?>
			</p>
        	<!--<p><input type="text" placeholder="Input Community Name here" name="surname"/></p>-->
            
            <label>Town:</label>
        	<p><input type="text"  placeholder="Input Town here" name="firstname" readonly="readonly" id="town" value="<?php //echo $dtown; ?>"/></p>
            
            <label>Local Government Area:</label>
        	<p><input type="text" placeholder="Input L.G.A here" name="lastname" readonly="readonly" id="lga"/></p>
            
            <label>Community ID: <span style="color:#900;"></span></label>
        	<p><input type="text"  required="required" readonly="readonly"  name="staffid" id="comid"/></p>  
	
            <p class="regheader"><span style="color:#900">Section II: Infrastructure</span></p>
            <label>Infrastructure: <span style="color:#900;"> </span></label>
        	<p><input type="text" placeholder="" name="inf"  required/></p>
			
			<label>Beneficiary (s) <span style="color:#900;"> </span></label>
        	<p><input type="text" name="ben"  required/></p>
             <!--<input type="button" name="add" >+Addd</button>-->
            
            
          <button type="submit" class="submit" name="submit">Submit</button>
         <!--<button type="reset">Reset</button>-->
        </form>
    
    </div>
    <?php include( "footer.php"); ?>
    



</div>

<script src="date/jquery.datetimepicker.js"></script>
<script>
$('.datetimepicker').datetimepicker({
	lang:'en',
	timepicker:false,
	format:'d/m/Y',
	formatDate:'Y/m/d',
});
</script>



</body>
</html>