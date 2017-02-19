<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Oyo State Payroll System</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/screen.css" />
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css" />
<link rel="icon" href="img/logo.png" />
<script src="js/jquery-1.8.2.min.js"></script>
 <script src="js/jquery.backstretch.min.js"></script>
<script>
function logout() {
	alert("Are you sure you want to logout")
	}

</script>

<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
<link href="css/css2/bootstrap.min.css" rel="stylesheet">

<link href="css/css2/styles.css" rel="stylesheet">

<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<?php

session_name("MyLogin");
session_start();

$DBhost = "localhost"; 
$DBuser = "samson";
$DBpass = "samson"; 
$DBname ="oyocomm";	
$link=mysql_connect($DBhost,$DBuser,$DBpass)or die("Unable to connect to database");   //connect to the database
mysql_select_db($DBname,$link); 

//$universe=$_SESSION['universalpasskey'];
//$universe2=$_SESSION['universalpasskey2'];


?>
</head>

<body>
<div class="container instaFade">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
     <div class="logoutp">
   <p>
    <span class="goback" ><a href="home.php">Go back to Home&nbsp;<span></span></a></span>
    
    </p></div>
    	<div class="emp">
        	<div class="nav ">
            	<ul>
               <li><a href="comprofile.php" <?php if (($page == 'comprofile.php')) { ?>class="active"<?php } ?>>View Communities</a></li>
              <li><a href="#" <?php if (($page == 'updatecom.php')) { ?>class="active"<?php } ?>>Search & Update</a></li>  
                </ul>
            </div>
        	<div class="all_emp mCustomScrollbar" data-mcs-theme="minimal-dark">
            <p class="label">Search for the Employee You Want to Update profile</p>
            <div class="delete">
               <form  action="" method="POST">
              <p class="deletep1"><select style="width:95%;" name="commname" />
				<?php
					$query = "SELECT * FROM communities";

					$runing = mysql_query($query,$link);

					while($data = mysql_fetch_assoc($runing)){

						$comms = $data['commName'];
			?>

					<option name="$comms"><?php echo $comms; ?> </option><br>
			  	<?php } ?>
			  </p>
              <p class="deletep2"><button type="submit" name="search">Search</button></p>
               </form>
              </div> 
              <br />
              <br />
              <br />
              	<br />	
		
				
			

			
			<table class="emp_table " data-toggle="table" data-url="" data-show-toggle="true"   data-search="true"  data-pagination="true" data-sort-name="name" >
            
					<thead class="thead"><!--tables/data1.json-->
					
					<tr>
					
						<th width="5%">S/N</th>
						<th  width="48%" >Community Name</th>
						
						<th width="20%"  >Unique ID</th>
						<th  width="20%" >Town</th>
						<th  width="20%" >L.G.A</th>
					</tr>
					</thead>
					<!-- Here is the beginning of the table body-->
					<tbody>
					<?php
					if (isset($_POST['search'])){
						$mySerial=">>>";
						$searcher=$_POST['commname'];
						$squer="SELECT * FROM communities WHERE commName='$commname' ";
						
						$resultat=mysql_query($squer,$link);
						if(mysql_num_rows($resultat)>0){	
							while($row = mysql_fetch_array($resultat)) {
							
							$commname=$row['commName'];
							$commid=$row['commId'];
							$town=$row['town'];
							$lga=$row['lga'];
	
					?>
							<tr>
														
								<td width="5%"><a href=""><?php echo $mySerial ?></a></td>
								<td width="48%"><a href=""><?php echo $commname?></a></td>
								<td width="20%" ><a href=""><?php echo $commid?></a></td>
								<td width="20%" ><a href=""><?php echo $town?></a></td>
								<td width="20%" ><a href=""><?php echo $lga?></a></td>
							
							</tr>
					<?php 
						//$mySerial= $mySerial+1;
					}}}
						
					 
					
					
					
					?>
					
					
				</tbody>
				</table>
            
            </div></div>
            
            </div>
        </div>
    </div>
    <?php include( "footer.php"); ?>
    



</div>

<script src="js/scripts.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	
	<script src="js/bootstrap-table.js"></script>
</body>
</html>