<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'csec'; 

$conn = mysqli_connect($hostName, $userName, $password, $databaseName);

if($conn){
echo "connection successful";
}
else{
echo mysqli_error();
}

?>