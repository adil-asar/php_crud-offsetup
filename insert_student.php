

<?php

 $stu_name = $_POST['name'] ;
 $stu_gender = $_POST['gender'];
 $stu_email = $_POST['email'];
 $stu_phone = $_POST['phone'];
 $stu_class = $_POST['class'];

 $conn = mysqli_connect("localhost","root","","students_info") or die("connection failed");
 $sql = "INSERT INTO `students`( `FullName`, `Gender`, `Email`, `PhoneNumber`, `Class`) VALUES ('{$stu_name}','{$stu_gender}','{$stu_email}','{$stu_phone}','{$stu_class}')";
 $result = mysqli_query($conn,$sql) or die("something went wrong");
 header("Location: http://localhost/student_info/index.php");
mysqli_close($conn);
?>