<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <?php
    include 'header.php'
    ?>
<div class="main_content" >
<h1>
    Student Information System
</h1>

<?php

$conn = mysqli_connect("localhost","root","","students_info") or die("connection failed");
$sql = "SELECT * FROM `students` JOIN classes WHERE students.Class = classes.ClassID" ;
$result = mysqli_query($conn,$sql) or die("something went wrong");
if (mysqli_num_rows($result) > 0) {

?>

<table>
        <thead> 
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Class</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while ($rows = mysqli_fetch_assoc($result)) {
                
            
            ?>
            <tr>
                <td> <?php echo $rows['FullName']; ?> </td>
                <td><?php echo $rows['Email']; ?></td>
                <td><?php echo $rows['Gender']; ?></td>
                <td><?php echo $rows['PhoneNumber']; ?></td>  
                <td><?php echo $rows['ClassName']; ?></td>
                <td class="operations"> 
                <a href="edit_student.php?Id=<?php echo $rows['StudentID']; ?>" class="edit-button">Edit</a>
                <a href="delete_student.php?Id=<?php echo $rows['StudentID']; ?>" class="delete-button">Delete</a>
                </td>
            </tr>
            <?php 
            } 
            ?>
        </tbody>
    </table>
<?php
} else {
    echo "no data founds";
}
mysqli_close($conn);
?>
</div>

</body>
</html>