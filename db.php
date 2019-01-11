<?php
$host="localhost";
$username="root";
$password="";
$dbname="todo";
$conn=mysqli_connect($host, $username, $password, $dbname);
 if(!($conn)){
	echo "connection error";
}
else{
	//echo "connection successful";


}
?>