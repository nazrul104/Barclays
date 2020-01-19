<html>
<head>
	<?php
	var_dump($_POST);
	?>
</head>
<body>
 
<form method="post" action="https://mdepayments.epdq.co.uk/ncol/test/orderstandard.asp" id="form1" name="form1">
 
<input type="hidden" name="PSPID" value="epdq1134902">
<input type="hidden" name="ORDERID" value="INV-0002">
<input type="hidden" name="AMOUNT" value="1500">
<input type="hidden" name="CURRENCY" value="GBP">
<input type="hidden" name="LANGUAGE" value="en-gb">
<input type="hidden" name="CN" value="Rimon Rahman">
 
<input type="hidden" name="SHASIGN" value="Mysecretsig1875!?!">
 
<input type="submit" value="Submit" id="submit2" name="submit2">
</form>
 
</body>
</head>
</html>