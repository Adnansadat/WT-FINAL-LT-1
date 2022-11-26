<?php
require "database.php";
echo "<br>";
$print= "";
 
		$category=$_POST['category'];
		$unit=$_POST['unit'];
		$rate=$_POST['rate'];

	$sql = "INSERT INTO converter(Category, Unit, Rate) VALUES('$category','$unit','$rate')";
	$query= mysqli_query($conn,$sql);

	if($query)
		{
			echo "Entry Done";
			header("Location: ../view/conversion.php");
		}
	else
		{
			echo"Error..!";
		}

	mysqli_close($conn);
	

?>