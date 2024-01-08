<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .main {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 88vh;
    }

    .form-container {
      padding: 20px;
      border-radius:10px;
      background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
      width: 500px;
      text-align: center;
    }

    .form-container h1 {
      font-weight: 300;
      letter-spacing: 2px;
      margin-bottom: 10px;
    }

    .form-input {
        border:none;
        outline:none;
      width: 100%;
      padding:8px;
      margin: 10px 0;
      margin-bottom: 18px;
    
    }

    .form-button {
      background-color: #4caf50;
      color: #fff;
      padding: 6px 16px;
      border: none;
      border-radius: 4px;
      letter-spacing: 1px;
      cursor: pointer;
      font-size: 14px;
      letter-spacing: 1px;
    }

    @media (max-width: 600px) {
      .form-container {
        width: 90%;
      }
    }
  </style>
</head>
<body>
<?php include 'header.php';

if (isset($_POST['deletebtn'])) {
    
    $conn = mysqli_connect("localhost","root","","students_info") or die("connection failed");

    $student_id = $_POST['student_id'];
    $sql = "DELETE FROM `students` WHERE StudentID = $student_id ";
 
mysqli_query($conn,$sql) or die("query wrong");

header("Location: http://localhost/student_info/index.php");

mysqli_close($conn);
}


 ?>
<div class="main">
  <div class="form-container">
    <h1>Delete Student</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
      <input type="text" name="student_id" class="form-input" placeholder="Enter Id">
      <button type="submit" name="deletebtn" class="form-button">Submit</button>
    </form>
  </div>
  </div>
</body>
</html>
