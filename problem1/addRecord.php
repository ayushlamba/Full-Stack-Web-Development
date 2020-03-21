<?php
include_once('config.php');
?>
<?php
    if(isset($_POST['submit'])){
    $enroll = $_POST['Enrollment'];
    $name = $_POST['Name'];
    $age = $_POST['Age'];
    $course = $_POST['Course'];
    $branch=$_POST['Branch'];
    $contact=$_POST['Contact'];
    $email=$_POST['Email'];
        
    $sql = "INSERT INTO `user` (Enrollment,Name,Age,Course,Branch,Contact,Email)
    VALUES ('$enroll','$name','$age','$course','$branch','$contact','$email')";
        
    if(mysqli_query($conn, $sql)){
        echo 'Data inserted successfully...';
        header("Location:rt.php");
    }
        else{
            echo 'Data insertion failed...'.mysqli_error($conn) ;
        }
}
else{
    echo "Please go back to Input Page.";
}
?>