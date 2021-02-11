<?php

$con=mysqli_connect('localhost','root','');

if(!$con){
	echo "Not Connect";
}
if(!mysqli_select_db($con,'tutorial')){
	echo "Database not Selected";
}

$name=$_POST['username'];
$email=$_POST['email'];

$sql="INSERT INTO person (Name,Email) VALUES ('$name','$email')";
if (!mysqli_query($con,$sql)){
	echo "Not inserted";
}else{
	echo "Inserted";
}
header("refresh:2;url=aftab.php");

?>

