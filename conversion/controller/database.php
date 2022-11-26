<?php
	
	$hostname='localhost';
	$username='root';
	$password='';
	$dbname='conversion';

	$conn = mysqli_connect($hostname,$username,$password,$dbname);

	$print="Connection successful!";

	if($conn)
		{
			echo $print;
		}
	else
		{
			echo "Connection Failed!";
		}


?>