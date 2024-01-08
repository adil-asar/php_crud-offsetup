
<?php

  $stu_id = $_GET['Id'];

  $connection = mysqli_connect("localhost","root","","students_info") ;
if (!$connection) {
    echo "connection failed";
}
$sql = "DELETE FROM `students` WHERE StudentID = $stu_id ";
 
mysqli_query($connection,$sql) or die("query wrong");

header("Location: http://localhost/student_info/index.php");

mysqli_close($connection);
?>