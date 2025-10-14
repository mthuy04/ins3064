<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html lang='en'>
<head>
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
<div class="container">

    <a class="float-right" href="logout.php">LOGOUT</a>
    <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>

    <div style="color: white; margin-top: 50px; text-align: center;">
        <h2>Your Details</h2>
        <p><strong>Student ID:</strong> <?php echo $_SESSION['student_id']; ?></p>
        <p><strong>Class Name:</strong> <?php echo $_SESSION['class_name']; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $_SESSION['date_of_birth']; ?></p>
    </div>

</div>

</body>
</html>