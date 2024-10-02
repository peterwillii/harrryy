<?php 
$postData = $statusMsg = ''; 
$status = 'error'; 
 
// If the form is submitted 
if(isset($_POST['submit'])){ 
    $postData = $_POST; 
    // Validate form fields 
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile'])){ 
	
	 // Posted form data 
                $name = !empty($_POST['name'])?$_POST['name']:''; 
                $email = !empty($_POST['email'])?$_POST['email']:''; 
                $phone = !empty($_POST['mobile'])?$_POST['mobile']:''; 
			     $message = !empty($_POST['message'])?$_POST['message']:''; 

	
	//$url = "http://smpp.webtechsolution.co/http-api.php?username=Yatendra001&password=Yatendra001&senderid=WEBTIC&route=1&number=9560161036&message=Dear test Thank You For Submitting Detail hello FORM WEBENTIC SERVICES PRIVATE LIMITED&templateid=1707162920500741027";

	
   echo "<script>var wnd = window.open('http://smpp.webtechsolution.co/http-api.php?username=Yatendra001&password=Yatendra001&senderid=WEBTIC&route=1&number=9560161036&message=Dear $name Thank You For Submitting Detail Ph : $phone,Em : $email, msg : $message FORM WEBENTIC SERVICES PRIVATE LIMITED&templateid=1707162920500741027','_blank');if(wnd){setTimeout(function () { wnd.close();}, 1000);}  </script>";
   //echo "<script>var xmlHttp = new XMLHttpRequest(); xmlHttp.open( 'GET', 'http://smpp.webtechsolution.co/http-api.php?username=Yatendra001&password=Yatendra001&senderid=WEBTIC&route=1&number=9560161036&message=Dear $name Thank You For Submitting Detail Ph : $phone,Em : $email, msg : $message FORM WEBENTIC SERVICES PRIVATE LIMITED&templateid=1707162920500741027', false );  xmlHttp.send( null ); return xmlHttp.responseText;</script>";
   header('Location:http://webenticservices.com/contactus');
}

else{ 
         echo "<script>alert('Please fill all the mandatory fields.Please Fill Form again');</script>";
      
    } 
}
?>