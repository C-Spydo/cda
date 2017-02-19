<?php

$dtown ="";
$dlga="";
$did="";

$DBhost = "localhost"; 
$DBuser = "samson";
$DBpass = "samson"; 
$DBname ="oyocomm";	
$link=mysql_connect($DBhost,$DBuser,$DBpass)or die("Unable to connect to database");   //connect to the database
mysql_select_db($DBname,$link); 

$commname= $_GET['code'];
$query ="SELECT * FROM communities where commName='$commname'";

$qry_result =  mysql_query($query,$link) or die ("Error Occured ".mysql_error());

while($row = mysql_fetch_array($qry_result)){
	

	 $dtown = $row['town'];
	 $dlga = $row['lga'];
	 $did = $row['commId'];


}

	//echo $display_name==""?"ACCOUNT DOES NOT EXIT":$display_name;
?>