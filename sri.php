<?php
$con=mysqli_connect('localhost','root',"",'database1');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql="INSERT INTO sri('fname','lname','email','subject','message') VALUES ('$fname','$lname','$email','$subject','$message',)";
$rs=mysqli_query($con,$sql);
if($rs)
{
echo "SUCCESS";
}
?>