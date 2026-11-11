<?php
$config = mysqli_connect("localhost", "root", "", "review");
if (!$config) { die("Lỗi kết nối: " . mysqli_connect_error()); }
mysqli_set_charset($config, "utf8");
?>