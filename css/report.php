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
               <form class="report"  action="#">
              <span class="reportp1"><label>Question:</label>
              	<select >
                <option>Select the question you want generate report for.....</option>
                <option>.......</option>
                <option>Staff list by cadre</option>
                <option>Staff list by grade level 1 - 6</option>
                <option>Staff list by grade level 7 - 12</option>
                <option>Staff list by grade level 13 & above</option>
                <option>List of staff due for retirement</option>
                <option>List of all staff</option>
                </select> </span>  
                
                <span class="reportp2"><label>Department:</label>
              	<select>
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
              
              
              
              <p class="deletep2"><button type="submit">Search</button><button type="reset">Reset</button></p>
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
                	<p class="deletelabel">Search Result<span>*** 2 Result found ***</span></p>
                    <tr>
                    	<td width="5%">S/N</td>
                        <td width="35%">Name</td>
                        <td width="15%">Department</td>
                        <td width="15%">Staff ID</td>
                        <td width="15%">Cadre</td>
                        <td width="15%">Level</td>
                        
                    </tr>
                    <tr>
                    	<td width="5%">01</td>
                        <td width="35%"><a href="emp_details.php">Phobia Philia</a></td>
                        <td width="15%"><a href="emp_details.php">M.I.C</a></td>
                        <td width="15%"><a href="emp_details.php">100100</a></td>
                        <td width="15%"><a href="emp_details.php">manwger</a></td>
                        <td width="15%"><a href="emp_details.php">17</a></td>
                    </tr>
                    
                    <tr>
                    	<td width="5%">01</td>
                        <td width="35%"><a href="emp_details.php">Phobia Philia</a></td>
                        <td width="15%"><a href="emp_details.php">M.I.C</a></td>
                        <td width="15%"><a href="emp_details.php">100100</a></td>
                        <td width="15%"><a href="emp_details.php">manwger</a></td>
                        <td width="15%"><a href="emp_details.php">17</a></td>
                    </tr>
                    
                    <tr>
                    	<td width="5%">01</td>
                        <td width="35%"><a href="emp_details.php">Phobia Philia</a></td>
                        <td width="15%"><a href="emp_details.php">M.I.C</a></td>
                        <td width="15%"><a href="emp_details.php">100100</a></td>
                        <td width="15%"><a href="emp_details.php">manwger</a></td>
                        <td width="15%"><a href="emp_details.php">17</a></td>
                    </tr>
                    
                    <tr>
                    	<td width="5%">01</td>
                        <td width="35%"><a href="emp_details.php">Phobia Philia</a></td>
                        <td width="15%"><a href="emp_details.php">M.I.C</a></td>
                        <td width="15%"><a href="emp_details.php">100100</a></td>
                        <td width="15%"><a href="emp_details.php">manwger</a></td>
                        <td width="15%"><a href="emp_details.php">17</a></td>
                    </tr>
                    
                    <tr>
                    	<td width="5%">01</td>
                        <td width="35%"><a href="emp_details.php">Phobia Philia</a></td>
                        <td width="15%"><a href="emp_details.php">M.I.C</a></td>
                        <td width="15%"><a href="emp_details.php">100100</a></td>
                        <td width="15%"><a href="emp_details.php">manwger</a></td>
                        <td width="15%"><a href="emp_details.php">17</a></td>
                    </tr>
                    
                    <tr>
                    	<td width="5%">01</td>
                        <td width="35%"><a href="emp_details.php">Phobia Philia</a></td>
                        <td width="15%"><a href="emp_details.php">M.I.C</a></td>
                        <td width="15%"><a href="emp_details.php">100100</a></td>
                        <td width="15%"><a href="emp_details.php">manwger</a></td>
                        <td width="15%"><a href="emp_details.php">17</a></td>
                    </tr>
                    
                    <tr>
                    	<td width="5%">01</td>
                        <td width="35%"><a href="emp_details.php">Phobia Philia</a></td>
                        <td width="15%"><a href="emp_details.php">M.I.C</a></td>
                        <td width="15%"><a href="emp_details.php">100100</a></td>
                        <td width="15%"><a href="emp_details.php">manwger</a></td>
                        <td width="15%"><a href="emp_details.php">17</a></td>
                    </tr>
                    
                    <tr>
                    	<td width="5%">01</td>
                        <td width="35%"><a href="emp_details.php">Phobia Philia</a></td>
                        <td width="15%"><a href="emp_details.php">M.I.C</a></td>
                        <td width="15%"><a href="emp_details.php">100100</a></td>
                        <td width="15%"><a href="emp_details.php">manwger</a></td>
                        <td width="15%"><a href="emp_details.php">17</a></td>
                    </tr>
                    
                    <tr>
                    	<td width="5%">01</td>
                        <td width="35%"><a href="emp_details.php">Phobia Philia</a></td>
                        <td width="15%"><a href="emp_details.php">M.I.C</a></td>
                        <td width="15%"><a href="emp_details.php">100100</a></td>
                        <td width="15%"><a href="emp_details.php">manwger</a></td>
                        <td width="15%"><a href="emp_details.php">17</a></td>
                    </tr>
                    
                    <tr>
                    	<td width="5%">01</td>
                        <td width="35%"><a href="emp_details.php">Phobia Philia</a></td>
                        <td width="15%"><a href="emp_details.php">M.I.C</a></td>
                        <td width="15%"><a href="emp_details.php">100100</a></td>
                        <td width="15%"><a href="emp_details.php">manwger</a></td>
                        <td width="15%"><a href="emp_details.php">17</a></td>
                    </tr>
                    
                    <tr>
                    	<td width="5%">01</td>
                        <td width="35%"><a href="emp_details.php">Phobia Philia</a></td>
                        <td width="15%"><a href="emp_details.php">M.I.C</a></td>
                        <td width="15%"><a href="emp_details.php">100100</a></td>
                        <td width="15%"><a href="emp_details.php">manwger</a></td>
                        <td width="15%"><a href="emp_details.php">17</a></td>
                    </tr>
                    
                   
                </table>
                
            
            
            
            </div>
        </div>
    </div>
    <?php include( "footer.php"); ?>
   



</div>

<script src="js/scripts.js"></script>
</body>
</html>