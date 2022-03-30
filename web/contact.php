<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$host        = "host=ec2-54-157-79-121.compute-1.amazonaws.com";
$port        = "port=5432";
$dbname      = "dbname = d1m0mqe1oeckke";
$credentials = "user = osjmfivsyfdpqd password=c0938f8c041b9b2d84446372c7b09020793f21e90ea261fde8f09879bf30ef4c";

$con = pg_connect( "$host $port $dbname $credentials"  );

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO tbl_contact(fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage');";
//echo $sql;

// insert in database 
$rs = pg_query($con, $sql);

if($rs)
{
  echo "Contact Records Inserted";
}else{
  echo "Contact Not Inserted";
}

?>