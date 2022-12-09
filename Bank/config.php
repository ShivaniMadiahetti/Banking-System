<?php 
$host="localhost:3308";
$user="root";
$pass="";
$db="sparks_bank";
$conn=mysqli_connect($host,$user,$pass,$db);
/*$server="localhost:3306";
$username="root";
$password="SHIvani@031";
$db="sparks_bank";

$conn=mysqli_connect($server,$username,$password,$db);*/

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>
