
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="./css/add.css">
</head>
<body>
    <?php
    include "header.php";
   
    ?>


<div class="main_section_form">
    <form action="update_student.php" method="post">

   <h1>
    Update Student
   </h1>

   <?php
 $stu_id = $_GET['Id'];
 $conn = mysqli_connect("localhost","root","","students_info") or die("connection failed");
 $sql = " SELECT * FROM `students` WHERE StudentID = {$stu_id }";
$result = mysqli_query($conn,$sql) or die("something went wrong");
if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
   ?>
     <input type="hidden" name="student_id" value="<?php echo $rows['StudentID']; ?>">
    <label for="name">Name:</label>
        <input type="text" id="name" value=" <?php echo $rows['FullName']; ?> " name="name" required>

     <div class="genders">
     <div class="gender">
        <input type="radio" id="male" name="gender"  <?php echo ($rows['Gender'] == 'M') ? 'checked' : ''; ?> value="M" required>
        <label for="male">Male</label>
        </div>
      <div class="gender">
      <input type="radio" id="female" name="gender"  <?php echo ($rows['Gender'] == 'F') ? 'checked' : ''; ?> value="F" required>
        <label for="female">Female</label>
      </div>
     </div>

        <label for="email">Email:</label>
        <input type="email" value="<?php echo $rows['Email']; ?>" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" value="<?php echo $rows['PhoneNumber']; ?>" name="phone" required>

        <label for="class">Class:</label>
        <select id="class" name="class" required>
        <option value="" Selected Disabled> Select Class</option>
                    <?php
                    $sql1 = "SELECT * FROM `classes`";
                    $result1 = mysqli_query($conn, $sql1) or die("something went wrong");
                    while ($classRow = mysqli_fetch_assoc($result1)) {
                    ?>
                        <option 
                        <?php echo ($rows['Class'] == $classRow['ClassID']) ? 'Selected' : ''; ?>
                        value="<?php echo $classRow['ClassID']; ?>">
                        <?php echo $classRow['ClassName']; ?>
                    </option>
                    <?php
                    }
                    ?>

        </select>
<?php 
    }
}
?>
        <button type="submit">Submit</button>
    </form>
    </div>


</body>
</html>