<?php
include "connection.php";


$id=$_GET["id"];
//  GET SOME IN4 ABOUT THE ITEM TO BE DELATE (OPTIONAL_)
$res=mysqli_query($link," SELECT * FROM table1 WHERE id=$id");
$item = mysqli_fetch_array($res);

if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    $delete_query = "DELETE FROM table1 WHERE id=$id";
      mysqli_query($link, $delete_query) or die(mysqli_error($link));
      header("location:index.php");
}
?>

<!-- print out confirm message to user  -->
<h1>Are you sure to delete item <?php echo $item["firstname"] . "" . $item["lastname"]; ?>?<h1>
<button><a href="delete.php?id=<?php echo $id ?>&confirm=yes">Yes</a></button>
<button><a href="index.php">No</a></button>





