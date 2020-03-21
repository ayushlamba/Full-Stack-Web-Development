<?php
include('config.php');
?>
<?php $id=$_GET['id'];
?>

<?php
    $sql = "SELECT * FROM `user` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $enrolment = $data['Enrollment'];
    $username = $data['Name'];
    $age = $data['Age'];
    $course = $data['Course'];
    $branch = $data['Branch'];
    $contact = $data['Contact'];
    $email = $data['Email'];
?>

<?php
if(isset($_POST['btn'])){
    $enrolment = $_POST['enrollment'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $sql = "UPDATE `user` SET Enrollment='$enrolment',Name='$username', Age='$age',Course='$course',Branch='$branch', Contact='$contact', Email='$email' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
        header("Location:rt.php");
    }
    else{
        echo "Updation Failed...Try Again";
    }
}
else{
    echo "";
}
?>

<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
        <center>
    <form action="edit1.php?id=<?php echo $id ?>" method="post">
      Enrolment: <input type="text" name="enrollment" value="<?php echo $enrolment; ?>"placeholder="Enter enrollment"><br>
      Name: <input type="text" name="username" value="<?php echo $username; ?>"><br>
      Age:<input type="text" name="age"  value="<?php echo $age; ?>" placeholder="Enter Age"><br>
      course: <input type="text" name="course" value="<?php echo $course; ?>" placeholder="Enter course"><br>
      branch: <input type="text" name="branch" value="<?php echo $branch; ?>" placeholder="Enter branch"><br>
      Contact:<input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="Enter contact"><br>
      Email: <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter email"><br>
      <input type="submit" name='btn' value="Update">
    </form></center>
    </body>
</html>