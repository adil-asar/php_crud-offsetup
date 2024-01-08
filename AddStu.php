<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link rel="stylesheet" href="./css/add.css">
</head>
<body>
<?php include 'header.php' ?>

<div class="main_section_form">
    <form action="insert_student.php" method="post">

   <div class="logo_add" >
   <img width="68" height="68" src="https://img.icons8.com/color/48/add-user-group-man-man--v1.png"
     alt="add-user-group-man-man--v1"/>
      
   </div>
    <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

      
     <div class="genders">
     <div class="gender">
        <input type="radio" id="male" name="gender" value="M" required>
        <label for="male">Male</label>
        </div>
      <div class="gender">
      <input type="radio" id="female" name="gender" value="F" required>
        <label for="female">Female</label>
      </div>
     </div>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="class">Class:</label>
        <select id="class" name="class" required>
            <option > -- Select Class --</option>
            <?php
            $conn = mysqli_connect("localhost","root","","students_info") or die("connection failed");
            $sql = "SELECT * FROM `classes`";
            $result = mysqli_query($conn,$sql) or die("something went wrong");
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
           <option value=<?php echo $rows['ClassID']; ?>> <?php echo $rows['ClassName']; ?> </option>

            <?php } ?>
           
        </select>

        <button type="submit">Submit</button>
    </form>
    </div>
</body>
</html>
