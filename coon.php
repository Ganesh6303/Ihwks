<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$con =mysqli_connect("localhost","root","","Calculator");
	if(mysqli_connect_error())
	{
		echo"Failed to connect to MySQL:". myqli_connect_error();
	
	}
	$db =mysql_select_db("binding",$connection);
	
		$page = $_POST['page'];
		$copy = $_POST['copy'];
		$color = $_POST['color'];
		$size = $_POST['size'];
			$print = $_POST['print'];
			$bind = $_POST['bind'];
			$side= $_POST['side'];
		

	
	
	$sql="INSERT into 'binding'(Page,Copy,FColor,Size,Color,Bind,Sides)VALUES('$page','$copy','$color','$size','$print','$bind','$side')");
	if(mysqli_query($con,$sql)){
		echo"Records inserted successfully.";
	}
	else{
		echo"ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
	mysqli_close($con);
	?>
</body>
</html>