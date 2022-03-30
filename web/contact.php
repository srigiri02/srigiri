<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$host        = "host=ec2-54-173-77-184.compute-1.amazonaws.com";
$port        = "port=5432";
$dbname      = "dbname = d2idq0j9577bq7";
$credentials = "user = uhstuthvacrjem password=cff386185e984a6151825844d5f8051e460bceb92558ed7e9758c5fdea05092d";

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
