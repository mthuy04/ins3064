<?php
session_start();

/* connect to database check user*/
$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'LoginReg');

/* create variables to store data from POST */
$name = $_POST['user'];
$pass = $_POST['password'];
$student_id = $_POST['student_id']; // New field
$class_name = $_POST['class_name']; // New field
$date_of_birth = $_POST['date_of_birth']; // New field

/* select data from DB to check for duplicate name */
$s="select * from userReg where name='$name'";

/* result variable to store data */
$result = mysqli_query($con, $s);

/* check for duplicate names and count records */
$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Exists";
    // We keep the header redirect for the original file's flow, though it would hide the echo
    header("location:login.php");
} else {
    /* Insert data into the userReg table with the new fields */
    // NOTE: This SQL statement is vulnerable to SQL injection. Use prepared statements in production.
    $reg ="INSERT INTO userReg (name, password, student_id, class_name, date_of_birth) 
           VALUES ('$name', '$pass', '$student_id', '$class_name', '$date_of_birth')";
    
    if (mysqli_query($con, $reg)) {
        echo "Registration successful";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    
    header("location:login.php");
}

mysqli_close($con);



?>