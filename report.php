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

function empdelete() {
	alert ("Successfully Deleted")
	
}

</script>

<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>


<?php

session_name("MyLogin");
session_start();

$DBhost = "localhost"; 
$DBuser = "root";
$DBpass = ""; 
$DBname ="oyoppis";	
$link=mysql_connect($DBhost,$DBuser,$DBpass)or die("Unable to connect to database");   //connect to the database
mysql_select_db($DBname,$link); 

$universe=$_SESSION['universalpasskey'];
$universe2=$_SESSION['universalpasskey2'];

$mySerial=0;
?>

	

</head>

<body>
<div class="container">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
    <div class="logoutp">
    <div>
    	<p><span style="opacity:0;">- </span><!--<?php include( "nav.php"); ?>--></p>
    	
    	<h3 class="goback" > <a  href="home.php" ><span></span> go back to home</a></h3></div></div>
    	<div class="emp">
        	
        	<div class="search mCustomScrollbar" data-mcs-theme="minimal-dark">
            <p class="label">Search for the Employee You Want to Update profile</p>
            <div class="delete">
            <br />
               <form class="report"  action="" method="POST">
              <span class="reportp1"><label>Question:</label>
              	<select >
                <option>Select the question you want generate report for.....</option>
                <option>.......</option>
                <option ><a href="?link=1">Staff list by cadre</a></option>
                <option><a href="?link=2">Staff list by grade level 1 - 6</a></option>
                <option><a href="?link=3">Staff list by grade level 7 - 12</a></option>
                <option><a href="?link=4">Staff list by grade level 13 & above</a></option>
                <option><a href="?link=5">List of staff due for retirement</a></option>
                <option><a href="?link=6">List of all staff</option>
                </select> </span>  
                
                <span class="reportp2"><label>Department:</label>
              	<select name="ministry">
                <option>Select the ministry....</option>
                <option>.......</option>
                <option>Accountant General</option>
            <option>Agency For Youth Development</option>
            <option>Auditor General for Local Government</option>
            <option>Auditor General for State Government</option>
            <option>Agricultural Credit Corporation</option>
            <option>Board of Internal Revenue</option>
            <option>Botaved</option>
            <option>Civil Service Commission</option>
            <option>Council for Arts and Culture</option>
            <option>Government Press</option>
            <option>Governor's Office</option>			
            <option>Head Of Service</option>
            <option>House Of Assembly</option>
            <option>House Of Assembly Service Commission</option>
            <option>Judiciary Service Commission</option>
            <option>Library Board</option>
            <option>Ministry For Youth And Sport</option>
            <option>Ministry Of Agriculture</option>			
            <option>Ministry Of Culture And Tourism</option>
            <option>Ministry Of Economic Planning And Budget</option>
            <option>Ministry Of Education</option>
            <option>Ministry Of Environment</option>
            <option>Ministry Of Establishment</option>
            <option>Ministry Of Finance</option>
            <option>Ministry Of Health</option>			
            <option>Ministry Of Industry</option>
            <option>Ministry Of Information</option>
            <option>Ministry Of Justice</option>
            <option>Ministry Of Lands</option>
            <option>Ministry Of Local Government</option>
            <option>Ministry Of Special Duties</option>
            <option>Ministry Of Trade Investment And Cooperative</option>			
            <option>Ministry Of Water Resources</option>
            <option>Ministry Of Women Affairs</option>
            <option>Ministry Of Works</option>
            <option>Office Of The Surveyor General</option>
            <option>Oysadep</option>
            <option>Pension Board</option>
            <option>Sport Council</option>
            <option>Subeb HQ</option>
            <option>Tescom HQ</option>
            <option>Urban and Regional Planning</option>
                </select> </span>
              
              
              
              <p class="deletep2"><button type="submit" name="search">Search</button><button type="reset">Reset</button></p>
               </form>
              </div> 
              <br />
              <br />
              <br />
              	<br />	
                <br />
              <br />
              <br />
              	<br />
                <br />
              	
                  
             <table class="updatetable">
                	<p class="deletelabel">Search Result<span><?php echo "   ".$mySerial." Results Found"; ?></span></p>
                    <tr>
                    	<td width="5%">S/N</td>
                        <td width="35%">Name</td>
						<td width="15%">Staff ID</td>
                        <td width="15%">Department</td>
                        
                        <td width="15%">Cadre</td>
                        <td width="15%">Level</td>
                        
                    </tr>
                   
                   <?php
if(isset($_POST['search'])){				   
	$ministry=$_POST['ministry'];	
	if(isset($_GET['link'])){
			
			$link= $_GET['link'];
	if($link=='1'){
		//header('Location:index.html');
	}
	
	elseif($link=='2'){
				$mySerial=1;
						$squer="SELECT * FROM personal WHERE ministry='$ministry' AND gradelevel<=6";
						
						$resultat=mysql_query($squer,$link);
						if(mysql_num_rows($resultat)>0){	
							while($row = mysql_fetch_array($resultat)) {
							
							$surname=$row['surname'];
							$firstname=$row['firstname'];
							$lastname=$row['lastname'];
							$staffid=$row['staffid'];
							$realname=$surname." ".$firstname." ".$lastname;
					?>
							<tr>
								<td></td>
							
								<td><?php echo $mySerial ?></td>
								<td><?php echo $realname?></td>
								<td><?php echo $row['staffid']?></td>
								
					<?php  
							$sql="SELECT * FROM employment WHERE presentgradelevel<=6 AND presentministry='$ministry'";
							$result=mysql_query($sql,$link);
							if(mysql_num_rows($result)>0){	
							while($row = mysql_fetch_array($result)) {
						?>
							<td><?php echo $row['presentministry'] ?> </td>
							<td><?php echo $row['presentcadre'] ?> </td>
							<td><?php echo $row['presentgradelevel'] ?> </td>

							
							</tr>
					<?php }}
						$mySerial= $mySerial+1;
					} }
	}
	
	elseif($link=='3'){
		$mySerial=1;
		$term1=7;
		$term2=12;
						$squer="SELECT * FROM personal WHERE ministry='$ministry' AND gradelevel BETWEEN '$term1' AND '$term2' ";
						
						$resultat=mysql_query($squer,$link);
						if(mysql_num_rows($resultat)>0){	
							while($row = mysql_fetch_array($resultat)) {
							
							$surname=$row['surname'];
							$firstname=$row['firstname'];
							$lastname=$row['lastname'];
							$staffid=$row['staffid'];
							$realname=$surname." ".$firstname." ".$lastname;
					?>
							<tr>
								<td></td>
							
								<td><?php echo $mySerial ?></td>
								<td><?php echo $realname?></td>
								<td><?php echo $row['staffid']?></td>
								
					<?php  
							$sql="SELECT * FROM employment WHERE  presentministry='$ministry' AND gradelevel BETWEEN '$term1' AND '$term2'";
							$result=mysql_query($sql,$link);
							if(mysql_num_rows($result)>0){	
							while($row = mysql_fetch_array($result)) {
						?>
							<td><?php echo $row['presentministry'] ?> </td>
							<td><?php echo $row['presentcadre'] ?> </td>
							<td><?php echo $row['presentgradelevel'] ?> </td>

							
							</tr>
					<?php }}
						$mySerial= $mySerial+1;
					} }
	}
	
	
	elseif($link=='4'){
		$mySerial=1;
		//$term1=7;
		//$term2=12;
						$squer="SELECT * FROM personal WHERE ministry='$ministry' AND gradelevel>12 ";
						
						$resultat=mysql_query($squer,$link);
						if(mysql_num_rows($resultat)>0){	
							while($row = mysql_fetch_array($resultat)) {
							
							$surname=$row['surname'];
							$firstname=$row['firstname'];
							$lastname=$row['lastname'];
							$staffid=$row['staffid'];
							$realname=$surname." ".$firstname." ".$lastname;
					?>
							<tr>
								<td></td>
							
								<td><?php echo $mySerial ?></td>
								<td><?php echo $realname?></td>
								<td><?php echo $row['staffid']?></td>
								
					<?php  
							$sql="SELECT * FROM employment WHERE  presentministry='$ministry' AND gradelevel>12";
							$result=mysql_query($sql,$link);
							if(mysql_num_rows($result)>0){	
							while($row = mysql_fetch_array($result)) {
						?>
							<td><?php echo $row['presentministry'] ?> </td>
							<td><?php echo $row['presentcadre'] ?> </td>
							<td><?php echo $row['presentgradelevel'] ?> </td>

							
							</tr>
					<?php }}
						$mySerial= $mySerial+1;
					} }
	}
	elseif($link=='5'){
		$mySerial=1;
		$presentyear=date('Y');
		$term2=12;
						$squer="SELECT * FROM personal WHERE ministry='$ministry' ";
						
						$resultat=mysql_query($squer,$link);
						if(mysql_num_rows($resultat)>0){	
							while($row = mysql_fetch_array($resultat)) {
							
							$dateofbirth=$row['dateofbirth'];
							$date=explode("-", $dateofbirth);
							$year=$date[2];
							$agediff=$presentyear-$year;
							
							$surname=$row['surname'];
							$firstname=$row['firstname'];
							$lastname=$row['lastname'];
							$staffid=$row['staffid'];
							$realname=$surname." ".$firstname." ".$lastname;
							
							
							$sql="SELECT * FROM employment WHERE  presentministry='$ministry'";
							$result=mysql_query($sql,$link);
							if(mysql_num_rows($result)>0){	
							while($roww = mysql_fetch_array($result)) {
								$date2=$roww['firsappointment'];
								$datee=explode("-", $date2);
								$yearr=$datee[0];
								$agediff2=$presentyear-$yearr;
							
								$presentministry=$roww['presentministry'];
								$presentcadre=$roww['presentcadre'];
								$presentgradelevel=$roww['presentgradelevel'];
							
							}}
							
						if (($agediff>=60)||($agediff2>=35)){
						?>
							<tr>
								<td></td>
							
								<td><?php echo $mySerial ?></td>
								<td><?php echo $realname?></td>
								<td><?php echo $row['staffid']?></td>
							<td><?php echo $presentministry ?> </td>
							<td><?php echo $presentcadre ?> </td>
							<td><?php echo  $presentgradelevel?> </td>
								
							
							</tr>
					<?php }
						$mySerial= $mySerial+1;
					} }
	}
	elseif($link=='6'){
		
						$mySerial=1;
						$squer="SELECT * FROM personal WHERE ministry='$ministry'";
						
						$resultat=mysql_query($squer,$link);
						if(mysql_num_rows($resultat)>0){	
							while($row = mysql_fetch_array($resultat)) {
							
							$surname=$row['surname'];
							$firstname=$row['firstname'];
							$lastname=$row['lastname'];
							$staffid=$row['staffid'];
							$realname=$surname." ".$firstname." ".$lastname;
					?>
							<tr>
								<td></td>
							
								<td><?php echo $mySerial ?></td>
								<td><?php echo $realname?></td>
								<td><?php echo $row['staffid']?></td>
								
					<?php  
							$sql="SELECT * FROM employment WHERE presentministry='$ministry'";
							$result=mysql_query($sql,$link);
							if(mysql_num_rows($result)>0){	
							while($row = mysql_fetch_array($result)) {
						?>
							<td><?php echo $row['presentministry'] ?> </td>
							<td><?php echo $row['presentcadre'] ?> </td>
							<td><?php echo $row['presentgradelevel'] ?> </td>
							
							</tr>
					<?php }}
						$mySerial= $mySerial+1;
					} }
					}
					
	}}
					
					
					?>
	
                </table>
                
            
            
            
            </div>
        </div>
    </div>
    <?php include( "footer.php"); ?>
   



</div>

<script src="js/scripts.js"></script>
</body>
</html>