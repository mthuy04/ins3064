<?php
include "connection.php";
$id=$_GET["id"];
$brand="";
$model="";
$cpu="";
$ram="";
$storage="";
$price="";

$res=mysqli_query($link,"select * from laptops where id=$id");
while ($row=mysqli_fetch_array($res))
{
    $brand=$row["brand"];
    $model=$row["model"];
    $cpu=$row["cpu"];
    $ram=$row["ram"];
    $storage=$row["storage"];
    $price=$row["price"];

}
header("location.index.php");
?>

<html lang="en" xmlns="">
<head>Laptop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <!-- short column display for forms rows -->
    <!--visit https://www.w3schools.com/bootstrap/bootstrap_forms.asp search for forms template and use it.-->
    <div class="col-lg-4">
        <h2>Add New Laptop</h2>
        <form action="" name="form1" method="post">
            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" placeholder="Enter Brand" name="brand" value="<?php echo $brand; ?>">
            </div>
            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" class="form-control" id="model" placeholder="Enter Model" name="model" value="<?php echo $model; ?>">
            </div>
            <div class="form-group">
                <label for="cpu">CPU:</label>
                <input type="text" class="form-control" id="cpu" placeholder="Enter CPU" name="cpu" value="<?php echo $cpu; ?>">
            </div>
            <div class="form-group">
                <label for="ram">Ram:</label>
                <input type="text" class="form-control" id="ram" placeholder="Enter Ram" name="ram" value="<?php echo $ram; ?>">
            </div>
            <div class="form-group">
                <label for="storage">Storage:</label>
                <input type="text" class="form-control" id="storage" placeholder="Enter Storage" name="storage" value="<?php echo $storage; ?>">
            </div>
            <div class="form-group">
                <label for="price">Price (VND):</label>
                <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="<?php echo $price; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-default">Update</button>

        </form>
    </div>
</div>

</body>

<?php
if(isset($_POST["update"]))
    {
        mysqli_query($link,"update latops set brand='$_POST[brand]',model='$_POST[model]',cpu='$_POST[cpu]',ram='$_POST[ram]',storage='$_POST[storage]',price='$_POST[price]' where id=$id");

        ?>
        <script type="text/javascript">
            window.location="index.php";
        </script>
        <?php
    }
?>

</html>