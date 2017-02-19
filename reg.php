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
<link rel="stylesheet" type="text/css" href="token_auto/dist/tokens.css">
<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/styleselect.css" />
<script type='text/javascript' src='js/select_demo2.js'></script>
    
<!--//<?php
//session_name("MyLogin");
//session_start();
//
//$DBhost = "localhost"; 
//$DBuser = "samson";
//$DBpass = "samson"; 
//$DBname ="oyocomm";	
//$link=mysql_connect($DBhost,$DBuser,$DBpass)or die("Unable to connect to database");   //connect to the database
//mysql_select_db($DBname,$link); 
//
//
//$finalstaffidd="";
//
//function idgen($linker){
//$staffid="";
//			$n1=rand(0,9);
//			$n2=rand(0,9);
//			$n3=rand(0,9);
//			$n4=rand(0,9);
//			$staffid=$n1.$n2.$n3.$n4;
//
//			$finally=idchecker($staffid,$linker);
//			return $finally;
//		}
//			
//function idchecker($a,$linkk){
//	$thre="SELECT * FROM communities WHERE commid='$a'"; 
//	$resultat=mysql_query($thre, $linkk);
//	if(mysql_num_rows($resultat)>0){
//		idgen();
//	}
//	else{ 
//		$finalstaffid=$a; 
//	}
//	return $finalstaffid;
//
//}
//
//$finalstaffidd=idgen($link);
//
//if (isset($_POST['submit'])){
//
//			
//			$commname=$_POST['commname'];
//			$town=$_POST['town'];
//			$commleader=$_POST['commleader'];
//			$commid=$_POST['commid'];
//			$lga=$_POST['lga'];
//			$dater=$_POST['dater'];
//			$email=$_POST['email'];
//			$phonenumber=$_POST['phonenumber'];
//
//			
//			$sql = "INSERT INTO communities (commName,town,lga,commId,commLeader,email,phoneNumber,date)
//					VALUES('$commname','$town','$lga','$commid','$commleader','$email','$phonenumber','$dater')";
//			
//			
//			///echo '<script type="text/javascript">','savedata();','</script>';
//			//$confirmer=$_POST['ll'];
//			//if($confirmer=="okay"){
//				$runquery = mysql_query($sql,$link);
//				
//					if ($runquery){
//						
//						header('Location:reg.php');
//						//$_SESSION['universalpasskey'] = $surname;
//						//$_SESSION['universalpasskey2']=$staffid;
//					}
//					else {
//						echo "<script> alert(\"An Error Occured,Retry\");</script>";
//						echo "Something Wrong".mysql_error();
//					}
//			//}
//	
//	}
//
//				
//?>-->

<!--<script>
	function savedata(){
		swal({
	  title: "Confirm",
	  text: "Are you sure to Save?!",
	  type:"warning",
	  showCancelButton: true,
	  confirmButtonColor: "rgba(153,0,0,.6)",
	  cancelButtonColor:"#f00",
	  confirmButtonText: "Yes, Save!",
	  cancelButtonText: "No, Cancel please!",
	  closeOnConfirm: false,
	  closeOnCancel: false
	},
	function(isConfirm){
	  if (isConfirm) {
		var ll=document.getElementById('ll');
		ll.value="okay";
		//window.parent(location="index.php");
	  } else {
			swal("Cancelled", "Progress Saved", "success");
	  }
	  
	  
	  });
		}
</script>-->
</head>

<body>
<div class="container instaFade">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
    	<p class="regheader">Registration Panel:  <span style="color:#900">New Infrastructure</span></p>
		
    	<form action="preview.php" method="POST" enctype="multipart/form-data" >
        <label>Local Government Area:</label>
        <select class="turnintodropdown_demo2">
        	<option>........</option>
        	<option>Afijio</option>
        	<option>Akinyele</option>
            <option>Atiba</option>
            <option>Atigbo</option>
            <option>Egbeda</option>
            <option>Ibadan Central</option>
            <option>Ibadan North</option>
            <option>Ibadan North West</option>
            <option>Ibadan South East</option>
            <option>Ibadan South West</option>
            <option>Ibarapa Central</option>
            <option>Ibarapa East</option>
            <option>Ibarapa North</option>
            <option>Ido</option>
            <option>Irepo</option>
            <option>Iseyin</option>
            <option>Itesiwaju</option>
            <option>Iwajowa</option>
            <option>Kajola</option>
            <option>Lagelu Ogbomosho North</option>
            <option>Ogbomosho South</option>
            <option>Ogo Oluwa</option>
            <option>Olorunsogo</option>
            <option>Oluyole</option>
            <option>Ona - Ara</option>
            <option>Orelope</option>
            <option>Ori Ire</option>
            <option>Oyo East</option>
            <option>Oyo West</option>
            <option>Saki East</option>
            <option>Saki West</option>
            <option>Surulere</option>
            
        </select>
        
        <label>Community Name:  </label>
        <p><input type="text" placeholder="Input Community Name" name="commleader" /></p>
         <label>Proposed Community Development:  <span style="color:#900; font-size:11px;">*** You cannot select more than one *** </span></label>
        
        <input type="text" placeholder="Input Proposed Community Development Service" />
        	
            
            <label>Community Leader's Name: </label>
        	<p><input type="text" placeholder="Input Community Leader here" name="commleader" required/></p>
			
			 <label>Community Leader's Phone Number: </label>
        	<p><input type="text" placeholder="Input Phone Number here" name="phonenumber" required/></p>
			
			<label>Date Registered: <span style="color:#900;"> </span></label>
        	<p><input type="text" placeholder="Select date of service" class="datetimepicker" id="login-text" value=""/></p>
            
           
            
          <button type="submit" class="submit" name="submit" onclick="savedata();">Submit</button>
         <button type="reset">Reset</button>
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


<script src="token_auto/lib/jquery.min.js"></script>
<script src="token_auto/dist/tokens.js"></script>
<script src="token_auto/dist/fidel.tokens.js"></script>
<script>
      (function(){
        $('.tokens_auto').tokens({
          source : [
           
          ],
         
        });
      })();
    </script>
</body>
</html>