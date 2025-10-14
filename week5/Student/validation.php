<?php
session_start();

/* connect to database check user*/
$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'LoginReg');

/* create variables to store data */
$name =$_POST['user'];
$pass =$_POST['password'];

/* select data from DB - now selecting all columns * to get student info */
$s="select * from userReg where name='$name'&& password='$pass'";

/* result variable to store data */
$result = mysqli_query($con,$s);

/* check for duplicate names and count records */
$num =mysqli_num_rows($result);

if($num == 1){
    // Fetch the user record
    $user_data = mysqli_fetch_assoc($result);

    /* Storing the username and other details in session */
    $_SESSION['username'] = $name;
    // Storing the additional fields
    $_SESSION['student_id'] = $user_data['student_id']; 
    $_SESSION['class_name'] = $user_data['class_name'];
    $_SESSION['date_of_birth'] = $user_data['date_of_birth'];
    
    header('location:home.php');
}else{
    header('location:login.php');
}



?>