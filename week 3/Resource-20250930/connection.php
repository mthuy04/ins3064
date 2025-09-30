<?php
// --- THÔNG TIN KẾT NỐI --- //
$db_host = "localhost";
$db_user = "root"; // SỬA LẠI Ở ĐÂY
$db_pass = ""; 
$db_name = "LoginReg";
$db_port = 3310;

// --- TẠO KẾT NỐI --- //
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);

// --- KIỂM TRA KẾT NỐI --- //
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($link, "utf8");
?>