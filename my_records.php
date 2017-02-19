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
<link href="css/css2/bootstrap.min.css" rel="stylesheet">
<link href="css/css2/styles.css" rel="stylesheet">
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

//$universe=$_SESSION['universalpasskey'];
//$universe2=$_SESSION['universalpasskey2'];
$mySerial=0;
$surname="";
$staffid="";
?>
</head>

<body>
<div class="container instaFade">
	<?php include( "header.php"); ?>
    <div class="body quickFade mCustomScrollbar" data-mcs-theme="minimal-dark">
    <div class="logoutp">
     <p>
    <span class="goback" ><a href="home.php">Go back to Home&nbsp;<span></span></a></span>
    
    </p></div>
    	<div class="emp">
        	<div class="nav ">
            	<ul>
               <li><a href="admin_home.php" <?php if (($page == 'admin_home.php')) { ?>class="active"<?php } ?>>My Profile</a></li>
             <li><a href="change_admin.php" <?php if (($page == 'change_admin.php')) { ?>class="active"<?php } ?>>Change Profile Settings</a></li>
              <li><a href="my_records.php" <?php if (($page == 'my_records.php')) { ?>class="active"<?php } ?>>My Records</a></li>  
                 
                </ul>
            </div>
        	<div class="all_emp mCustomScrollbar" data-mcs-theme="minimal-dark">
			<div class="emp_label">List of Staff Registered by me</div>
			<div class="panel panel-default">
			<div class="panel-body ">
            <!--data-sort-order="desc"data-show-columns="true" data-show-refresh="true"data-select-item-name="toolbar1"-->
			
			<table class="emp_table" data-toggle="table" data-url="" data-show-toggle="true"   data-search="true"  data-pagination="true" data-sort-name="name" >
            
					<thead class="thead"><!--tables/data1.json-->
					
					<tr>
					
						<th width="3%">S/N</th>
						<th  width="42%" >Employee Name</th>
						
						<th width="18%"  >Staff ID</th>
						<th  width="19%" >Ministry</th>
                        <th  width="17%" >Date Registered</th>
					</tr>
					</thead>
					<!-- Here is the beginning of the table body-->
					<tbody>
					
							<tr>
														
								<td width="3%"><a href="emp_details.php"></a></td>
								<td width="42%"><a href="emp_details.php"></a></td>
								<td width="18%" ><a href="emp_details.php"></a></td>
                                
                                
                        
					
							<td width="18%" ><a href="emp_details.php"></a> </td>
							<td  width="17%" ><a href="#"></a></td>
							</tr>
					
					
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
	<script src="js/bootstrap-table.js"></script>
</body>
</html>