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

                // Send email notification to the site admin 
                $to = 'geek75122@gmail.com';
                
                $subject = 'Geeks Contact'; 
                $htmlContent = " 
                    <h1>Contact request details</h1> 
                    <p><b>Name: </b>".$name."</p> 
                    <p><b>Email: </b>".$email."</p> 
                    <p><b>Phone: </b>".$phone."</p> 
			        <p><b>Message: </b>".$message."</p> 
                "; 
                 
                // Always set content-type when sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
                // More headers 
                $headers .= 'From:'.$name.' <geek75122@gmail.com>' . "\r\n"; 
             
                 
                // Send email 
				mail($to,$subject,$htmlContent,$headers); 
                
                 
				header('Location:thankyou.php');

    }else{ 
         echo "<script>alert('Please fill all the mandatory fields.Please Fill Form again');</script>";
      
    } 
} 
?>
  