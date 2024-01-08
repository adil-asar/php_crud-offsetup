
<?php


$stu_id = $_POST['student_id'];
$stu_name = $_POST['name'] ;
$stu_gender = $_POST['gender'];
$stu_email = $_POST['email']; 
$stu_phone = $_POST['phone'];
$stu_class = $_POST['class'];

$conn = mysqli_connect("localhost","root","","students_info") or die("connection failed");

$update_query = "UPDATE students
                         SET FullName= '{$stu_name}', Gender= '{$stu_gender}', Email='{$stu_email}', PhoneNumber= '{$stu_phone}', Class= '{$stu_class}'
                         WHERE StudentID= $stu_id";
                         mysqli_query($conn,$update_query) or die("something went wrong");
                         header("Location: http://localhost/student_info/index.php");
                         mysqli_close($conn);
?>
