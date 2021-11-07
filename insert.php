<?php

include"dp.php";

$un=$_POST['username'];
$pwd=$_POST['password'];
$email=$_POST['email'];


echo $un;

$sql="insert into register(username,password,email) values('$un','$pwd','$email')";

$result=mysqli_query($con,$sql);

if($result){

	header("location:login.php");

}else{

	echo "error";
}

?>