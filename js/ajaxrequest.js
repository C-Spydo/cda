	
	function ajaxfunction(){

		var ajaxRequest;

		if(window.XMLHttpRequest){

			ajaxRequest = new XMLHttpRequest();

		}	
		
		else{
			ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
		}

		

	ajaxRequest.onreadystatechange = function(){

			if(ajaxRequest.readyState==4){

			//	document.myform.time.value = ajaxRequest.responseText;
			//var age = 

				document.getElementById('town').innerHTML = ajaxRequest.responseText;
				//document.getElementById('lga').innerHTML = ajaxRequest.responseText;
				//document.getElementById('comid').innerHTML = ajaxRequest.responseText;

			//document.getElementById('show').innerHTML = ajaxRequest.responseText;


			}

	}	
			
			var code = document.getElementById('commname').value;

			var querystry ="?code="+ code;
			
			ajaxRequest.open("GET","Vry_name.php" + querystry,true);
				ajaxRequest.send(null);

}



	function ajaxfunction2(){

		var ajaxRequest;

		if(window.XMLHttpRequest){

			ajaxRequest = new XMLHttpRequest();

		}	
		
		else{
			ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
		}

		

	ajaxRequest.onreadystatechange = function(){

			if(ajaxRequest.readyState==4){

			//	document.myform.time.value = ajaxRequest.responseText;
			//var age = 

				document.getElementById('credit').innerHTML = ajaxRequest.responseText;
			//document.getElementById('show').innerHTML = ajaxRequest.responseText;


			}

	}	
			
			var code = document.getElementById('code2').value;

			var querystry ="?code="+ code;
			
			ajaxRequest.open("GET","Vry_name.php" + querystry,true);
				ajaxRequest.send(null);

}
