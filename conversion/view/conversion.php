<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversion</title>
</head>
<body>
<h1>Page 2 [Conversion site]</h1>
<form action="../controller/conversionAction.php" method="POST" novalidate>
<?php
include "header.php";
?>
<h3>Conversion Rate: </h3>
<label for="category">Category:</label>
<input type="text" id="category" name="category">
<br><br>
<label for="unit">Unit:</label>
<input type="text" id="unit" name="unit">
<br><br>
<label for="rate">Rate:</label>
<input type="text" id="rate" name="rate">
<input type="submit" style="color:blue;" name="Submit">
</form>
</body>
</html>