<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','1234');	
	define('DB','DormetryFinder');	
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

	$user_name = $_POST['CITY'];

$sql = "SELECT * FROM `PostRoom` WHERE City='$user_name'";
$result=mysqli_query($con,$sql);

$response=array();
while($row=mysqli_fetch_array($result))
{
array_push($response,array(

"Full_Name"=>$row["Full_Name"],
	"Address"=>$row["Address"],
	"City"=>$row["City"],
	"Mobile"=>$row["Mobile"]
	// "Image"=>["Image"]
));
}

 echo json_encode($response);


?>
