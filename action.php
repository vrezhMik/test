<?php
$mood = $_POST["mood"];
$file = fopen("./data.txt", "w");
fwrite($file, $mood);
fclose($file);
header("location:index.php");
