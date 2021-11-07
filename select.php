<?php

include"db.php";

$un=$_POST['Username'];
$pwd=$_POST['password'];
$sql="select * from register where username='$un'and password='$pwd'";
$result=mysqli_quary($con,$sql);
$count=mysqli_num_rows($result);

echo $count;

if($count>0){

	header("location: home.php");


}else{

	header("location: login.php");

}
?>