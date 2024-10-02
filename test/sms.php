<!DOCTYPE html>
<html>
<head>
    <title>Http Request sending</title>
</head>
<body>
<form class="" action="send.php" method="post">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" required name="name" class="form-control required name" placeholder="Enter your Name">
                                </div>
								</div>
							<div class="row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" required name="email" class="form-control required email" placeholder="Enter your Email">
                                </div>
								 <div class="form-group col-md-6">
                                    <label for="email">Mobile</label>
                                    <input type="text" class="form-control required name" required name="mobile" placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" required name="message" rows="8" class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" onclick="httpGet();" value="Send Message" class="btn btn-light" /></li>
                            </div>
                        </form>
						
						<script>
						//function httpGet() {
						//  var xmlHttp = new XMLHttpRequest();
						//  xmlHttp.open( "GET", 'http://smpp.webtechsolution.co/http-api.php?username=Yatendra001&password=Yatendra001&senderid=WEBTIC&route=1&number=9560161036&message=Dear test Thank You For Submitting Detail hello FORM WEBENTIC SERVICES PRIVATE LIMITED&templateid=1707162920500741027', false ); // false for synchronous request
						//  xmlHttp.send( null );
						//  return xmlHttp.responseText;
						//}
						function httpGet() {
							alert("hello");
								var popupwin = window.open('http://smpp.webtechsolution.co/http-api.php?username=Yatendra001&password=Yatendra001&senderid=WEBTIC&route=1&number=9560161036&message=Dear $name Thank You For Submitting Detail Ph : $phone,Em : $email, msg : $message FORM WEBENTIC SERVICES PRIVATE LIMITED&templateid=1707162920500741027','anyname','width=10,height=1,left=5,top=3');
								setTimeout(function() { popupwin.close();}, 100);
							}
						</script>


	</body>
</html>