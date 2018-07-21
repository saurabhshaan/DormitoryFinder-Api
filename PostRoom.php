<?php
define('HOST','localhost');
define('USER','root');
define('PASS',"1234");
define('DB','DormetryFinder');
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Connection Failed');
 
$full_name=$_POST['Full_Name'];
$address=$_POST['Address'];
$city=$_POST['City'];
$mobile=$_POST['Mobile'];
$image=$_POST['Image'];

$decodedImage=base64_decode($image);
file_put_contents("./image/".$mobile.'.jpg',$decodedImage);

$imagePath=("http://172.28.172.2:8080/DormetoryFinder/image/".$mobile.'.jpg');

$sql="INSERT INTO `PostRoom`(`Full_Name`, `Address`, `City`, `Mobile`, `Image`) VALUES ('$full_name','$address','$city','$mobile','$imagePath')";

echo "$sql";

if(mysqli_query($con,$sql))
 {
   echo "Successfull";
 }
  else
{
	echo mysqli_error($con);
      echo 'Unsuccessfull';
}
  mysqli_close($con);
?>