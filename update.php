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
<script src="js/scripts.js"></script>
<link rel="stylesheet" href="css/avatar.css">
<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<style>
		.avatar-upload {
			margin:0 auto;
			width: 80px;
			border:2px double #990000;
			box-shadow:#900 0px 0px 10px;
			height: 80px;
			margin-top:15px;
			margin-bottom:15px;
		}
		.avatar-upload:hover {
	-webkit-transition: all 0.7s ease-in-out;
  	-moz-transition: all 0.7s ease-in-out;
	transition: all 0.7s ease-in-out;
	-webkit-transform:scale(1.1,1.1);
	-moz-transform:scale(1.1,1.1);
	transform:scale(1.1,1.1);
	background:rgba(153,0,0,.5);
	box-shadow: 0px 0px 5px rgba(153,0,0,.5);
	border:2px solid #fff;
		}
		.avatar-upload img {
			alignment-adjust:central;
			max-width: 80px;
			max-height: 80px;
		}
	</style>
    

</head>

<body>
<div class="container">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
    <p class="regheader">Update Profile</p>
    <p class="previewnote">*** Note not Everything can be Edited*** </p>
    	<p class="regheader"><span style="color:#900">Section A: Personal Information</span></p>
    	<form action="emp_details.php">
        	<label>Surname:</label>
        	<p><input type="text" readonly="readonly" placeholder="Input Surname here" /></p>
            
            <label>Firstname:</label>
        	<p><input type="text" readonly="readonly"  placeholder="Input Firstname here" /></p>
            
            <label>Lastname:</label>
        	<p><input type="text" readonly="readonly" placeholder="Input Lastname here" /></p>
            
            <label>Staff ID: <span style="color:#900;">*** will be generated *** </span></label>
        	<p><input type="text" readonly="readonly" required="required" value="001aaa" /></p>
            
            <label>Ref ID: <span style="color:#900;">*** only for those that have before *** </span></label>
        	<p><input type="text" readonly="readonly" placeholder="Input Ref ID here" /></p>
            
            <label>Previous Name: <span style="color:#900;">*** Change of Name/ Maiden Name *** </span></label>
        	<p><input type="text" readonly="readonly" placeholder="Input your Previous Name here" /></p>
            
            <label>Gender:</label>
        	<p><select readonly="readonly">
            <option>....</option>
            <option>Male</option>
            <option>Female</option>
            </select></p> 
            
            <label>Date of Birth:</label>
        	<p><select readonly="readonly" style="width:28%;">
            <option>Day</option>
            <option>...</option>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
            </select> 
           <select readonly="readonly" style="width:28%;">
            <option>Month</option>
            <option>...</option>
            <option>Jan</option>
            <option>Feb</option>
            <option>Mar</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>Aug</option>
            <option>Sep</option>
            <option>Oct</option>
            <option>Nov</option>
            <option>Dec</option>
            </select>
            
            <select readonly="readonly" style="width:28%;">
            <option>Year</option>
            <option>...</option>
            <option>2015</option>
            <option>2014</option>
            <option>2013</option>
            <option>2012</option>
            <option>2011</option>
            <option>2010</option>
            <option>2009</option>
            <option>2008</option>
            <option>2007</option>
            <option>2006</option>
            <option>2005</option>
            <option>2004</option>
            <option>2003</option>
            <option>2002</option>
            <option>2001</option>
            <option>2000</option>
            <option>1999</option>
            <option>1998</option>
            <option>1997</option>
            <option>1996</option>
            <option>1995</option>
            <option>1994</option>
            <option>1993</option>
            <option>1992</option>
            <option>1991</option>
            <option>1990</option>
            <option>1989</option>
            
            <option>1988</option>
            <option>1987</option>
            <option>1986</option>
            <option>1985</option>
            <option>1984</option>
            <option>1983</option>
            <option>1982</option>
            <option>1981</option>
            <option>1980</option>
             <option>1979</option>
            
            <option>1978</option>
            <option>1977</option>
            <option>1976</option>
            <option>1975</option>
            <option>1974</option>
            <option>1973</option>
            <option>1972</option>
            <option>1971</option>
            <option>1970</option>
             <option>1969</option>
            
            <option>1968</option>
            <option>1967</option>
            <option>1966</option>
            <option>1965</option>
            <option>1964</option>
            <option>1963</option>
            <option>1962</option>
            <option>1961</option>
            <option>1960</option>
             <option>1959</option>
            
            <option>1958</option>
            <option>1957</option>
            <option>1956</option>
            <option>1955</option>
            <option>1954</option>
            <option>1953</option>
            <option>1952</option>
            <option>1951</option>
            <option>1950</option>
             
            
            </select></p> 
            
            <label>Nationality:</label>
        	<p><input type="text" readonly="readonly" required="required" placeholder="Input Nationality here" /></p>
            
            <label>State of Origin:</label>
        	<p><input type="text" readonly="readonly" required="required" placeholder="Input State of Origin here" /></p>
           
            <label>Local Government Area:</label>
        	<p><input type="text" readonly="readonly" required="required" placeholder="Input Local Government Area here" /></p>
            
            <label>Incremental Date:</label>
        	<p><input type="date" placeholder="Input Incremental Date here" /></p>
            <div class="avatar-upload">
				<img src="img/client.png"/>
			</div>
        
        <br />
        <p class="regheader"><span style="color:#900">Section B: Contact Information</span></p>
        <br />
        <br />
        <label>Correspondence Address:</label>
        	<p><input type="text" placeholder="Input Correspondence Address here" /></p>
            
            <label>Permanent Address:</label>
        	<p><input type="text"  placeholder="Input Permanent Address here" /></p>
            
            <label>Mobile Number:</label>
        	<p><input type="text"  placeholder="Input Mobile Number here" /></p>
            
            <label>E-mail <span style="color:#900;">*** If Any *** </span></label>
        	<p><input type="email"   placeholder="Input E-mail here"  /></p>
            
              <br />
            <p class="regheader"><span style="color:#900">Section C: Educational Qualification/ Training</span></p>
              <br />
                <br />
                <label>Primary School Attended:</label>
        	<p><input type="text" readonly="readonly" placeholder="Input Primary School Attended here" /></p>
            
            <label>Secondary School/College Attended:</label>
        	<p><input type="text" readonly="readonly" placeholder="Input Secondary School/College Attended here" /></p>
            
            <label>Tertiary Institution Attended:</label>
        	<p><input type="text" readonly="readonly" placeholder="Input Tertiary Institution Attended here" /></p>
            
            <label>Others <span style="color:#900;">*** If Any *** </span></label>
        	<p><input type="text" placeholder="Input Others here"  /></p>
            
            <br />
            <p class="regheader"><span style="color:#900">Section D: Employment Record</span></p>
            
            <br />
                <br />
                <label>Date of first Appointment:</label>
        	<p><input type="date"  placeholder="Input Date of first Appointment here" /></p>
            
            <label>Post Appointed To:</label>
        	<p><input type="text"  placeholder="Input Post Appointed To here" /></p>
            
            <label>Break of Service: <span style="color:#900;">*** Where Applicable *** </span></label>
        	<p><input type="text"  placeholder="Input Break of Service here" /></p>
            
            <label>Date of Conversion: <span style="color:#900;">*** Where Applicable *** </span></label>
        	<p><input type="date"  placeholder="Input Break of Service here" /></p>
            
          <label>Previous CADRE:</label>
        	<p><input type="text"   placeholder="Input Previous CADRE here"  /></p>
            
           <label>Present CADRE: </label>
        	<p><input type="text"   placeholder="Input Present CADRE here"  /></p>
            
            <label>Ministry:</label>
       	  <p><select >
            <option>....</option>
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
            
            
          </select></p> 
            
             <label>OYHMB:</label>
       	  <p><select >
            <option>....</option>
            <option>Adeoyo Maternity Teaching Hospital Yemetu, Ibadan</option>
            <option>Central Medical Diagnostic Centre, Total Garden, Ibadan</option>
            <option>Dental Centre Aremo</option>
            <option>Dental Centre, Dugbe</option>
            <option>General Hospital Ago Amodu</option>
            <option>General Hospital Ago-Are</option>
            <option>General Hospital Eruwa</option>
            <option>General Hospital Fiditi</option>
            <option>General Hospital Iganna</option>
            <option>General Hospital Igbeti </option>
            <option>General Hospital Ikoyi-Ile</option>			
            <option>General Hospital Iresa Adu</option>
            <option>General Hospital Iseyin</option>
            <option>General Hospital Iwere-Ile</option>
            <option>General Hospital Kasumu Ajia</option>
            <option>General Hospital Kisi</option>
            <option>General Hospital Lanlate</option>
            <option>General Hospital Moniya</option>			
            <option>General Hospital Okaka</option>
            <option>General Hospital Orile-Odo</option>
            <option>General Hospital Sepeteri</option>
            <option>General Hospital Tede</option>
            <option>General Hospital, Ado-Awayet</option>
            <option>General Hospital, Ayete</option>
            <option>General Hospital, Igboho</option>			
            <option>General Hospital, Igbo-Ora</option>
            <option>General Hospital, Ilora</option>
            <option>General Hospital, Kutayi</option>
            <option>General Hospital, Lagun/option>
            <option>General Hospital, Okeho</option>
            <option>Government Chest Hospital Jericho, Ibadan</option>
            <option>Jericho Nursing Home</option>			
            <option>Jericho Specialist Hospital</option>
            <option>Maternal & Child Health Unit, Apata, Ibadan</option>
            <option>Oni Memorial Children Hospital Ring Road</option>
            <option>OYHMB Head Quarters</option>
            <option>Ring Road State Hospital</option>
            <option>St. Peter's maternity hospital, aremo, ibadan</option>
            <option>State Hospital Ogbomoso</option>
            <option>State Hospital Oyo</option>
            <option>State Hospital Saki</option>
            <option>Zonal Hospital Store Oyo</option>
            <option>Zonal Saki</option>
            </select></p> 
            
                        
           <label>Present Grade Level:</label>
       	  <p><select >
            <option>....</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>12</option>	
            <option>13</option>
            <option>14</option>
            <option>15</option>	
            <option>16</option>
            <option>17</option>						
            
            
            </select></p> 
            
            <label>Present School:</label>
        	<p><input type="text"  placeholder="Input Present School here"  /></p>
            <label>School Zone: <span style="color:#900;">*** For TESCOM and SUBEB only *** </span></label>
       	  <p><select >
            <option>....</option>
            <option>Afijio</option>
            <option>Akinyele</option>
            <option>Atiba</option>
            <option>Atisbo</option>
            <option>Egbeda</option>
            <option>Eruwa</option>
            <option>Ibadan North East</option>
            <option>Ibadan North West</option>
            <option>Ibadan North</option>
            <option>Ibadan South East</option>
            <option>Ibadan South West</option>			
            <option>Ibadan Zone 1</option>
            <option>Ibadan Zone 2</option>
            <option>Ibarapa Central</option>
            <option>Ibarapa East</option>
            <option>Ibarapa North</option>
            <option>Ido</option>
            <option>Irepo</option>			
            <option>Iseyin</option>
            <option>Itesiwaju</option>
            <option>Iwajowa</option>
            <option>Kajola</option>
            <option>Lagelu</option>
            <option>Ogbomoso North</option>
            <option>Ogbomoso South</option>			
            <option>Ogbomoso</option>
            <option>Ogo Oluwa</option>
            <option>Olorunsogo</option>
            <option>Oluyole</option>
            <option>Ona Ara</option>
            <option>Orelope</option>
            <option>Orire</option>			
            <option>Oyo East</option>
            <option>Oyo West</option>
            <option>Saki East</option>
            <option>Saki West</option>
            <option>Saki</option>
            <option>Surulere</option>
            <option>Tescom Zonal</option>
            </select></p> 
             <label>Current Office location: <span style="color:#900;">*** e.g Saki, Oyo e.t.c. *** </span></label>
        	<p><input type="text"  placeholder="Input Current Office location here"  /></p>
            
            
             <br />
             <p class="regheader"><span style="color:#900">Section E:Record of Promotion</span></p>
              <br />
               <br />
            
        	<label>Date:</label>
        	<p><input type="date"  placeholder="Input Correspondence Address here" /></p>
            
            <label>Post:</label>
        	<p><input type="text"  placeholder="Input Permanent Address here" /></p>
            
            <label>Promoted To:</label>
        	<p><input type="text"  placeholder="Input Mobile Number here" /></p>
            
            <br />
            <p class="regheader"><span style="color:#900">Section F:Bank Details</span></p>
            <br />
            <br />
            <label>Bank Name:</label>
        	<p><input type="text"  placeholder="Input Correspondence Address here" /></p>
            
            <label>Account Name:</label>
        	<p><input type="text"  placeholder="Input Permanent Address here" /></p>
            
            <label>Account Number:</label>
        	<p><input type="text" placeholder="Input Mobile Number here" /></p>
            
             <br />
             <p class="regheader"><span style="color:#900">Section G: Authentication</span></p>
              <br />
               <br />
               
               <label>Staff Signature:</label>
        	<p><input type="text"  placeholder="Input Correspondence Address here" /></p>
            
            <label>Date:</label>
        	<p><input type="date" placeholder="Input Correspondence Address here" /></p>
            
           <label>Principal/ Head of Department Name:</label>
        	<p><input type="text"  placeholder="Input Permanent Address here" /></p>
            
            <label>Signature:</label>
        	<p><input type="text" placeholder="Input Mobile Number here" /></p>
            
            <label>Date:</label>
        	<p><input type="date" placeholder="Input Mobile Number here" /></p>
            
            <button type="submit">Update</button>
            
        </form>
    
    </div>
    <?php include( "footer.php"); ?>
    



</div>

<script src="js/avatar.js"></script>
	<script>
		new window.AvatarUpload({
			el: document.querySelector('.avatar-upload'),
			uploadUrl: '',
			uploadData: {
				foo: 'bar',
				bar: 'baz'
			},
			pretendUpload: true
		})
	</script>
</body>
</html>