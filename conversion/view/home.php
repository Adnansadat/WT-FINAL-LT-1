<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
<h1>Page 1 [Home]</h1>
<form action="../controller/homeAction.php" method="POST" novalidate>
<?php
include "header.php";
?>
<h3>Converter:</h3>
<label for="category">Select Category:</label>
<select id="category" name="category">
  <option value="value">Select a value</option>
</select>
<br><br>
<label for="value">Value:</label>
<input type="text" id="value" name="value">
<input type="submit" style="color:blue;" name="Submit">
<br><br>
<label for="result">Result:</label>
<input type="text" id="result" name="result">
</form>


</body>
</html>