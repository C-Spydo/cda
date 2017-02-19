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
	</form>
            <p class="regheader"><span style="color:#900">Section II: Infrastructure</span></p>
            <!--<div class="all_emp mCustomScrollbar" data-mcs-theme="minimal-dark">-->
			<div class="emp_label">Community Infrastructures</div>
			<div class="panel panel-default">
			<div class="panel-body ">
            <!--data-sort-order="desc"data-show-columns="true" data-show-refresh="true"data-select-item-name="toolbar1"-->
			
			<table class="emp_table " data-toggle="table" data-url="" data-show-toggle="true"   data-search="true"  data-pagination="true" data-sort-name="name" >
            
					<thead class="thead"><!--tables/data1.json-->
					
					<tr>
					
						<th width="5%">S/N</th>
						<th  width="48%">Infrastructure</th>
						
						<th width="20%"  >Beneficiaries</th>
						<th  width="20%" >Date</th>
						<th  width="20%" >Provider</th>
					</tr>
					</thead>
					<!-- Here is the beginning of the table body-->
					<tbody>
					<?php
						$mySerial=1;
						//$passedname=$_SESSION['passedname'];
						$passedname="Onipepeye";
						$squer="SELECT * FROM communities WHERE commName='$passedname'";
						
						$resultat=mysql_query($squer,$link);
						if(mysql_num_rows($resultat)>0){	
							while($row = mysql_fetch_array($resultat)) {
							
							$main=$row['infrastructure'];
							$main2=$row['beneficiaries'];
							$allinf=(explode(":",$main));
							$allben=(explode(":",$main));
							
							$counter= sizeof($allinf);
							//echo $counter;
							$upc=0;
							while($upc<$counter){
								$inf=$allinf[$upc];
								$ben=$allben[$upc];
	
					?>
							<tr>
														
								<td width="5%"><a href="commdetails.php"><?php echo $mySerial ?></a></td>
								<td width="48%"><a href="commdetails.php"><?php echo $inf?></a></td>
								<td width="20%" ><a href="commdetails.php"><?php echo $ben?></a></td>
								<td width="20%" ><a href="commdetails.php"><?php echo ""?></a></td>
								<td width="20%" ><a href="commdetails.php"><?php echo ""?></a></td>
	
							
							</tr>
					<?php 
						$mySerial= $mySerial+1;
						$upc=$upc+1;
					}}}
						
					 
					
					
					
					?>
					
					
				</tbody>
				</table>
            
            </div></div>
            
            </div>
        </div>
         <!--<button type="reset">Reset</button>-->
        
    
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