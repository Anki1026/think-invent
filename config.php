<?php
$servername="localhost";
$username="root";
$password="";
$dbname="userlogin";

$conn= mysqli_connect($servername,$username,$password);
$selected=mysqli_select_db($conn,$dbname);
if($conn)
 { 
   echo "";
 }

else
 {
   echo("Connection failed because ".mysqli_connect_error());
 }
?>
