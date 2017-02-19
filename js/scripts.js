
jQuery(document).ready(function() {
    /*
        Background slideshow
    */
    $.backstretch(
	["img/backgrounds/2.png","img/backgrounds/1.jpg","img/backgrounds/3.jpg"], 
	{duration: 3000, fade: 750}
	);
    });

  

 /*
        Logout
    */
 
 function logout(){
	swal({
  title: "Are you sure?",
  text: "You will be logged out from this account!",
  type:"warning",
  showCancelButton: true,
  confirmButtonColor: "rgba(153,0,0,.6)",
  cancelButtonColor:"#f00",
  confirmButtonText: "Yes, Log me out!",
  cancelButtonText: "No, Cancel please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
	window.parent(location="index.php");
  } else {
	    swal("Cancelled", "Progress Saved", "success");
  }
  
  
  });
	}