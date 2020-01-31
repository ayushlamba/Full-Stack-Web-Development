<?php
include('config.php');
?>

<?php 
if (isset($_POST['submit'])){

$username =$_POST['username'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$email = $_POST['email'];

    $sql  = "INSERT INTO `students` (name, age, contact, email) 
    VALUES ('$username', '$age', '$contact', '$email')";
    if(mysqli_query($conn, $sql)){
        echo 'Data Inserted successfully';
    }
    else{
        echo 'Data inserted failed'.mysqli_error($conn);
    }
}
else{
    echo "Welcome Guest";
}
?>