<!DOCTYPE html>
<html>
<head>
    <title>Http Request sending</title>
</head>
<body>

						<input type="submit" name="submit" onclick="httpGet();" value="Send Message" class="btn btn-light" />
						<script>
						function httpGet() {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'http://smpp.webtechsolution.co/http-api.php?username=Yatendra001&password=Yatendra001&senderid=WEBTIC&route=1&number=9560161036,9582186562&message=Dear test Thank You For Submitting Detail hello FORM WEBENTIC SERVICES PRIVATE LIMITED&templateid=1707162920500741027', false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
}
						</script>


	</body>
</html>