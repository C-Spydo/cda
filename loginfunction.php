<?php
session_name("MyLogin");
session_start();
				
		
function login_here(){
		$logstatus="";
		$username = $_POST['username'];
		$pword = $_POST['password'];
		
		if(empty($username) || empty($pword)){
			$logstatus="! Enter Username and Password";
		}
		else{
			$DBhost = "localhost"; 
			$DBuser = "root";
			$DBpass = ""; 
			$DBname ="oyoppis";	
			$link=mysql_connect($DBhost,$DBuser,$DBpass)or die("Unable to connect to database");   //connect to the database
			mysql_select_db($DBname,$link); 

			$sql = "SELECT * FROM passcodes WHERE username = '$username' and password = '$pword'";
			
			if($sql_exe = mysql_query($sql,$link)){
				$row = mysql_fetch_array($sql_exe);
				$status = $row['status'];
				
				if(mysql_num_rows($sql_exe) < 1){
					return"<strong>! Identity not Confirmed</strong>";
				}
				elseif($status == ""){
					return"<strong>! User Account not Confirmed </strong>";
				}
				elseif($status=="admin"){
				
					$_SESSION['sesusername'] = $row['username'];
					header('Location:home.php');//?link=1
				}
				else{
					
				}
			}
			else{
				$_SESSION['sesusername'] = "";
			}
		}
		
	}
		
		

?>